<?php

namespace AlipaySdk\Aop\Request;

/**
 * ALIPAY API: alipay.ins.data.dsb.image.upload request
 *
 * @author auto create
 * @since  1.0, 2019-01-07 20:51:15
 */
class AlipayInsDataDsbImageUploadRequest
{
    /**
     * 保险公司定损单号，唯一标识一个定损单的id
     **/
    private $estimateNo;

    /**
     * 车架号
     **/
    private $frameNo;

    /**
     * 图片二进制字节流，上传图片是文件提交方式的必须提供该字段。
     * 提供可下载的图片url或图片存储拉取方式的保司可不传该字段
     **/
    private $imageContent;

    /**
     * 图像格式类型，目前仅支持jpg格式
     **/
    private $imageFormat;

    /**
     * 图像文件名称
     **/
    private $imageName;

    /**
     * 图像文件在存储上的路径，与蚂蚁接口负责人确定上传方式是图片url拉取、通过oss拉取等方式可行后传入该字段。
     * 该字段与图片二进制流参数选传其一。
     **/
    private $imagePath;

    /**
     * 图片扩展属性信息json格式,如照片拍摄参数等
     **/
    private $imageProperties;

    /**
     * 图片来源描述，如weixin、app等
     **/
    private $imageSource;

    /**
     * 照片存储类型，枚举值如下
     * OSS-阿里云oss存储
     * SELF-自建类型
     **/
    private $imageStoreType;

    /**
     * 图片类型，比如：car_damage(车损图像)、certificate(证照图像)、material(资料图像)、other(其他图像)
     **/
    private $imageType;

    /**
     * 车牌号
     **/
    private $licenseNo;

    /**
     * 报案号,2017-10-12后接入的公司必传该字段
     **/
    private $reportNo;

    /**
     * 照片拍摄时间，精确到秒，格式yyyyMMddHHmmss
     **/
    private $shootTime;

    private $apiParas    = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion  = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getEstimateNo()
    {
        return $this->estimateNo;
    }

    public function setEstimateNo($estimateNo)
    {
        $this->estimateNo              = $estimateNo;
        $this->apiParas["estimate_no"] = $estimateNo;
    }

    public function getFrameNo()
    {
        return $this->frameNo;
    }

    public function setFrameNo($frameNo)
    {
        $this->frameNo              = $frameNo;
        $this->apiParas["frame_no"] = $frameNo;
    }

    public function getImageContent()
    {
        return $this->imageContent;
    }

    public function setImageContent($imageContent)
    {
        $this->imageContent              = $imageContent;
        $this->apiParas["image_content"] = $imageContent;
    }

    public function getImageFormat()
    {
        return $this->imageFormat;
    }

    public function setImageFormat($imageFormat)
    {
        $this->imageFormat              = $imageFormat;
        $this->apiParas["image_format"] = $imageFormat;
    }

    public function getImageName()
    {
        return $this->imageName;
    }

    public function setImageName($imageName)
    {
        $this->imageName              = $imageName;
        $this->apiParas["image_name"] = $imageName;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath)
    {
        $this->imagePath              = $imagePath;
        $this->apiParas["image_path"] = $imagePath;
    }

    public function getImageProperties()
    {
        return $this->imageProperties;
    }

    public function setImageProperties($imageProperties)
    {
        $this->imageProperties              = $imageProperties;
        $this->apiParas["image_properties"] = $imageProperties;
    }

    public function getImageSource()
    {
        return $this->imageSource;
    }

    public function setImageSource($imageSource)
    {
        $this->imageSource              = $imageSource;
        $this->apiParas["image_source"] = $imageSource;
    }

    public function getImageStoreType()
    {
        return $this->imageStoreType;
    }

    public function setImageStoreType($imageStoreType)
    {
        $this->imageStoreType               = $imageStoreType;
        $this->apiParas["image_store_type"] = $imageStoreType;
    }

    public function getImageType()
    {
        return $this->imageType;
    }

    public function setImageType($imageType)
    {
        $this->imageType              = $imageType;
        $this->apiParas["image_type"] = $imageType;
    }

    public function getLicenseNo()
    {
        return $this->licenseNo;
    }

    public function setLicenseNo($licenseNo)
    {
        $this->licenseNo              = $licenseNo;
        $this->apiParas["license_no"] = $licenseNo;
    }

    public function getReportNo()
    {
        return $this->reportNo;
    }

    public function setReportNo($reportNo)
    {
        $this->reportNo              = $reportNo;
        $this->apiParas["report_no"] = $reportNo;
    }

    public function getShootTime()
    {
        return $this->shootTime;
    }

    public function setShootTime($shootTime)
    {
        $this->shootTime              = $shootTime;
        $this->apiParas["shoot_time"] = $shootTime;
    }

    public function getApiMethodName()
    {
        return "alipay.ins.data.dsb.image.upload";
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
