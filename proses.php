<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nama'];
    echo $name;
    $addres = $_POST['alamat'];
    echo "<br>";
    echo $addres;
}
?>