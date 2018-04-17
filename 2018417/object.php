<?php
/**
 * Created by PhpStorm.
 * User: baiyaoqiang
 * Date: 2018/4/17
 * Time: 13:50
 */
if(!function_exists(curl_get_xml())){
    function curl_get_xml($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_URL, $url);
        //设置超时时间为3s
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        $result = curl_exec($ch);
        curl_close($ch);
        $xml = simplexml_load_string($result);
        $result = json_decode(json_encode($xml),TRUE);
        return $result;
    }
}