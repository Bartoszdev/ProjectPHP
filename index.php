<html>
    <head>
        <title>PHP - zmienne </title>
    </head>
    <body>
<?php
    
$szerokosc =  4;
$wysokosc = 2;
echo $szerokosc;
/*
 * nie można używać spacji 
 * nie wolno rozpoczynać nazwy zmiennej od cyfry
 * Wielkość liter ma znaczenie
 * Można korzystać z polskich znaków w zmiennych , ACZKOLWIEK NIE KORZYSTAMY Z TEGO !!!
 * 
 */
echo "<br/>--------------<br/>";
var_dump($szerokosc);
echo "<br/>--------------<br/>";

$tekst = "abc";



echo "<br/>--------------<br/>";
var_dump($tekst);
echo "<br/>--------------<br/>";

//echo $tekst(1); Pozwala wypisać pojedyńczy znak który jest z kolei w nawiasie

echo "<br/<br/><br/><br/>";
echo "szerokość wynosi $szerokosc<br/>";
echo 'aby stworzyć zmienną w PHP korzystamy z następującej konstrukcji : $nazwa_zmiennej \n,  zmienna szerokosc = '. $szerokosc;
echo "<br/>szerokość wynosi \$szerokosc \n<br/>";
echo "<br/>szerokość wynosi \$szerokosc \\n<br/>";

echo ord('1')."<br/>";
echo chr(49)."<br\>";

$zm =4.935652135;

echo "<br/>--------------<br/>";
var_dump($zm);
echo "<br/>--------------<br/>";

echo (int)($zm)."<br/>"; //rzutowanie 
echo round($zm, 2)."<br/<br/><br/><br/>"; //zaokrąglanie do danej wartości

$czy_wyslano_wiadomosc = true; //w PHP symbolem prawdy jest 1 lub też JAKAKOLWIEK liczba RÓŻNA od 0

echo $czy_wyslano_wiadomosc."<br/<br/><br/><br/>";


$czy_dostarczono_paczke = false; // FAŁSZ jesr symbolizowany przez 0
        
echo $czy_dostarczono_paczke;

define("NAZWA_GRY", "Mroczne Lata Camelotu");

echo NAZWA_GRY;

?>
    </body>
</html>