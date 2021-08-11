<?php
/**
 *   加密工具类
 */

namespace AlipaySdk\Aop;


/**
 * 加密方法
 *
 * @param string $str
 * @param string $secretKey
 *
 * @return string
 */
function encrypt($str, $secretKey)
{
    //AES, 128 模式加密数据 CBC
    $secretKey = base64_decode($secretKey);
    $str       = trim($str);
    $str       = addPKCS7Padding($str);

    //设置全0的IV
    $iv         = str_repeat("\0", 16);
    $encryptStr = openssl_encrypt($str, 'aes-128-cbc', $secretKey, OPENSSL_NO_PADDING, $iv);

    return base64_encode($encryptStr);
}

/**
 * 解密方法
 *
 * @param string $str
 * @param string $secretKey
 *
 * @return string
 */
function decrypt($str, $secretKey)
{
    //AES, 128 模式加密数据 CBC
    $str       = base64_decode($str);
    $secretKey = base64_decode($secretKey);

    //设置全0的IV
    $iv         = str_repeat("\0", 16);
    $decryptStr = openssl_decrypt($str, 'aes-128-cbc', $secretKey, OPENSSL_NO_PADDING, $iv);
    $decryptStr = stripPKSC7Padding($decryptStr);

    return $decryptStr;
}

/**
 * 填充算法
 *
 * @param string $source
 *
 * @return string
 */
function addPKCS7Padding($source)
{
    $source = trim($source);
    $block  = 16;

    $pad = $block - (strlen($source) % $block);
    if ($pad <= $block) {
        $char   = chr($pad);
        $source .= str_repeat($char, $pad);
    }
    return $source;
}

/**
 * 移去填充算法
 *
 * @param string $source
 *
 * @return string
 */
function stripPKSC7Padding($source)
{
    $char = substr($source, -1);
    $num  = ord($char);
    if ($num == 62) return $source;
    $source = substr($source, 0, -$num);
    return $source;
}