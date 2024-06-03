<?php

//connect to our MySQL database and execute a query
class Database{
  public $connection; 

  public function __construct($config,$user='root',$pass='password'){
    $dsn = 'mysql:' . http_build_query($config,'',';');

    $this->connection = new PDO($dsn,$user,$pass,[
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query){
    $stmt= $this->connection->prepare($query);
    
    $stmt->execute();
    
    return $stmt;
  }
}