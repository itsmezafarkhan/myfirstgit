 <?php

class Model
{
	protected $_db;
	protected $_sql;
	
	public function __construct()
	{
		$this->_db = Db::init();
	}
	
	protected function _setSql($sql)
	{
		$this->_sql = $sql;
	}
	
	public function getAll($data = null)
	{
		if (!$this->_sql)
		{
			throw new Exception("No SQL query!");
		}
		
		$sth = $this->_db->prepare($this->_sql);
		$sth->execute($data);
		return $sth->fetchAll();
	}
	
	public function getRow($data = null)
	{
		if (!$this->_sql)
		{
			throw new Exception("No SQL query!");
		}
		
		$sth = $this->_db->prepare($this->_sql);
		$sth->execute($data);
		return $sth->fetch();
	}
	
	public function getCount($data = null)
	{
		if (!$this->_sql)
		{
			throw new Exception("No SQL query!");
		}
		
		$sth = $this->_db->prepare($this->_sql);
		$sth->execute($data);
		return $sth->rowCount();
	}

	public function insert($data)
	{
		if(empty($data))
		{
			throw new Exception("Error No Data for SQL.", 1);			
		}

		$sth = $this->_db->prepare($this->_sql);
		$sth->execute($data);

		return $this->_db->lastInsertId();
	}
}