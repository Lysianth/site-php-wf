<!doctype html>

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
//     function ajoutDix($nombre)
//     {
//        $nombre += 10;

//         return $nombre;
//     }
//     function somme ($a,$b)
//    {
//        $total = $a + $b;
//        return $total;
       
//    }
//    function direBonjour($nom)
//    {
//        echo "Bonjour $nom, ça va ?";
//        echo PHP_EOL;
//    }
//    function direBonjourN2($nom,$balise)
//    {
//        echo "<$balise> Bonjour $nom, ça va ça va ? </$balise>";
//    }
   function debug($maFonction, $mort=false)
   {
       echo"<pre>";
       var_dump($maFonction,);
       echo "</pre>";
       if($mort){
       die;
       }
    }
   $liste_eleves = [
    'Tinky-Winky',
    'Dipsy', 
    'Laa Laa',
    'Po',
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
function tableauDire($liste,$balise){
    foreach ($liste as $key => $value) {
        echo direMessage($key,$balise,$value["message"]);
    }
}
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
    ]
        ];
        
    // function direTousLesMessageDe($liste,$name,$balise)
    // {  
        // foreach ($variable as $key => $value) {
        //     # code...
        // }
        // foreach ($liste as $key => $value) {
        //     echo direMessage($key,$balise,$value["messages"][0]);
        //     foreach ($liste[0] as $key => $value) {
        //         echo direMessage($key,$balise,$value["date"]);
        //      }
        // }
        
var_dump($liste_personne_message ["Alexandre"]["messages"]);
// function direTousLesMessageDe($name,$list){
//     foreach ($list[$name]['messages'] as $key => $value) {
//         echo
//     }
// }
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

direTouslesMessagesDeDeux($liste_personne_message,'Alexandre', "h1");

    

tousDireMessage( $liste_eleves,'h1','Salut à tous');
tableauDire($liste_eleves_deux_dimensions,'h1');
    //direTousLesMessageDe($liste_personne_message,$name,'h1');
// foreach ($liste_eleves as $key => $value) {
//     echo "<h1>Bonjour $value, ça va ?</h1>";
// }
// foreach ($liste_eleves as $key => $value) {
//     direBonjourN2($value, 'h1');
// }
// function tousDire($liste_prenoms,$balise,$message)
// {
//     foreach ($liste_prenoms as $key => $value) {
//         echo "<$balise> $message $value </$balise>";
//     }
// }
// function bonjourN3($listeBizarre)
// {
//     foreach ($listeBizarre as $key => $value) {
//         echo $key;
//         debug($value);
//     }
// }
// bonjourN3($liste_eleves_deux_dimensions);
// tousDire($liste_eleves,'h3',"Le teletubbie :");
//   // $list=[1,2,3,4];
// //    direBonjour("David");
// //    echo ajoutDix(15); 
// //    echo somme (50,43);
// //    direBonjourN2("David","h1");
// //    debug(ajoutDix(80));
// debug($liste_eleves_deux_dimensions['David']);
   ?> 
    <script src="js/scripts.js"></script>
</body>
</html>