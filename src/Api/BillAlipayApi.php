<?php


namespace AlipaySdk\Api;


use AlipaySdk\Aop\Request\AlipayDataDataserviceBillDownloadurlQueryRequest;
use Exception;
use SimpleXMLElement;

/**
 * 财务API [https://opendocs.alipay.com/apis/api_15/]
 * Class FundAlipayApi
 * @package Alipay\Api
 */
class BillAlipayApi extends BaseAlipayApi
{
    /**
     * @param $billType 账单类型，商户通过接口或商户经开放平台授权后其所属服务商通过接口可以获取以下账单类型，支持：trade：商户基于支付宝交易收单的业务账单；signcustomer：基于商户支付宝余额收入及支出等资金变动的帐务账单。
     * @param $billDate 账单时间：日账单格式为yyyy-MM-dd，最早可下载2016年1月1日开始的日账单；月账单格式为yyyy-MM，最早可下载2016年1月开始的月账单
     *
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function downloadUrl($billType, $billDate)
    {
        $request = new AlipayDataDataserviceBillDownloadurlQueryRequest();

        $params = [
            'bill_type' => $billType,
            'bill_date' => $billDate,
        ];

        return $this->executeRequest($request, $params);
    }
}