<?php

include "./db.php";
$con = conexaoBaseDeDados();

if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
}else return;

if(isset($_POST["email"])){
    $email = $_POST["email"];
}else return;

if(isset($_POST["telefone"])){
    $telefone = $_POST["telefone"];
}else return;

$query = "INSERT INTO usuarios(nome,email,telefone) VALUES 
('$nome','$email','$telefone')";

$exe = mysqli_query($con,$query);
$arr = [];

if($exe){
    $arr["success"] = "true";
}else{
    $arr["success"] = "false";
}
print(json_encode($arr));