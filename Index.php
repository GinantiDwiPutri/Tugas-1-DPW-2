<?php 

include "Animal.php";

Class Monyet{var $munki;
function Bisa_beranak(){//$Munki-> Bisa_beranak;
}
function bersuara(){//$Munki-> uuuk aaa uuuk aaa;
}
} 

$munki=new monyet;
$munki->jumlah_kaki=2;
echo "munki adalah monyet <br>";
echo"punya kaki sebanyak:".$munki-> jumlah_kaki."<br>";
echo " Bisa memanjat pohon dengan cepat". "<br>";
echo"Suaranya: uuuk aaa uuuk aaa". $munki-> bersuara ()."<br>";
echo "<hr>";

Class tikus {var $Rimbi;
function Bisa_beranak(){//$Rimbi->Bisa_beranak;
}
function bersuara (){//$Rimbi-> citcitcit;
}
} 
$Rimbi=new tikus;
$Rimbi->jumlah_kaki=4;
echo "Rimbi adalah tikus <br>";
echo"punya kaki sebanyak:".$Rimbi-> jumlah_kaki."<br>";
echo "Dapat berkembang biag dengan cepat "."<br>";
echo"Suaranya: citcitcit". $Rimbi-> bersuara ()."<br>";
echo "<hr>";

Class Kodok {var $Kilar;
function Bisa_meloncat(){//$Kilar->Bisa_meloncat;
}
function bersuara (){//$Kilar->wrebekk wrebekk wrebekk;
}
} 
$Kilar=new kodok;
$Kilar->jumlah_kaki=4;
echo "Kilar adalah kodok <br>";
echo"punya kaki sebanyak:".$Kilar-> jumlah_kaki."<br>";
echo "Bisa meloncat"."<br>";
echo"Suaranya: wrebekk wrebekk wrebekk". $Kilar-> bersuara ()."<br>";
echo "<hr>";

Class Anjing{var $Ankis;
function Bisa_beranak(){//$Ankis-> Bisa_beranak;
}
function bersuara (){//$Ankis-> guk guk guk;
}
} 

$Ankis=new Anjing;
$Ankis->jumlah_kaki=4;
echo "Ankis adalah Anjing <br>";
echo "punya kaki sebanyak:".$Ankis-> jumlah_kaki."<br>";
echo "Bisa beranak". "<br>";
echo "Suaranya: guk guk guk". $Ankis-> bersuara ()."<br>";
echo "<hr>";
 ?>