<?php

class Singleton 
{
	private static Singleton $instance;

	private function __construct()
	{

	}

	public function getInstance(): Singleton
	{
		if (!isset(self::$instance)) {
			self::$instance = new Singleton;
		}

		return self::$instance;
	}
}

$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

if ($instance1 == $instance2) {
	echo "Singleton works, both variables contain the same instance.";
}else {
	echo "Singleton failed, variables contain different instances.";
}

