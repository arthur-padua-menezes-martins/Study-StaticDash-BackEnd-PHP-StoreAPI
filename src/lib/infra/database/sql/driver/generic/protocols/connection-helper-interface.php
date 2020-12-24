<?php

namespace lib\infra\database\sql\driver\generic\protocols;

use PDO;

/** auxiliary to access the storage */
interface ConnectionHelperInterface {
  /** connect to storage */
  public function connect(): void;

  /** verify if connection is established */
  public function is_connected(): bool;

  /** get storage connection */
  public function get_connection(): PDO;

  /** disconnect to storage */
  public function disconnect(): void;
}

?>
