<?php

namespace AlipaySdk\Aop\Request;

/**
 * ALIPAY API: alipay.user.validate request
 *
 * @author auto create
 * @since  1.0, 2019-03-08 15:29:11
 */
class AlipayUserValidateRequest
{
    /**
     * 用户的支付宝登陆号
     **/
    private $logonId;

    private $apiParas    = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion  = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getLogonId()
    {
        return $this->logonId;
    }

    public function setLogonId($logonId)
    {
        $this->logonId              = $logonId;
        $this->apiParas["logon_id"] = $logonId;
    }

    public function getApiMethodName()
    {
        return "alipay.user.validate";
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
