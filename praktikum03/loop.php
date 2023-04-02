<?php 

//buat loop
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
//buat loooping pertama
echo "<h3>Looping Pertama </h3>";

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "- I Love PHP <br>";
}
//buat loooping kedua
echo "<h3>Looping kedua </h3>";

for ($i = 20; $i >= 2; $i -=     2) {
    echo $i . "- I Love PHP <br>";
}
// buat array
$buah =["Anggur", "Mangga", "Melon"];

foreach ($buah as $b ) {
    echo $b . "<br>";
}

?>