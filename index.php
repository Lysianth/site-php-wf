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
    function ajoutDix($nombre)
    {
       $nombre += 10;

        return $nombre;
    }
    function somme ($a,$b)
   {
       $total = $a + $b;
       return $total;
       
   }
   function direBonjour($nom)
   {
       echo "Bonjour $nom, ça va ?";
       echo PHP_EOL;
   }
   function direBonjourN2($nom,$balise)
   {
       echo "<$balise> Bonjour $nom, ça va ça va ? </$balise>";
   }
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
foreach ($liste_eleves as $key => $value) {
    echo "<h1>Bonjour $value, ça va ?</h1>";
}
foreach ($liste_eleves as $key => $value) {
    direBonjourN2($value, 'h1');
}
function tousDire($liste_prenoms,$balise,$message)
{
    foreach ($liste_prenoms as $key => $value) {
        echo "<$balise> $message $value </$balise>";
    }
}
function bonjourN3($listeBizarre)
{
    foreach ($listeBizarre as $key => $value) {
      echo  $key $value;
    }
}
bonjourN3($liste_eleves_deux_dimensions);
tousDire($liste_eleves,'h3',"Le teletubbie :");
  // $list=[1,2,3,4];
//    direBonjour("David");
//    echo ajoutDix(15); 
//    echo somme (50,43);
//    direBonjourN2("David","h1");
//    debug(ajoutDix(80));
  // debug($list);
   ?> 
    <script src="js/scripts.js"></script>
</body>
</html>