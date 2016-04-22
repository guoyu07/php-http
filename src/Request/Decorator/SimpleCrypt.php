<?php
/**
 * HTTP请求装饰类 简单加密请求
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2014-10-10
 */

namespace Http\Request\Decorator;

use Http\Request\Decorator;

class SimpleCrypt extends Decorator {

    public function sendRequest($url = null, $post = null) {
        // 设置请求信息
        curl_setopt($this->getHandler(), CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($this->getHandler(), CURLOPT_TIMEOUT, 3);

        $crypt_key    = '2S23ED';
        $post['sign'] = md5(json_encode($post) . $crypt_key);

        parent::sendRequest($url, $post);
    }

    public function parseResponse() {
        $response = parent::parseResponse();
        $response = json_decode($response, true);
        return $response;
    }
}