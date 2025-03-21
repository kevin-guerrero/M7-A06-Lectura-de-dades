<?php
$db = new SQLite3('diariLocal.db');

$resultats = $db->query("SELECT not_data FROM noticies ORDER BY not_data DESC;");

while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "data: ". $fila['not_data'] . "<br>";
}
$db->close();
?>