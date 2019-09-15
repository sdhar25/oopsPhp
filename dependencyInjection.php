<?php

class Logger
{
	public function log($message)
	{
		echo "<br>Logging message - ". $message;
	}
}

class UserInfo
{
	private $logger;

	public function createUser()
	{
      $this->logger->log("user created");
	}
	public function updateUser()
	{
      $this->logger->log("user updated");
	}
	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}
}

$obj = new Logger;
$obj1 = new UserInfo($obj);
$obj1->createUser();
$obj1->updateUser();

?>