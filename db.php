<?php

function conexaoBaseDeDados(){
    $con = mysqli_connect("localhost","root","","flutterteste");
    return $con;
}
