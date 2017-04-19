<?php


    require_once 'Mobil.php'; //mengambil dari mobil.php/menghubungkan dengan mobil.php


    $mobil = new Mobil(); //membuat object baru

    $mobil->setType('S 500'); //menyetel type mobil
    $mobil->setPersneling(6); //menyetel jumlah persneling

    echo $mobil->getType().'<br>'; //menampilkan type mobil
    echo $mobil->getPersneling().'<br>'; //menampilkan jumlah persneling

    echo $mobil::cetakJenisMobil().'<br>'; //menampilkan hasil cetakan dari jenis mobil

    var_dump(Mobil::$jenisMobil); //dumping jenismobil
    var_dump(Mobil::cetakJenisMobil()); //dumping fungsi cetakjenismobil
