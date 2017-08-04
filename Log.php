<?php

class Log
{
  public $filename;
  public $handle;

  public function __construct($prefix = 'log')
  {
    $this->filename = $prefix . "-" . date('Y-m-d') .'.log';
    $this->handle = fopen($this->filename, 'a');
  }


  public function logMessage($level, $message)
  {
    $stringToWrite = date("Y-m-d H:i:s") . " [" . $level . "]" .$message . PHP_EOL;
    fwrite($this->handle, $stringToWrite);
  }

  public function info($message)
  {
    $this->logMessage("INFO", $message);
  }

  public function error($message)
  {
    $this->logMessage("ERROR", $message);
  }

  public function __destruct()
  {
    fclose($this->handle);
  }
}

 ?>
