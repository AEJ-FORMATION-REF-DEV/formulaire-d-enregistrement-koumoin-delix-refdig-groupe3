<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <form action="form.php" method="POST">
                <h1>
                    formulaire d'enregistremnt
                </h1>
        
                                <label for="nom">nom</label>
                                <input type="text" id="nom" name="user_nom" autocomplete="off">
        
                
                            <label for="prenoms"> prenoms</label>
                            <input type="text" id="prenoms" name="user_prenoms" autocomplete="off">
                                <label for="numero_AEJ">numero_AEJ</label>
                                <input type="text" id="numero_AEJ" name="user_numero_AEJ" autocomplete="off">
                            <label for="telephone">téléphone</label>
                            <input type="text" id="telephone" name="user_telephone" autocomplete="off">
                            <label for="email">e-mail</label>
                            <input type="text" id="email" name="user_email" autocomplete="off">
                        
                            <label for="fonction">fonction</label>
                            <select name="user_fonction" id="user_fonction"> 
                                <option value="data ia">data ia</option>
                                <option value="develepeur web">develepeur web</option>
                                <option value="referent digital">referent digital</option>
                            </select>
                         
                         
                           <div> <button type="submit" name="valider"> envoyez</button></div>
 
                           
                          <!-- <div class="inscrit"> <a href="t ableau.php"> inscrit</a></div>  -->
                          <input type="button" class="bton" value="INSCRIT" onclick="window.location.href='tableau.php';" />     

        </form>
        <!-- <button type="submit" name="inscrit"><a href="t ableau.php"> inscrit</a> </button> -->

    
</body>
</html>