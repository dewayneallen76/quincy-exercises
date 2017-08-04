<?php

class Log
{
  public $filename;
  // Add a new property to the class called $handle.
  public $handle;

  // Add a constructor to your Log class. Your constructor should:
  // Take in a parameter called $prefix. If nothing is passed to the constructor, the $prefix should default to 'log'.
  // Set the $filename property of the class to $prefix-YYYY-MM-DD.log.
  // Open the $filename for appending and assign the file pointer to the property $handle.
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

  // Add a destructor to close $handle when the class is destroyed.
  public function __destruct()
  {
    fclose($this->handle);
  }
}

 ?>
