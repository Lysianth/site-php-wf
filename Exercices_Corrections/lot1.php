<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Mon site en local</title>
  <meta name="description" content="Mon site en local">
  <meta name="author" content="Alexandre Delaistre">

  <meta property="og:title" content="Mon super site en local">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://urldemonsite.com">
  <meta property="og:description" content="Ce site est mon premier, soyez indulgent !">
  <!--meta property="og:image" content="image.png"-->

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php 
    
//Ecrire la methode Adéquat
    function ajouterDix($nombre)
    {
        $nombre += 10;
        return $nombre;
    }
    $nombre_2 = ajouterDix(10); // 20
    $nombre_3 = ajouterDix($nombre_2); // 30
    $nombre_4 = ajouterDix($nombre_3); // 40
    $nombre_5 = ajouterDix($nombre_4); // 50
    //echo ajouterDix(20); // 30
    //echo $nombre_5; // 50

//Ecrire la methode Adéquat

    function somme($a,$b)
    {
        return $a + $b;
    }
    $a = 4;
    $b = 5;
    //$sommeDesDeuxNombre = somme($a,$b);
    //echo $sommeDesDeuxNombre; // 9


    //Ecrire la methode Adequat
    $variableToDump; 
    function debug($variable)
    {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
    }

    //debug($variableToDump);

    //affiche <pre>[resultat du var_dump]</pre> dans le DOM
    $liste_eleves = [
        'Alexandre',
        'Noe', 
        'David',
        'Lila',
        'Rudy',
        'Mike',
        'Celine',
        'Celine',
        'Laetitia',
        'Samia',
        'Mahjoub',
    ];

    $liste_eleves_index = [
        'Alexandre' => 1,
        'Noe' => 2, 
        'David' => 3,
        'Lila' => 4,
        'Rudy' => 5,
        'Mike' => 6,
        'Celine' => 7,
        'Celine' => 8,
        'Laetitia' => 9,
        'Samia' => 10,
        'Mahjoub' => 11,
    ];

    $liste_eleves_deux_dimensions = [
        'Alexandre' => [
            'message' => "Bonjour !",
        ],
        'Noe' => [
            'message' => "Salut !",
        ], 
        'David' => [
            'message' => "Ciao !",
        ],
        'Lila' => [
            'message' => "Hello !",
        ],
        'Rudy' => [
            'message' => "Welcome !",
        ],
        'Mike' => [
            'message' => "Hi !",
        ],
        'Celine' => [
            'message' => "Plop !",
        ],
        'Celine' => [
            'message' => "Hola !",
        ],
        'Laetitia' => [
            'message' => "Yo !",
        ],
        'Samia' => [
            'message' => "Hallo !",
        ],
        'Mahjoub' => [
            'message' => "Coucou !",
        ],
    ];
    
    //for($i = 0; $i < count($liste_eleves); $i++){ 
      //  echo $liste_eleves[$i];
    //}
    
    function direBonjour($name, $balise)
    {
        return "<$balise>Bonjour $name, ça va ?</$balise>";
    }

    //function dire($name, $message, $balise){
      //  return "<$balise>$name dit : $message </$balise>";
    //}

    //echo dire("Alexandre", "Bonjour les amis !", 'h1');
    
    //function tousDire($liste_prenoms, $balise, $message)
    
    //function tousDireBonjour($liste_prenoms, $balise)
        /*
        foreach ($liste_eleves as $key => $value) {
            //Pour chaque eleve, dire bonjour
            //echo direBonjour($value, 'h1');
        }
        */
    function direBonjourANom($name, $balise)
    {
        return "<$balise> Bonjour $name , ça ?</$balise>";
    }
    
    function direBonjourATous($listeDePrenoms,$balise)
    {
        foreach ($listeDePrenoms as $key => $value) {
            echo direBonjourANom($value,$balise);
        }
    }


    //direBonjourATous($liste_eleves, 'h3');
    
    function direMessage($nom, $balise, $message)
    {
        return "<$balise>$nom dit : $message</$balise>";
    };

    function tousDireMessage( $liste, $balise, $message)
    {
        foreach($liste as $key =>$value){
            echo direMessage($value,$balise,$message);
        }
    }

    //tousDireMessage($liste_eleves,'h1','Salut a tous !');
    
    ?>
    <script src="js/scripts.js"></script> 
</body>
</html>