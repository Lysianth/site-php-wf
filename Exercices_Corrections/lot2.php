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
    function debug($variable)
    {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
    }

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
    
    //debug($liste_eleves_deux_dimensions);
    
    //debug($liste_eleves_deux_dimensions['Alexandre']);
    
    


    //debug($liste_eleves_deux_dimensions['Alexandre']['message']);


    //function direMessage($nom, $balise, $message)
    //{
     //return "<$balise>$nom dit : $message</$balise>";
    //};

    //function tousDireMessage( $liste, $balise, $message)
    //{
    //    foreach($liste as $key => $value){
    //        echo direMessage($value,$balise,$message);
    //    }
    //}

    function direMessage($message, $name, $balise)
    {
        $html ='';
        $html .= "<$balise>";
        $html .= "$name dit : $message";
        $html .= "</$balise>";
        return $html;
    }


    //echo direMessage("Coucou", 'Alexandre', "h1");


    //debug($liste_eleves_deux_dimensions['Alexandre']);
    //debug($liste_eleves_deux_dimensions['Alexandre']['message']);

    function tousDireMessage($listeDeuxDimensions, $balise) 
    {
        foreach($listeDeuxDimensions as $key => $value ){
            debug($key);
            
            //echo direMessage('Salut',$key,$balise);
            //echo direMessage('Salut',$key,$balise);
        }
    }

    tousDireMessage($liste_eleves_deux_dimensions,'h1');
    $tableau = [
        'key' => "toto",
    ];

    $tableau['key']; // Toto

    $tableau = [
        'key' => [
            'valeur_1' => 1,
            'valeur_2' => 2,
            'valeur_3' => 3,
        ],
    ];
    
    //$tableau['key'] // === [0,1,2]
    //$tableau['key']['valeur_2'] // === 2


    //tousDireMessage($liste_eleves,'h1','Salut a tous !');
    
    ?>
    <script src="js/scripts.js"></script> 
</body>
</html>