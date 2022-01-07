<h1>Je suis la mort </h1>

<?php
  

    // 

    // }
//    $sql =  "INSERT INTO `experiences` 
//     (`idexperience`, `long_text_experience`, `title_experience`, `date`) 
//     VALUES (NULL, 'Aucun texte PHP', 'Aucun Titre PHP', '2022-01-07 14:30:52.000000')";

//     $database->exec($sql);
   
    if(isset($_POST) && !empty($_POST)){
        debug ($_POST);
        echo 'condition valide';
        $sql =  "INSERT INTO `experiences` 
            (`idexperience`, `long_text_experience`, `title_experience`, `date`) 
           VALUES (NULL, '" . $_POST['description'] . "', '" . $_POST['titre'] . "', '" . $_POST['date'] . "')";
        
             $database->exec($sql);
    } else {
        echo '<form id="formulaire" class="form spacer-container" action="#" method="POST">
        <div>
            <label for="date">Date :</label></br>
            <input type="date" name="date" id="date" class="form-control"></br>
            <label for="titre">Titre :</label></br>
            <input type="text" name="titre" id="titre" class="form-control"></br>
            <label for="description">Description :</label></br>
            <textarea name="description" id="description" class="form-control"></textarea>
            <input class="form-control" type="submit" value="Envoyer"/>
        </div>
    </form>';
   
    }
    debug (getAll($database,'experiences'));
    
    ;
    //$_POST  Méthode comme $_GET