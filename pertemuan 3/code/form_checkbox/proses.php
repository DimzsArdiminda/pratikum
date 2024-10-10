<?php
     //Mengecek apakah ada nilai hobi yang dikirim dari form
     echo "motor yang dipilih: <br>";
     if (isset($_POST['hasil'])) { //form
        $hobi=$_POST['hasil'];
		echo "<br>";
        for ($i=0; $i < count($hobi) ; $i++){
            print ("$hobi[$i] <br>");
        }
    }
  ?>