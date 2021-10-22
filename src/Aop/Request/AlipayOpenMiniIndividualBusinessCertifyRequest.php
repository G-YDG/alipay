<?php

namespace AlipaySdk\Aop\Request;

/**
 * ALIPAY API: alipay.open.mini.individual.business.certify request
 *
 * @author auto create
 * @since  1.0, 2020-11-23 11:10:13
 */
class AlipayOpenMiniIndividualBusinessCertifyRequest
{
    /**
     * 营业执照注册号即营业执照的编号。
     **/
    private $licenseNo;

    /**
     * 营业执照图片的Base64编码字符串，图片大小不能超过2M
     **/
    private $licensePic;

    private $apiParas    = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion  = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getLicenseNo()
    {
        return $this->licenseNo;
    }

    public function setLicenseNo($licenseNo)
    {
        $this->licenseNo              = $licenseNo;
        $this->apiParas["license_no"] = $licenseNo;
    }

    public function getLicensePic()
    {
        return $this->licensePic;
    }

    public function setLicensePic($licensePic)
    {
        $this->licensePic              = $licensePic;
        $this->apiParas["license_pic"] = $licensePic;
    }

    public function getApiMethodName()
    {
        return "alipay.open.mini.individual.business.certify";
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
