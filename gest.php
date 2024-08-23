<?php

$serveur ="localhost";
$username="root";
$password="";
$database="managementstudent";

$conn = mysqli_connect($serveur,$username,$password,$database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['Ajouter'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $adresse =$_POST['adresse'];
    $telephone =$_POST['tele'];

    $requtteInsert="INSERT INTO `student`( `nom`, `prenom`, `ville`, `adresse`, `tele`) VALUES ('$nom','$prenom','$ville','$adresse','$telephone')";

    if(mysqli_query($conn,$requtteInsert)){
            echo "Data Student Aded Succufully!";
    }else{
        echo"Data Not adedd";
    }

}


if(isset($_POST['sumpprimer'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    $requtteDelete = "DELETE FROM `student` WHERE nom ='$nom' AND prenom='$prenom'";

    if(mysqli_query($conn,$requtteDelete)){
            echo "Student Delete Succufully" ;
    }else{
        echo "Student Delete failde";
    }

}

header('location:index.php');
exit();

?>