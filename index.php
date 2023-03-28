<?php

//$country = 'Lietuva';
//$city = 'Vilnius';
//$population = '574221';

//echo "$city - Lietuvos sostinė";
//echo "$city ir $country sparčiai auga";

//$x = 10;
//$y = 7;

//echo "$x - $y = " . ($x + $y) . "<br>";
//echo "$x - $y = " . ($x - $y) . "<br>";
//echo "$x - $y = " . ($x * $y) . "<br>";
//echo "$x - $y = " . ($x / $y) . "<br>";
//echo "$x - $y = " . ($x % $y) . "<br>";

/*<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><?php echo $country ?></li>
        <li><?php echo $city ?></li>
        <li><?php echo $population ?></li>
    </ul>
</body>

</html>*/

//05 užduotis

/*$cities3 = ['vasingtonas' => 1790];

$metai = 1222;

if($metai >= 1790) {
    echo "Vasingtonas yra JAV sostine";
}elseif($metai == 1774) {
    echo "JAV sostinė vis dar Filadelfijoje";
} else {
    $metai2 = 1790 - $metai;
    echo "Liko $metai2 metai (-ų) iki
    Vašingtono įkūrimo.";
}*/

?>

<?php

/*

//04 užduotis

/*$cities = ['Berlynas', 'Roma', 'Londonas'];

array_push($cities, 'Tokijas');

print_r($cities);

$cities2 = array(
    'tokijas' => 13.6,
    'vasingtonas' => 0.6,
    'maskva' => 11.5
);

echo "Tokijas -" . $cities2["tokijas"];
echo "Vasingtonas -" . $cities2["vasingtonas"];
echo "Maskva -" . $cities2["maskva"];

$cities2['londonas'] = 8.6;

echo "Londonas - " . $cities2['londonas'];

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><?php foreach ($cities as $city) {
                if ($city == 'Roma') {
                    echo $city;
                    break;
                }
            }
            ?></li>
    </ul>
    <ul>
        <?php foreach ($cities2 as $city => $population) {
            echo "<li>Gyventojų skaičius: 13.6 mln </li>";
            break;
        } ?>
    </ul>
</body>

</html>*/

?>

<?php

//06 užduotis

/*$cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];

$posts = ['First Post', 'Second Post', 'Third Post'];

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php for ($x = 0; $x < count($cities4); $x++) {
                echo "<li> $cities4[$x] . '<br>' </li>";
            } ?>
    </ul>
    <ul>
        <?php foreach($cities4 as $city) {
            echo $city;
        } ?>
    </ul>
</body>

</html>*/

?>

<?php

//07užduotis

/*$temp = [ 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

$average = array_sum($temp) / count($temp);

echo $average;

rsort($temp);
foreach ($temp as $val) {
    echo "<li>$val</li>";
}

rsort($temp);

$coolest = array_slice($temp, 0, 5);

print_r($coolest);

$warmest = array_slice($temp, -5, 5);

print_r($warmest);
*/

?>

<?php

//08 užduotis

/*$ceu = array( "Italija"=>"Roma",
"Liuksemburgas"=>"Liuksemburgas",
"Belgija"=> "Briuselis",
"Danija"=>"Kopenhaga",
"Suomija"=>"Helsinkis",
"Prancūzija" =>"Paryžius",
"Slovakija"=>"Bratislava",
"Slovenija"=>"Liublijana",
"Vokietija" => "Berlynas",
"Graikija"=> "Atėnai",
"Airija"=>"Dublinas",
"Nyderlandai"=>"Amsterdamas",
"Portugalija"=>"Lisabona",
"Ispanija"=>"Madridas",
"Švedija"=>"Stokholmas",
"Didžioji Britanija"=>"Londonas",
"Kipras"=>"Nikosija",
"Lietuva"=>"Vilnius",
"Čekija"=>"Praha",
"Estija"=>"Talinas",
"Vengrija"=>"Budapeštas",
"Latvija"=>"Ryga",
"Malta"=>"Valeta",
"Austrija" => "Viena",
"Bulgarija" => "Sofija",
"Rumunija" => "Bukareštas",
"Lenkija"=>"Varšuva");

foreach($ceu as $country => $capital) {
    echo "<li>$capital</li>";
}

print_r($ceu);*/

?>

<?php

//9 užduotis

/*function squareSum($a = 10, $b = 20) {
    return $a * $b;
}

echo squareSum();*/

?>

<?php

/*<form action="post.php" method="POST">
    <div>
        <label for="ilgis">Ilgis:</label>
        <input type="number" name="ilgis" required><br>
    </div>
    <div>
        <label for="plotis">Plotis:</label>
        <input type="number" name="plotis" required>
    </div>
    <input type="submit" value="submit" name="submit">
</form>*/

?>

<?php

/*<form action="post.php" method="POST">
    <div>
        <label for="name">Vardas:</label>
        <input type="text" name="name" required><br>
    </div>
    <div>
        <label for="lastName">Pavardė:</label>
        <input type="text" name="lastName" required>
    </div>
    <input type="submit" value="submit" name="submit">
</form>*/

?>

<?php

/*class User {
    public $vardas;
    public $pavarde;
    public $pasisveikinimas;

    public function __construct($vardas, $pavarde, $pasisveikinimas)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->pasisveikinimas = $pasisveikinimas;

    }
}

$user1 = new User('Jonas', 'Jonelis', 'Labas');
$user2 = new User('Vardenis', 'Pavardenis', 'Rankos paspaudimas');

echo $user1->vardas;
echo $user1->pavarde;
echo $user1->pasisveikinimas;
echo $user2->vardas;
echo $user2->pavarde;
echo $user2->pasisveikinimas;*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="text-muted credit">&copy;
        <?php 
        $copyYear = 2015;
        $curYear = date('Y');
        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
        ?></p>
</body>
</html>