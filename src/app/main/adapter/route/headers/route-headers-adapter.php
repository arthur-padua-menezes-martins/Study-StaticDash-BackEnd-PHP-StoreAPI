<?php

namespace app\main\adapter\route\headers;

use lib\presentation\generic\protocols\http\request\headers\HttpRequestHeadersInterface;
use lib\data\usecases\headers\HeadersController;

/** route headers adaptation to application concept */
trait RouteHeadersAdapter {
  /**
  * adapt request headers to application headers 
  * @param array $requestHeaders request headers
  * @return HttpRequestHeadersInterface application headers
  */
  static public function getHeaders(array $requestHeaders): HttpRequestHeadersInterface {
    $headers = new HttpRequestHeadersInterface();
    $headers->instance = HeadersController::start();
    $headers->accept = $requestHeaders['Accept'];
    $headers->content_type = $requestHeaders['Content-Type'];
    $headers->host = $requestHeaders['Host'];
    $headers->origin = $requestHeaders['Origin'];
    $headers->referer = $requestHeaders['Referer'];
    $headers->user_agent = $requestHeaders['User-Agent'];
  
    return $headers;
  }
}

?>
