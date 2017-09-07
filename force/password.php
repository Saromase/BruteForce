<?php
$content = file_get_contents("../data/dico.txt");
$passwords = explode("\n", $content);
$arr = array();
for ($i = 0; $i < count($passwords); $i++){
    $arr[$i] = $passwords[$i];
}

echo json_encode($arr);
// afin que la page s'arrete net la dessus.
exit;
