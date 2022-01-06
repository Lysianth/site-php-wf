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


    //Ecrire la fonction adequat
    $liste_personne_message = [
        "Alexandre" => [
            'messages' => [
                [
                    'date' => "Aujoud'hui", 
                    'message' => 'Salut Alexandre, tu peux faire des cours de PHP plus simple ?'
                ],
                [
                    'date' => "Demain", 
                    'message' => 'Salut Alexandre, tu as pensé a prendre ton sac'
                ],
                [
                    'date' => "Hier", 
                    'message' => 'Quelle est ta couleur préf ?'
                ],
            ]
            ],
            "Michel" => [
                'messages' => [
                    [
                        'date' => "Aujoud'hui", 
                        'message' => 'Salut Michel, tu peux faire des cours de PHP plus simple ?'
                    ],
                    [
                        'date' => "Demain", 
                        'message' => 'Salut Michel, tu as pensé a prendre ton sac'
                    ],
                    [
                        'date' => "Hier", 
                        'message' => 'Quelle est ta couleur préf ?'
                    ],
                ]
            ]
            ];
    function direTousLesMessageDe($name,$liste)
    {
        foreach ($liste[$name]['messages'] as $key => $value) {
            echo ("<h4>Date : " . $liste[$name]['messages'][$key]['date'] . '</h4>' );
            echo ("<h3>Message : " . $liste[$name]['messages'][$key]['message'] . '</h3>');
        }
    }

    function direTouslesMessagesDeDeux($list, $name, $balise)
    {
        foreach ($list[$name]['messages'] as $key => $value) {
            echo "<$balise>$name dit : " . $value['message'] . "</$balise>";
            echo "<$balise>c'etait : " . $value['date'] . "</$balise>";
        }
    }
    function direTouslesMessages($list, $balise)
    {
        foreach ($list as $name => $value) {
            foreach ($list[$name]['messages'] as $key => $value) {
                echo "<$balise>$name reçoit : " . $value['message'] . "</$balise>";
                echo "<$balise>c'etait : " . $value['date'] . "</$balise>";
            }
    }

    




     
    }
    direTouslesMessages($liste_personne_message, 'h1');
    direTouslesMessagesDeDeux($liste_personne_message,'Alexandre', "h1")
    ?>
    <script src="js/scripts.js"></script> 
</body>
</html>