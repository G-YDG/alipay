<?php

namespace AlipaySdk\Aop\Request;

/**
 * ALIPAY API: alipay.security.prod.signature.file.upload request
 *
 * @author auto create
 * @since  1.0, 2019-01-07 20:51:15
 */
class AlipaySecurityProdSignatureFileUploadRequest
{
    /**
     * 业务唯一标识，由支付宝统一分配，无法自助获取
     **/
    private $bizProduct;

    /**
     * 传入上传的文件流
     **/
    private $fileContent;

    private $apiParas    = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion  = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getBizProduct()
    {
        return $this->bizProduct;
    }

    public function setBizProduct($bizProduct)
    {
        $this->bizProduct              = $bizProduct;
        $this->apiParas["biz_product"] = $bizProduct;
    }

    public function getFileContent()
    {
        return $this->fileContent;
    }

    public function setFileContent($fileContent)
    {
        $this->fileContent              = $fileContent;
        $this->apiParas["file_content"] = $fileContent;
    }

    public function getApiMethodName()
    {
        return "alipay.security.prod.signature.file.upload";
    }

    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function getTerminalType()
    {
        return $this->terminalType;
    }

    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }

    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
    }

    public function getProdCode()
    {
        return $this->prodCode;
    }

    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
    }

    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function getNeedEncrypt()
    {
        return $this->needEncrypt;
    }

    public function setNeedEncrypt($needEncrypt)
    {
        $this->needEncrypt = $needEncrypt;
    }

}
