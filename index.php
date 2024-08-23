<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Managment Student</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<div class="Conatiner">
    <aside>
            <img src="imgs/m2H7G6H7H7Z5G6m2-removebg-preview.png" alt="Logo Admin">
         <form action="gest.php" method="POST">

                <label for="nom">Nom     :</label><br>
                <input type="text" name="nom" id="nom" required>
             <br><br>
                <label for="prenom">Prenom    :</label><br>
                <input type="text" name="prenom" id="prenom" required>
             <br><br>
                 <label for="ville">Ville     :</label><br>
                 <input type="text" name="ville" id="ville">
             <br><br>
                 <label for="adresse">Adresse     :</label><br>
                 <input type="text" name="adresse" id="adresse" >
             <br><br>
                 <label for="tele">Telephone     :</label><br>
                 <input type="tel" name="tele" id="tele" >
             <br><br>
            <input type="submit" name="Ajouter" value="Ajouter" id="button">
            <input type="submit" name="sumpprimer" value="Suprimer" id="button">
         </form>
    </aside>

    <main>
        <table>
        <?php
            
            $serveur ="localhost";
            $username="root";
            $password="";
            $database="managementstudent";

            $conn = mysqli_connect($serveur,$username,$password,$database);

            $requtte= "SELECT * FROM `student`";

            $result = mysqli_query($conn,$requtte);
            
            
            ?>
            <tr>
                <th>Id Student </th>
                <th>Nom Student</th>
                <th> Prenom Student</th>
                <th> Ville </th>
                <th> Adresse </th>
                <th> Telephone </th>
            </tr>

            <?php

                while($row = mysqli_fetch_row($result)){
                        echo"<tr>";
                            echo"<td>".$row[0]."</td>"; 
                            echo"<td>".$row[1]."</td>"; 
                            echo"<td>".$row[2]."</td>"; 
                            echo"<td>".$row[3]."</td>"; 
                            echo"<td>".$row[4]."</td>"; 
                            echo"<td>".$row[5]."</td>"; 
                        echo"</tr>";
                }
            
            
            ?>
        </table>
    </main>


</div>


</body>
</html>