<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

    table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    }
    th, td {
    text-align: left;
    padding: 8px;
    border:2px solid #fff;
    min-width: 150px;
    }
    th{
    background-color: #4e73df;
    color: #fff;
    font-size: 20px;
    }
    tr:nth-child(even){
      background-color: #f2f2f2;
    }
    button {
    height: 35px;
    border-radius: 20px;
    background: #0695b9;
    width: 5rem;
    }
    button:hover{
    background-color:#06b7fd;
    }
    a{
    text-decoration: none;
    color: #fff;
    }
    </style>

    <button><a href="index.php">Formulaire</a></button>

    <?php

$servname = 'localhost';
$dbname = 'andrea';
$user = 'root';
$pass = '';

try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
}

catch(PDOException $e){
  echo "<p> Erreur : probleme d'access a la base de données </p>" . $e->getMessage();
}

$reponse =  $dbco->query('SELECT * FROM etudiant');


echo "<table border='1'>
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Numero AEJ</th>
<th>Telephone</th>
<th>E-mail</th>
<th>Fonction</th>
<th>date</th>


</tr>";



while ($row  = $reponse->fetch())

{

    echo "<tr>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['prenoms'] . "</td>";
    echo "<td>" . $row['numero_aej'] . "</td>";
    echo "<td>" . $row['telephone'] . "</td>";
    echo "<td>" . $row['imail'] . "</td>";
    echo "<td>" . $row['fonction'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    
    echo "</tr>";
}

echo "</table>";


$reponse->closeCursor();

?>

        
        <!-- // $server_name = "localhost";
        // $db_username = "root";
        // $db_password = "";
        // $db_name = "andrea";
            
        // $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

        // $query = "SELECT * FROM etudiant";
        // $query_run = mysqli_query($connection, $query); -->


    <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>nom</th>
                <th> Prenoms </th>
                <th>Numero_AEJ</th>
                <th>Telephone</th>
                <th>email</th>
                <th>fonction</th>
                <th>Date d'enregistrement</th>
            </tr>
        </thead>

        <tbody>
            <?php
            //     if(mysqli_num_rows($query_run) > 0)        
            //     {
            //         while($row = mysqli_fetch_assoc($query_run))
            //             {
            // ?>
            //             <tr>
            //                 <td><  echo $row['nom']; ?></td>
            //                 <td><  echo $row['prenoms']; ?></td>
            //                 <td><  echo $row['numero aej']; ?></td>
            //                 <td><  echo $row['telephone']; ?></td>
            //                 <td><  echo $row['email']; ?></td>
            //                 <td><  echo $row['fonction']; ?></td>
            //                 <td><  echo $row['date']; ?></td>
                          
            //             </tr>
            // <?php
            //             } 
            //     }
            //     else {
            //         echo "Aucun enregistrement trouvé";
            //         }
                        ?>
        </tbody>
    </table> -->
                
</body>
</html>