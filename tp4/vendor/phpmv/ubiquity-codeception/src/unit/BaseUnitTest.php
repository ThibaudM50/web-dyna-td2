<?php
namespace Ubiquity\tests\unit;

use Ubiquity\cache\CacheManager;
use Ubiquity\controllers\Router;
use Ubiquity\orm\DAO;

abstract class BaseUnitTest extends \Codeception\Test\Unit {
	protected $config;
	protected $db_server;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function _before() {
		if (! defined ( 'ROOT' )) {
			define ( 'ROOT', __DIR__ );
		}
		if (! defined ( 'DS' )) {
			define ( 'DS', DIRECTORY_SEPARATOR );
		}
		$this->_loadConfig();
	}
		
	protected function _loadConfig() {
		$this->config = include ROOT . 'config/config.php';
		$this->config["database"]=$this->getDatabase()??$this->config["database"];
		$srv=$this->config['database']['serverName'];
		$ip = getenv ( 'SERVICE_MYSQL_IP' );
		if ($ip == false) {
			$ip = $srv;
		}
		$this->db_server=$ip;
		$this->config['database']['serverName']=$ip;
		$this->config['di']=$this->getDi()??[];
		$this->config['cache']['directory']=$this->getCacheDirectory()??$this->config['cache']['directory'];
	}
	
	abstract protected function getDi();
	abstract protected function getCacheDirectory();
	abstract protected function getDatabase();

	protected function _startCache() {
		CacheManager::$cache=null;
		CacheManager::startProd ( $this->config );
	}

	protected function _startRouter($what = false) {
		if ($what == 'rest') {
			Router::startRest ();
		} elseif ($what == 'all') {
			Router::startAll ();
		} else {
			Router::start ();
		}
	}

	protected function _startDatabase(DAO $dao, $dbOffset = 'default') {
		$db = DAO::getDbOffset ( $this->config, $dbOffset );
		if ($db ["dbName"] !== "") {
			$dao->connect ( $dbOffset, $db ["type"] ?? 'mysql', $db ["dbName"], $db ["serverName"] ?? '127.0.0.1', $db ["port"] ?? 3306, $db ["user"] ?? 'root', $db ["password"] ?? '', $db ["options"] ?? [ ], $db ["cache"] ?? false);
		}
	}

	protected function _initRequest($path, $method = 'GET') {
		$_GET ["c"] = $path;
		$_SERVER ['REQUEST_METHOD'] = $method;
	}
}

