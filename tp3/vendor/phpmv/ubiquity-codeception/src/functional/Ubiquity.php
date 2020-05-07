<?php

namespace Codeception\Module;

use Codeception\Lib\Framework;
use Codeception\Lib\Connector\UbiquityConnector;
use Ubiquity\controllers\Startup;
use Codeception\TestInterface;

class Ubiquity extends Framework {
	protected $config = [ "root" => '/' ];

	/**
	 *
	 * {@inheritdoc}
	 * @see \Codeception\Module::_initialize()
	 */
	public function _initialize() {
		$index = \Codeception\Configuration::projectDir () . $this->config ['root'] . '/index.php';
		$this->client = new UbiquityConnector ();
		$this->client->setIndex ( $index );
	}

	/**
	 * HOOK: after scenario
	 *
	 * @param TestInterface $test
	 */
	public function _after(TestInterface $test)
	{
		Startup::setConfig([]);
		$_SESSION = $_FILES = $_GET = $_POST = $_COOKIE = $_REQUEST = [];
	}
	
}

