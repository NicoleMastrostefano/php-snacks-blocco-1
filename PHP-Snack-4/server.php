<?php
$nome=$_GET['nome'];

$invitati= ["Sara", "Ludovica", "Nora"];

if (in_array($nome,$invitati)) {
    echo "ok";
} else {
    echo "ko";
}

?>
