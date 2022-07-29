<?php
    print_r($_POST);
    if(empty($_POST["oculto"])|| empty($_POST["txtArea"]) || empty($_POST["txtTema"]) || empty($_POST["txtDes"]) || empty($_POST["txtFun"]) || empty($_POST["txtPer"]) || empty($_POST["txtCom"]) || empty($_POST["txtMarca"]) || ($_POST["txtRes"])){
        header('Location: home.php');
    }

    require 'db_conn.php';
    $Area=$_POST["txtArea"];
    $Tema=$_POST["txtTema"];
    $Descripcion=$_POST["txtDes"];
    $Funcionario=$_POST["txtFun"];
    $Personal=$_POST["txtPer"];
    $Compromiso=$_POST["txtCom"]; 
    $MarcaCron=$_POST["txtMarca"];
    $Respon=$_POST["txtRes"];

    $insertar = "INSERT INTO acta(AreasEncargada, Tema, Descripcion, Funcionario, Personal, Compromisos, MarcaCronologica, Responsabilidades) VALUES ('$Area', '$tema', '$Descripcion', '$Funcionario', '$Personal', '$Compromiso', '$MarcaCron', '$Respon')";


    $squery = mysqli_query($conn, $insertar);

    if($squery){
        header("Location: home.php");
    }else{
        echo "Error";
    }
    ?> 
?>