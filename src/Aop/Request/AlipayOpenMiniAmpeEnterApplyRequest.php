<?php

namespace AlipaySdk\Aop\Request;

/**
 * ALIPAY API: alipay.open.mini.ampe.enter.apply request
 *
 * @author auto create
 * @since  1.0, 2020-07-06 10:06:18
 */
class AlipayOpenMiniAmpeEnterApplyRequest
{
    /**
     * 详细地址
     **/
    private $address;

    /**
     * 联系人邮箱
     **/
    private $contactEmail;

    /**
     * 联系人姓名
     **/
    private $contactName;

    /**
     * 联系人手机号
     **/
    private $contactPhone;

    /**
     * 厂商名称，必填，最大长度为128
     **/
    private $enterpriseName;

    /**
     * 介绍资料，选填，最小为1k，最大不能超过10MB，文件格式支持zip，rar，jpg，png，doc，docx，pdf
     **/
    private $introductionFile;

    /**
     * 企业营业执照照片二进制流，必填，最小为1k，最大不能超过5MB，图片格式支持jpg，png
     **/
    private $licensePic;

    /**
     * 主营产品信息，选填
     **/
    private $majorProducts;

    /**
     * 企业官网，选填，最大长度为128
     **/
    private $officialWebsite;

    /**
     * 场景码，申请后平台分配，必填
     **/
    private $sceneCode;

    private $apiParas    = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion  = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["address"] = $address;
    }

    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    public function setContactEmail($contactEmail)
    {
        $this->contactEmail              = $contactEmail;
        $this->apiParas["contact_email"] = $contactEmail;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    public function setContactName($contactName)
    {
        $this->contactName              = $contactName;
        $this->apiParas["contact_name"] = $contactName;
    }

    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    public function setContactPhone($contactPhone)
    {
        $this->contactPhone              = $contactPhone;
        $this->apiParas["contact_phone"] = $contactPhone;
    }

    public function getEnterpriseName()
    {
        return $this->enterpriseName;
    }

    public function setEnterpriseName($enterpriseName)
    {
        $this->enterpriseName              = $enterpriseName;
        $this->apiParas["enterprise_name"] = $enterpriseName;
    }

    public function getIntroductionFile()
    {
        return $this->introductionFile;
    }

    public function setIntroductionFile($introductionFile)
    {
        $this->introductionFile              = $introductionFile;
        $this->apiParas["introduction_file"] = $introductionFile;
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

    public function getMajorProducts()
    {
        return $this->majorProducts;
    }

    public function setMajorProducts($majorProducts)
    {
        $this->majorProducts              = $majorProducts;
        $this->apiParas["major_products"] = $majorProducts;
    }

    public function getOfficialWebsite()
    {
        return $this->officialWebsite;
    }

    public function setOfficialWebsite($officialWebsite)
    {
        $this->officialWebsite              = $officialWebsite;
        $this->apiParas["official_website"] = $officialWebsite;
    }

    public function getSceneCode()
    {
        return $this->sceneCode;
    }

    public function setSceneCode($sceneCode)
    {
        $this->sceneCode              = $sceneCode;
        $this->apiParas["scene_code"] = $sceneCode;
    }

    public function getApiMethodName()
    {
        return "alipay.open.mini.ampe.enter.apply";
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
