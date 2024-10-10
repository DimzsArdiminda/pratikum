<?php
     //Mengecek apakah ada nilai hobi yang dikirim dari form
    if(isset($_POST["Input"])){
    $hobi = $_POST["hobi"];
    echo "Hobi yang dipilih: <b><font color='blue'>$hobi</font></b>";
    }
?>