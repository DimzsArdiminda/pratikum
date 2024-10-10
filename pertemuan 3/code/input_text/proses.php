<?php
if(isset($_POST["Input"])){ //button
    $nama = $_POST['isian1'];
    $nama1 = $_POST['isian2'];
    $nama2 = $_POST['isian3'];
    $nama3 = $_POST['isian4'];
    echo "<b>Hobi saya adalah</b> <br>$nama<br>$nama1<br>$nama2<br>$nama3"; //output
}
?>