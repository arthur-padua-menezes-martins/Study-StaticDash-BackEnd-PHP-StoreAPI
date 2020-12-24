<?php

namespace app\main\adapter\route\content\body;

use lib\presentation\generic\protocols\http\request\body\HttpRequestBodyInterface;

/** route body adaptation to application concept */
trait RouteBodyAdapter {
  /**
  * adapt request body to application body 
  * @param array $requestBody request body
  * @return HttpRequestBodyInterface application body
  */
  static public function adapt_body(array $requestBody): HttpRequestBodyInterface {
    $body = new HttpRequestBodyInterface();
    
    foreach ($requestBody as $key => $value) {
      $body->$key = $value;
    }

    return $body;
  }
}

?>
