<?php

namespace AlipaySdk\Aop\Request;

/**
 * ALIPAY API: alipay.system.oauth.token request
 *
 * @author auto create
 * @since  1.0, 2021-03-15 11:12:02
 */
class AlipaySystemOauthTokenRequest
{
    /**
     * 授权码，用户对应用授权后得到。本参数在 grant_type 为 authorization_code 时必填；为 refresh_token 时不填。
     **/
    private $code;

    /**
     * 授权方式。支持：
     * 1.authorization_code，表示换取使用用户授权码code换取授权令牌access_token。
     * 2.refresh_token，表示使用refresh_token刷新获取新授权令牌。
     **/
    private $grantType;

    /**
     * 刷新令牌，上次换取访问令牌时得到。本参数在 grant_type 为 authorization_code 时不填；为 refresh_token 时必填，且该值来源于此接口的返回值 app_refresh_token（即至少需要通过 grant_type=authorization_code 调用此接口一次才能获取）。
     **/
    private $refreshToken;

    private $apiParas    = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion  = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"] = $code;
    }

    public function getGrantType()
    {
        return $this->grantType;
    }

    public function setGrantType($grantType)
    {
        $this->grantType              = $grantType;
        $this->apiParas["grant_type"] = $grantType;
    }

    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken              = $refreshToken;
        $this->apiParas["refresh_token"] = $refreshToken;
    }

    public function getApiMethodName()
    {
        return "alipay.system.oauth.token";
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
