<?php 

include "config.php";

if(isset($_POST['search'])){
    $search = $_POST['search'];
    $query = "SELECT * FROM users WHERE name like'%".$search."%'";
    $result = odbc_exec($connect,$query);
    
    while($row = odbc_fetch_array($result) ){
        $response[] = array("value"=>$row['id'],"label"=>$row['name']);
    }

    echo json_encode($response);
}

exit;


