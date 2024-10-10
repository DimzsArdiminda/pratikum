<?php
if (isset($_POST["masukan"])) { //button
    if ($_POST["email"] == "dimasardiminda@gmail.com" && $_POST["sandi"] == "ardimindadimas"){
        echo "<h1>Login berhasil</h1>";
    }else{
        echo "<h1>Login gagal</h1>";
    }
}
?>