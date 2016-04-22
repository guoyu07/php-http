<?php
/**
 * 抽象HTTP请求类
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2014-03-23
 */

namespace Http\Request;

abstract class RequestAbstract {

    /**
     * 获取CURL Handler
     */
    abstract public function getHandler();


    /**
     * 获取response信息
     * @return mixed
     */
    abstract public function getResponse();


    /**
     * 获取request信息
     * @return mixed
     */
    abstract public function getRequest();


    /**
     * 发送HTTP请求
     * @param  array   $post  POST数据，null表示无post即GET请求
     * @param  string  $url   请求的URL地址，可以通过包装类指定一个URL
     */
    abstract public function sendRequest($url = null, $post = null);

    /**
     * 解析HTTP请求返回的response数据
     */
    abstract public function parseResponse();
}