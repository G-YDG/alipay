<?php


namespace AlipaySdk\Api;


use AlipaySdk\Aop\Request\AlipayFundAccountQueryRequest;
use AlipaySdk\Aop\Request\AlipayFundTransCommonQueryRequest;
use AlipaySdk\Aop\Request\AlipayFundTransUniTransferRequest;
use Exception;
use SimpleXMLElement;

/**
 * 资金API [https://opendocs.alipay.com/apis/api_28/]
 * Class FundAlipayApi
 * @package Alipay\Api
 */
class FundAlipayApi extends BaseAlipayApi
{
    /**
     * 单笔转账
     *
     * @param string $outBizNo        唯一订单号
     * @param string $transAmount     订单总金额，单位为元，精确到小数点后两位，STD_RED_PACKET产品取值范围[0.01,100000000]；TRANS_ACCOUNT_NO_PWD产品取值范围[0.1,100000000]
     * @param null   $identity        参与方的唯一标识
     * @param null   $name            参与方真实姓名，如果非空，将校验收款支付宝账号姓名一致性。当identity_type=ALIPAY_LOGON_ID时，本字段必填。
     * @param string $identityType    参与方的标识类型，目前支持如下类型：1、ALIPAY_USER_ID 支付宝的会员ID2、ALIPAY_LOGON_ID：支付宝登录号，支持邮箱和手机号格式
     * @param null   $remark          业务备注
     * @param string $orderTitle      转账业务的标题，用于在支付宝用户的账单里显示
     * @param string $originalOrderId 原支付宝业务单号。C2C现金红包-红包领取时，传红包支付时返回的支付宝单号；B2C现金红包、单笔无密转账到支付宝不需要该参数。
     * @param string $businessParams  转账业务请求的扩展参数，支持传入的扩展参数如下：sub_biz_scene 子业务场景，红包业务必传，取值REDPACKET，C2C现金红包、B2C现金红包均需传入
     * @param string $productCode     业务产品码，单笔无密转账到支付宝账户固定为:TRANS_ACCOUNT_NO_PWD；收发现金红包固定为:STD_RED_PACKET；
     * @param string $bizScene        描述特定的业务场景，可传的参数如下：DIRECT_TRANSFER：单笔无密转账到支付宝，B2C现金红包;PERSONAL_COLLECTION：C2C现金红包-领红包
     * @param string $signData        签名信息
     *
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function transfer(
        $outBizNo,
        $transAmount,
        $identity = null,
        $name = null,
        $identityType = 'ALIPAY_LOGON_ID',
        $remark = null,
        $orderTitle = '',
        $originalOrderId = '',
        $businessParams = '',
        $productCode = 'TRANS_ACCOUNT_NO_PWD',
        $bizScene = 'DIRECT_TRANSFER',
        $signData = ''
    )
    {
        $request = new AlipayFundTransUniTransferRequest();

        $params = [
            'out_biz_no'        => $outBizNo,
            'trans_amount'      => $transAmount,
            'product_code'      => $productCode,
            'biz_scene'         => $bizScene,
            'order_title'       => $orderTitle,
            'original_order_id' => $originalOrderId,
            'payee_info'        => [
                'identity'      => $identity,
                'identity_type' => $identityType,
                'name'          => $name,
            ],
            'remark'            => $remark,
            'business_params'   => $businessParams,
            'sign_data'         => $signData,
        ];

        return $this->executeRequest($request, $params);
    }

    /**
     * 转账业务单据查询
     *
     * @param null $orderId        支付宝转账单据号
     * @param null $outBizNo       商户转账唯一订单号
     * @param null $payFundOrderId 支付宝支付资金流水号
     * @param null $bizScene       业务场景
     * @param null $productCode    销售产品码
     *
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function transferTradeQuery($orderId = null, $outBizNo = null, $payFundOrderId = null, $bizScene = null, $productCode = null)
    {
        $request = new AlipayFundTransCommonQueryRequest;

        $params = [];

        if ($orderId) {
            $params['order_id'] = $orderId;
        }

        if ($outBizNo) {
            $params['out_biz_no'] = $outBizNo;
        }

        if ($payFundOrderId) {
            $params['pay_fund_order_id'] = $payFundOrderId;
        }

        if ($bizScene) {
            $params['biz_scene'] = $bizScene;
        }

        if ($productCode) {
            $params['product_code'] = $productCode;
        }

        return $this->executeRequest($request, $params);
    }

    /**
     * 支付宝资金账户资产查询
     *
     * @param      $alipayUserId
     * @param null $accountType
     *
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function accountQuery($alipayUserId, $accountType = null)
    {
        $request = new AlipayFundAccountQueryRequest();

        $params['product_code'] = $alipayUserId;

        if ($accountType) {
            $params['product_code'] = $accountType;
        }

        return $this->executeRequest($request, $params);
    }
}