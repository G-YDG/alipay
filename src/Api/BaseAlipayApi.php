<?php

namespace AlipaySdk\Api;

use AlipaySdk\Aop\AopCertClient;
use Exception;
use ReflectionClass;
use ReflectionException;
use SimpleXMLElement;

class BaseAlipayApi
{
    /**
     * @var AopCertClient $aopClient
     */
    private $aopClient;

    /**
     * @var string 支付宝网关
     */
    public $gatewayUrl = 'https://openapi.alipay.com/gateway.do';

    /**
     * @var string 格式
     */
    public $format = 'json';

    /**
     * @var string 字符集
     */
    public $postCharset = 'UTF-8';

    /**
     * @var string 签名类型
     */
    public $signType = 'RSA2';

    /**
     * @var string 应用ID
     */
    public $appId;

    /**
     * @var string 应用私钥
     */
    public $rsaPrivateKey;

    /**
     * @var string 应用私钥文件路径
     */
    public $rsaPrivateKeyFilePath;

    /**
     * @var string 应用证书序列号
     */
    public $appCertSN;

    /**
     * @var string 应用证书路径（要确保证书文件可读）
     */
    public $appCertPath;

    /**
     * @var string 支付宝公钥证书路径（要确保证书文件可读）
     */
    public $alipayCertPath;

    /**
     * @var string 支付宝公钥
     */
    public $alipayRsaPublicKey;

    /**
     * @var string 支付宝根证书序列号
     */
    public $rootCertSN;

    /**
     * @var string 支付宝根证书路径（要确保证书文件可读）
     */
    public $rootCertPath;

    /**
     * @var string $defaultErrMsg 请求默认错误信息
     */
    public $defaultErrMsg = '服务器繁忙，请稍后重试';

    /**
     * BaseAlipayApi constructor.
     *
     * @param $properties
     *
     * @throws ReflectionException
     */
    public function __construct($properties = [])
    {
        $this->aopClient = new AopCertClient;

        if (!empty($properties)) {
            $this->setProperties($properties)->setOptions();
        }
    }

    /**
     * 设置属性
     *
     * @param $properties
     *
     * @return $this
     * @throws ReflectionException
     */
    public function setProperties($properties)
    {
        try {
            $class = new ReflectionClass($this);

            foreach ($class->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
                if (!$property->isStatic()) {
                    $name = $property->getName();
                    if (isset($properties[$name])) {
                        $this->$name = $properties[$name];
                    }
                }
            }

            return $this;
        } catch (ReflectionException $e) {
            throw $e;
        }
    }

    /**
     * 设置配置项
     * @return $this
     */
    public function setOptions()
    {
        $this->aopClient->gatewayUrl = $this->gatewayUrl;

        $this->aopClient->appId = $this->appId;

        $this->aopClient->format = $this->format;

        $this->aopClient->postCharset = $this->postCharset;

        $this->aopClient->signType = $this->signType;

        // 应用私钥
        $this->aopClient->rsaPrivateKey = $this->rsaPrivateKey;

        if (!$this->checkEmpty($this->rsaPrivateKeyFilePath)) {
            // 应用私钥文件
            $this->aopClient->rsaPrivateKeyFilePath = $this->rsaPrivateKeyFilePath;
        }

        if (!$this->checkEmpty($this->alipayRsaPublicKey)) {
            //支付宝公钥
            $this->aopClient->alipayrsaPublicKey = $this->alipayRsaPublicKey;
        }

        if (!$this->checkEmpty($this->alipayCertPath)) {
            //从支付宝公钥证书中提取公钥
            $this->aopClient->alipayrsaPublicKey = $this->aopClient->getPublicKey($this->alipayCertPath);
        }

        if (!$this->checkEmpty($this->appCertSN)) {
            //获取应用证书序列号
            $this->aopClient->appCertSN = $this->appCertSN;
        }

        if (!$this->checkEmpty($this->appCertPath)) {
            //从应用公钥证书中提取公钥
            $this->aopClient->appCertSN = $this->aopClient->getPublicKey($this->appCertPath);
        }

        if (!$this->checkEmpty($this->rootCertSN)) {
            //获取支付宝根证书序列号
            $this->aopClient->alipayRootCertSN = $this->rootCertSN;
        }

        if (!$this->checkEmpty($this->rootCertPath)) {
            //获取支付宝根证书序列号
            $this->aopClient->alipayRootCertSN = $this->rootCertPath;
        }

        if (!$this->checkEmpty($this->aopClient->alipayRootCertSN)) {
            //是否校验自动下载的支付宝公钥证书，如果开启校验要保证支付宝根证书在有效期内
            $this->aopClient->isCheckAlipayPublicCert = true;
        }

        return $this;
    }

    /**
     * 校验是否非空
     *
     * @param $value
     *
     * @return bool
     */
    protected function checkEmpty($value)
    {
        if (!isset($value)) {
            return true;
        }

        if ($value === null) {
            return true;
        }

        if (trim($value) === "") {
            return true;
        }

        return false;
    }

    /**
     * 设置默认请求错误信息
     *
     * @param string $errMsg 默认请求错误信息
     *
     * @return $this
     */
    public function setDefaultErrMsg($errMsg)
    {
        $this->defaultErrMsg = $errMsg;

        return $this;
    }

    /**
     * 重置默认请求错误信息
     *
     * @return $this
     */
    public function resetDefaultErrMsg()
    {
        $this->defaultErrMsg = '服务器繁忙，请稍后重试';

        return $this;
    }

    /**
     * 获取请求处理器
     *
     * @return AopCertClient
     */
    public function getAopClient()
    {
        return $this->aopClient;
    }

    /**
     * 发起请求
     *
     * @param $request
     * @param $params
     *
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function executeRequest($request, $params)
    {
        $bizContent = json_encode($params, JSON_UNESCAPED_UNICODE);

        $request->setBizContent($bizContent);

        $result = $this->aopClient->execute($request);

        if (!$result) {
            throw new Exception($this->defaultErrMsg);
        }

        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        $resultCode   = $result->$responseNode->code;

        if (empty($resultCode) || $resultCode != 10000) {
            throw new Exception($result->$responseNode->sub_msg ?: $this->defaultErrMsg, $resultCode ?: 1001);
        }

        $this->resetDefaultErrMsg();

        return $result->$responseNode;
    }

    /**
     * 发起跳转类请求
     *
     * @param        $request
     * @param        $params
     * @param string $notifyUrl
     * @param string $returnUrl
     * @param string $httpMethod
     *
     * @return string
     * @throws Exception
     */
    public function pageExecute($request, $params, $notifyUrl = '', $returnUrl = '', $httpMethod = "POST")
    {
        $class = new \stdClass();

        foreach ($params as $key => $param) {
            $class->$key = $param;
        }

        $bizContent = json_encode($params);

        $request->setBizContent($bizContent);

        $request->setNotifyUrl($notifyUrl);

        $request->setReturnUrl($returnUrl);

        $result = $this->aopClient->pageExecute($request, $httpMethod);

        if (!$result) {
            throw new Exception($this->defaultErrMsg);
        }

        $this->resetDefaultErrMsg();

        return $result;
    }
}