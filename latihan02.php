<?php
    $dta[0]["NAMA"]="Diantari";
    $dta[0]["TGLLAHIR"]="2004-09-01";
    $dta[0]["JKEL"]="P";
    $dta[0]["NIM"]="2201010119";
    $dta[0]["JRS"]="TI-KAB";
    $dta[0]["ALAMAT"]="Tegallalang, Gianyar, Bali";

    $dta[1]["NAMA"]="Mangtri";
    $dta[1]["TGLLAHIR"]="2004-08-23";
    $dta[1]["JKEL"]="P";
    $dta[1]["NIM"]="2201010120";
    $dta[1]["JRS"]="TI-KAB";
    $dta[1]["ALAMAT"]="Sapat, Tegallalang, Bali";

    $dta[2]["NAMA"]="Mahima";
    $dta[2]["TGLLAHIR"]="2004-09-09";
    $dta[2]["JKEL"]="P";
    $dta[2]["NIM"]="2201010339";
    $dta[2]["JRS"]="TI-KAB";
    $dta[2]["ALAMAT"]="Sesetan, Denpasar, Bali";

    $dta[3]["NAMA"]="Nabila";
    $dta[3]["TGLLAHIR"]="2004-09-18";
    $dta[3]["JKEL"]="P";
    $dta[3]["NIM"]="2201010344";
    $dta[3]["JRS"]="TI-KAB";
    $dta[3]["ALAMAT"]="Sesetan, Denpasar, Bali";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);