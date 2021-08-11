<?php


namespace AlipaySdk\Api;


use AlipaySdk\Aop\Request\AlipayTradePrecreateRequest;
use AlipaySdk\Aop\Request\AlipayTradeQueryRequest;
use Exception;
use SimpleXMLElement;

/**
 * 支付API [https://opendocs.alipay.com/apis/api_1/]
 * Class TradeAlipayApi
 * @package Alipay\Api
 */
class TradeAlipayApi extends BaseAlipayApi
{
    /**
     * 统一收单线下交易查询
     *
     * @param null $tradeNo      订单支付时传入的商户订单号,和支付宝交易号不能同时为空。trade_no,out_trade_no如果同时存在优先取trade_no
     * @param null $outTradeNo   支付宝交易号，和商户订单号不能同时为空
     * @param null $orgPid       银行间联模式下有用，其它场景请不要使用；双联通过该参数指定需要查询的交易所属收单机构的pid;
     * @param null $queryOptions 查询选项，商户传入该参数可定制本接口同步响应额外返回的信息字段，数组格式。支持枚举如下：trade_settle_info：返回的交易结算信息，包含分账、补差等信息。fund_bill_list：交易支付使用的资金渠道。
     *
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function query($tradeNo = null, $outTradeNo = null, $orgPid = null, $queryOptions = null)
    {
        $request = new AlipayTradeQueryRequest;

        if (!$tradeNo && !$outTradeNo) {
            throw new Exception('缺失必要参数');
        }

        if ($tradeNo) {
            $params['trade_no'] = $tradeNo;
        }

        if ($outTradeNo) {
            $params['out_trade_no'] = $outTradeNo;
        }

        if ($orgPid) {
            $params['org_pid'] = $orgPid;
        }

        if ($queryOptions) {
            $params['query_options'] = $queryOptions;
        }

        return $this->setDefaultErrMsg('无此交易')->executeRequest($request, $params ?? []);
    }

    /**
     * 统一收单线下交易预创建（生成支付二维码）
     *
     * @param string $outTradeNo  商户订单号。由商家自定义，64个字符以内，仅支持字母、数字、下划线且需保证在商户端不重复。
     * @param float  $totalAmount 订单总金额。单位为元，精确到小数点后两位，取值范围：[0.01,100000000] 。
     * @param string $subject     订单标题。注意：不可使用特殊字符，如 /，=，& 等。
     * @param array  $params      自定义参数
     *
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function preCreate($outTradeNo, $totalAmount, $subject, $params = [])
    {
        $request = new AlipayTradePrecreateRequest;

        $params = array_merge($params, [
            'out_trade_no' => $outTradeNo,
            'total_amount' => $totalAmount,
            'subject'      => $subject,
        ]);

        return $this->setDefaultErrMsg('生成失败')->executeRequest($request, $params ?? []);
    }
}