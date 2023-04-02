<?php

//Buat Array
$animals = ["Kucing", "Ayam", "Harimau"];
echo $animals[2]  . "<br>";
echo $animals[0];

foreach ($animals  as $animal) {
    echo $animal . "<br>";
}


//array assosiatif
$mahasiswa = ["nama"=>"Ara", "jurusan"=>"SI", "semester"=>2];
echo $mahasiswa["jurusan"] . "<br>";

foreach ($mahasiswa as $key=>$value) {
    echo " Key nya adalah " . $key . " value: " . $value . "<br>";
}


//array multidimensi
$dosen = [
    ["Pak Rojul", "web"],
    ["Pak Nasrul", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[0][0];


?>