<?php
$content = file_get_contents("../data/dico.txt");
$passwords = explode("\n", $content);
echo json_encode($passwords);
// afin que la page s'arrete on met un exit.
exit;
