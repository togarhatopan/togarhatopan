<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "NAMA : "; echo $obj->NAMA;
echo "<br>";
echo "NIM : "; echo $obj->NIM;
echo "<br>";
echo "PROGDI : "; echo $obj->PROGDI;
echo "<br>";
echo "MATA KULIAH 1: ";echo $obj->matkul[0];
echo "<br>";
echo "MATA KULIAH 2: ";echo $obj->matkul[1];
echo "<br>";
echo "MATA KULIAH 3: ";echo $obj->matkul[2];
echo "<br>";
echo "MATA KULIAH 4: ";echo $obj->matkul[3];
?>