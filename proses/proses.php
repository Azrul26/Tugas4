<?php

    if ($_POST){

    $bilangan_1 = "";
    $error = false;

    if (empty($_POST["input_bilangan_1"])) 
    {
        $error_bilangan_1 = "Input bilangan 1 Tidak Boleh Kosong";
        $error = true;
    } 
    else 
    {
        $bilangan_1 = ($_POST["input_bilangan_1"]);
 
        if(!is_numeric($bilangan_1)) 
        {
            $error_bilangan_1 = 'Input bilangan hanya boleh angka';
            $error = true;
        }
    }

    $bilangan_2 = "";

    if (empty($_POST["input_bilangan_2"])) 
    {
        $error_bilangan_2 = "Input bilangan 2 Tidak Boleh Kosong";
        $error = true;
    } 
    else 
    {
        $bilangan_2 = ($_POST["input_bilangan_2"]);
 
        if(!is_numeric($bilangan_2)) 
        {
            $error_bilangan_2 = 'Input bilangan hanya boleh angka';
            $error = true;
        }
    }

    $bilangan_3 = "";

    if (empty($_POST["input_bilangan_3"])) 
    {
        $error_bilangan_3 = "Input bilangan 3 Tidak Boleh Kosong";
        $error = true;
    } 
    else 
    {
        $bilangan_3 = ($_POST["input_bilangan_3"]);
 
        if(!is_numeric($bilangan_3)) 
        {
            $error_bilangan_3 = 'Input bilangan hanya boleh angka';
            $error = true;
        }
    }

    $hasil = "";
    if($error == false){
        $hasil = ($bilangan_1 + $bilangan_2 + $bilangan_3) / 3;
    }

    header("location:http://localhost/TUGAS_JWD_4B/index.php?error_bilangan_1=" . $error_bilangan_1 . "&error_bilangan_2=" . $error_bilangan_2 . "&error_bilangan_3=" . $error_bilangan_3  . "&hasil=" . $hasil .  "&bilangan_1=" . $bilangan_1 . "&bilangan_2=" . $bilangan_2 . "&bilangan_3=" . $bilangan_3);

}

?>