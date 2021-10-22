<?php

namespace AlipaySdk\Aop\Request;

/**
 * ALIPAY API: alipay.gotone.message.mail.send request
 *
 * @author auto create
 * @since  1.0, 2021-03-29 15:24:04
 */
class AlipayGotoneMessageMailSendRequest
{
    /**
     * 模板参数
     **/
    private $arguments;

    /**
     * 收件人邮箱地址
     **/
    private $receiver;

    /**
     * 邮件模板对应的serviceCode
     **/
    private $serviceCode;

    /**
     * 邮件标题
     **/
    private $subject;

    /**
     * 用户的支付宝ID
     **/
    private $userId;

    private $apiParas    = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion  = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getArguments()
    {
        return $this->arguments;
    }

    public function setArguments($arguments)
    {
        $this->arguments             = $arguments;
        $this->apiParas["arguments"] = $arguments;
    }

    public function getReceiver()
    {
        return $this->receiver;
    }

    public function setReceiver($receiver)
    {
        $this->receiver             = $receiver;
        $this->apiParas["receiver"] = $receiver;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    public function setServiceCode($serviceCode)
    {
        $this->serviceCode              = $serviceCode;
        $this->apiParas["service_code"] = $serviceCode;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject             = $subject;
        $this->apiParas["subject"] = $subject;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId              = $userId;
        $this->apiParas["user_id"] = $userId;
    }

    public function getApiMethodName()
    {
        return "alipay.gotone.message.mail.send";
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
