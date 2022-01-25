<?php 

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once "../core/base.php" ; 
require_once "../core/functions.php" ;

$sql = "SELECT * FROM categories WHERE 1" ;

if(isset($_GET['id'])){
    $id = textFilter($_GET['id']) ;
    $sql .= " AND id=$id" ;    
};

if(isset($_GET['limit'])){
    $limit = textFilter($_GET['limit']) ;
    $sql .= " LIMIT $limit" ;    
};


if(isset($_GET['offset'])){
    $offset = textFilter($_GET['offset']) ;
    $sql .= " OFFSET $offset" ;    
};


$rows = [] ;

$query = mysqli_query(con(), $sql) ;
while($row = mysqli_fetch_assoc($query)){
    $arr = [
        "id" => $row['id'] ,
        "category name" => $row['title'] ,
        "created user" => user($row['user_id'])['name'] ,
        "created" => $row['created_at']
    ];

    array_push($rows, $arr) ;
}
apiOutPut($rows) ;
