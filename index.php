<?php 

require_once "functions.php";
// require_once "router.php";
require_once "Database.php";

$config = require('config.php');

$db = new Database($config['database']);
$posts= $db->query('select * from `blog-post`')->fetchAll();

foreach($posts as $post){
  echo "<li>".$post['title']."</li>";
}