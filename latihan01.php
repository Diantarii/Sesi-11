<?php
    $dta["NAMA"]="Diantari";
    $dta["TGLLAHIR"]="2004-09-01";
    $dta["JKEL"]="P";
    $dta["NIM"]="2201010119";
    $dta["JRS"]="TI-KAB";
    $dta["ALAMAT"]="Tegallalang, Gianyar, Bali";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);