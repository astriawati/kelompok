<?php

echo "<h3> Anggota Kelompok 2 : </h3>";

$seseorang="<b> Ilkom Kelas B </b>".'<br>';

echo $seseorang.'<br>';
echo "M.Haidil Anwar".'<br>';
echo "Nurdin".'<br>'; 
echo "Fahrun".'<br>';
echo "Nur Hatija".'<br>';
echo "Ranti".'<br>';
echo "Astriawati".'<br>';
echo "Jamila".'<br>';
echo "Israwati".'<br>';

echo "<h1> APLIKASI KALKULATOR MANUAL</h1>";
$n1=10;
$n2=2;
$operasi="*";
if($operasi=="+"){
    $hasil=$n1+$n2;
}elseif($operasi=='-'){
    $hasil=$n1-$n2;
}elseif($operasi=="*"){
    $hasil=$n1*$n2;
}elseif($operasi=="/"){
    $hasil=$n1/$n2;
}else{
    $hasil="kabohe";
}
echo "Nilai 1=".$n1.'<br>';
echo "Nilai 2=".$n2.'<br>';
echo "operasi".$operasi.'<br>';

echo "Hasilnya ".$hasil;

?>

