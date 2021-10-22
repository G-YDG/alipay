<?php

namespace AlipaySdk\Aop\Request;

/**
 * ALIPAY API: alipay.ebpp.merchant.externalbill.upload request
 *
 * @author auto create
 * @since  1.0, 2021-04-12 17:03:15
 */
class AlipayEbppMerchantExternalbillUploadRequest
{
    /**
     * 小区短名
     **/
    private $communityShortName;

    /**
     * csv文件二进制
     **/
    private $content;

    private $apiParas    = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion  = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getCommunityShortName()
    {
        return $this->communityShortName;
    }

    public function setCommunityShortName($communityShortName)
    {
        $this->communityShortName               = $communityShortName;
        $this->apiParas["community_short_name"] = $communityShortName;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content             = $content;
        $this->apiParas["content"] = $content;
    }

    public function getApiMethodName()
    {
        return "alipay.ebpp.merchant.externalbill.upload";
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
