<?php

/*if (isset($_POST['submit'])) {
    $ilgis = $_POST['ilgis'];
    $plotis = $_POST['plotis'];
}

$result = $ilgis * $plotis;

echo $result;*/

?>

<?php

//11 užduotis

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
}

echo "Mano vardas yra $name $lastName";

?>