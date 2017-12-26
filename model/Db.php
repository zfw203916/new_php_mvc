<?php
/**
*	数据库的基本操作
*
*	实现两类功能 ： 
*	1、创建当前类的单一实例,即单例模式。 
*	2、创建数据库的基本操作
*/

class Db
{
	//数据库的默认链接参数
	private $dbConfig = [	
		'host'=>'localhost',
		'port'=>'3306',
		'user'=>'root',
		'pass'=>'root',
		'charset'=>'utf-8',
		'dbName'=>'edu' //数据库是edu
	];
	
	//新增主键id
	public $insertId = null;
	
	//受影响的记录数量
	public $num = 0;
	
	//单例模式，本类的实例
	private static $instance = null;
	
	//数据库的连接
	private $conn = null;
	
	/**
	*	Db构造方法，
	*	私有化以防止外部实例化。
	**/
	private function __construct($params)
	{
		//初始化参数
		$this->dbConfig = array_merge($this->dbConfig, $params);
		
		
		//连接数据库
		$this->connect();
	}
	

	/**
	*	克隆的魔术方法私有化，禁止从外部克隆来生成本类的实例
	**/
	private function __clone()
	{
		
	}
	
	/**
	*	@return Db|null
	*	获取当前类的单一实例,单例模式，本类的实例
	**/
	public static function getInstance($params = [])
	{
		if(!self::$instance instanceof self){
			self::$instance = new self($params);
		}		
		return self::$instance;
	}
	
	
	/**
	*	连接数据库
	*/
	private function connect()
	{
		try{

			//配置数据源DSN mysql:host=localhost;dbname=test
			//$dsn = {$this->dbConfig['host']},{$this->dbConfig['port']},{$this->dbConfig['user']},{$this->dbConfig['pass']},{$this->dbConfig['charset']}, {$this->dbConfig['dbName']}}";
			$dsn = 'mysql:host='.$this->dbConfig['host'].';dbname='.$this->dbConfig['dbName']; //string(31) "mysql:host=localhost;dbname=edu"
			
			//创建PDO对象
			//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
			$this->conn = new PDO($dsn, $this->dbConfig['user'], $this->dbConfig['pass']);
			
			//设置客户端的默认字符集
			$test = $this->conn->query("SET NAMES {$this->dbConfig['charset']}");
			
		}catch(PDOException $e){
			
			die('数据库连接失败:'.$e->getMessage());
			
		}
	}
	
	
	/**
	*	PDO读和写是分开的，是不一样的。
	*	@完成数据表的写操作: 新增，更新，删除
	*	@返回受影响的记录，如果新增还返回新增主键id
	**/
	public function exec($sql)
	{
		$num = $this->conn->exec($sql);
		
		if($num > 0){
			
			//如果是新增操作，初始化新增主键id属性
			if(null != $this->conn->lastInsertId()){
				
				$this->insertId = $this->conn->lastInsertId();

			}
			
			$this->num = $num; //返回受影响的记录数量
			
		}else{
			
			$error = $this->conn->errorInfo();//获取最后操作的错误信息的数组。,已经修改过的数值，再改为0是会有提示出错的。
			print '操作失败'.$error[0].':'.$error[1].':'.$error[2];
			
		}
	}
	
	/**
	*	查询操作，获取单条
	**/	
	public function fetch($sql)
	{
		$this->conn->query($sql)->fetch(PDO::FETCH_ASSOC);//$this->conn->query($sql)->fetch(PDO::FETCH_ASSOC);  PDO::FETCH_ASSOC 作用是什么？
	}
	
	/**
	*	查询操作，获取多条
	**/
	public function fetchAll($sql)
	{
		$this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	}
	
}
