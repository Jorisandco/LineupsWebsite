<?php
include "Connect.php";

$statement = $pdo->prepare("INSERT INTO lineupdatabase (`id`, `namelineup`, `description`, `videopath`, `agentname`, `imagepath`) VALUES (:namelineup, :description, :videopath, :videopath, :agentname, :imagepath)");

if(strlen($_POST["videopath"]) > 0 && strlen($_POST["imagepath"]) > 0){

}
elseif(strlen($_POST['videopath']) > 0 ){
    $_POST['videopath'] = "No video available";
}
elseif(strlen($_POST['imagepath']) > 0){
    $_POST['imagepath'] = "No image available";
}
else{
    
}


// $statement->bindParam(':name', $_POST['name']);
// $statement->bindParam(':description', $_POST['description']);
// $statement->bindParam(':videopath', $_POST['videopath']);
// $statement->bindParam(':agentname', $_POST['agentname']);
// $statement->bindParam(':imagepath', $_POST['imagepath']);

