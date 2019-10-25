<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

 
// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate product object
$user = new User($db);
 
$result = $user->read();
$num = $result->rowCount();

if($num>0){
    $users_array = array();
    $users_array['data']=array();
    while($row=$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $user_item= array(
            'id'=>$id,
            'username'=>$username,
            'date'=>$date,
            'message'=>$message
        );
        array_push($users_array['data'], $user_item);
    }
    echo json_encode($users_array);
}

else {
    echo json_encode(array(
        "message"=>"no user found"
    ));
}
?>