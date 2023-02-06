<?php

    include 'config.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];


    $msg = $_POST['msg'];
    switch($msg){
        
        case 'Editar':

            $edit = "UPDATE pratic SET nome='$nome',email='$email',tel='$tel' WHERE  id = '$id'";
            $execute = mysqli_query($conn,$edit);
            break;
            
        case 'Excluir':
            $del = "DELETE FROM pratic WHERE id='$id'";
            $execute = mysqli_query($conn,$del);
            break;
        case 'cadastrar':
            $cad = "INSERT INTO pratic (nome,email,tel) VALUES ('$nome','$email','$tel')";
            $execute = mysqli_query($conn,$cad);
            break;



        }




    header('location:form.php');

            

    




?>