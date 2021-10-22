<?php

namespace AlipaySdk\Aop\Request;

/**
 * ALIPAY API: alipay.credit.creditrisk.dashboard.query request
 *
 * @author auto create
 * @since  1.0, 2019-01-07 20:51:15
 */
class AlipayCreditCreditriskDashboardQueryRequest
{
    /**
     * 支付宝userId
     **/
    private $alipayUserId;

    /**
     * 需要过滤的字段
     **/
    private $fields;

    private $apiParas    = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion  = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getAlipayUserId()
    {
        return $this->alipayUserId;
    }

    public function setAlipayUserId($alipayUserId)
    {
        $this->alipayUserId               = $alipayUserId;
        $this->apiParas["alipay_user_id"] = $alipayUserId;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($fields)
    {
        $this->fields             = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getApiMethodName()
    {
        return "alipay.credit.creditrisk.dashboard.query";
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
