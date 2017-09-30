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

//WYKŁAD NUMER 6 - TABLICE 

echo "<br/>--------------------------------------<br/>";


$nazwa_tab[0] = 10;
$nazwa_tab[1] = 20;

echo $nazwa_tab[0]."<br/>";
echo $nazwa_tab[1]."<br/>";



$liczby[0] = 1;
$liczby[1] = 10;
$liczby[2] = 1000;

//echo $liczby[0];


$tab[] = 'cos';// TABLICE W PHP NUMERUJEMY OD ZERA ! 
$tab[] = 56;

echo $tab[0]."<br/>";
echo $tab[1]."<br/>";

echo "<pre>"; //Funkcja z html wypisuję nam dosyć czytelną dla ludzkiego oka wersję tablicy 
print_r($tab);
echo "</pre>";

// TABLICA ASOCJACYJNA - skojarzeniowa

$czlowiek["imie"] = "Bartosz";// pod indeksem zero będzię przechowywane imię !
$czlowiek["nazwisko"] = "Roziński";

echo "<pre>"; 
print_r($czlowiek);
echo "</pre>";

$tab2 = array("imie" => 'Adam', 'nazwisko' => "Kowalski", 'wiek'=> "25");   

echo "<pre>"; 
print_r($tab2);
echo "</pre>";


// TABLICE WIELOWYMIAROWE (dwuwymiarowe)

$human[0]["imie"] = "Arkadiusz";
$human[0]["nazwisko"] = "Kowalski";
 
$human[1]["imie"] = "Wiola";
$human[1]["nazwisko"] = "Makuszewska";

$human[2]["imie"] = "Czarek";
$human[2]["nazwisko"] = "Szparek";


$human2["imie"][0] = "Arkadiusz";
$human2["nazwisko"][0] = "Kowalski";
 
$human2["imie"][1] = "Wiola";
$human2["nazwisko"][1] = "Makuszewska";

$human2["imie"][2] = "Czarek";
$human2["nazwisko"][2] = "Szparek";



echo "<pre>"; 
print_r($human);
echo "</pre>";

echo "<pre>"; 
print_r($human);
echo "</pre>";
        
//OPERATORY ARYTMETYCZNE - WYKŁAD 7


$zm1 = 10;
$zm2 = 20;
$imie = "Arkadiusz";
$nazwisko = "Kowalski";

echo $zm1 + $zm2;

echo "<br/>--------------<br/>";

echo $zm1 - $zm2;

echo "<br/>--------------<br/>";

echo $zm1 * $zm2;

echo "<br/>--------------<br/>";

echo $zm1 / $zm2;

echo "<br/>--------------<br/>";

echo 5 % 4; // mod // modulo //reszta z dzielenia 

echo "<br/>--------------<br/>";

echo 5 % 4;

echo "<br/>--------------<br/>";

echo $imie." ".$nazwisko; // łąćzenie stringów

echo "<br/>--------------<br/>";

$a = 10;

echo "<br/>--------------<br/>";
$a += 2; //$a = $a + 2 zapis równoważny z tym skróconym // += , -= ,/= ,*=
echo $a;
echo "<br/>--------------<br/>";


$i = 5;
$i++; // inkrementacja 
$i--; // dekrementacja 

echo $i;
        
// POSTINKREMENTACJA $i++ 
        
//PREINKREMENTACJA ++$i 
        
//POSTDEKREMENTACJA $i--
        
//PREDEKREMENTACJA --$i
        
echo "<br/>--------------<br/>";
echo "<br/>--------------<br/>";
echo "<br/>--------------<br/>";
        
        
 
        
// OPERATORY PORÓWNAŃ - WYKŁAD 8
        
        
$zmm = 5;
$zmm2 ="5";

// BOOL - true = 1 - false = 0 (NIC)

var_dump($zmm == $zmm2); // służą doo porównania dwóch wartości
echo "<br/>--------------<br/>";

var_dump($zmm != $zmm2);
echo "<br/>--------------<br/>";

var_dump($zmm <> $zmm2);

echo "<br/>--------------<br/>";

var_dump($zmm < $zmm2);

echo "<br/>--------------<br/>";
var_dump($zmm > $zmm2);
echo "<br/>--------------<br/>";

var_dump($zmm >=  $zmm2);

echo "<br/>--------------<br/>";
var_dump($zmm <= $zmm2);
echo "<br/>--------------<br/>";

var_dump($zmm === $zmm2);
echo "<br/>--------------<br/>";

// OPERATORY LOGICZNE WYKŁAD 9

// 0 - FALSE , 1 - TRUE 

$zmien = true;
$zmien2 = false;

var_dump($zmien and $zmien2);

echo "<br/>--------------<br/>";

/*
 * AND - i - KONIUNKCJA - &&
 * JEŻELI OBA ZDANIA SĄ PRAWDZIWE W TYM MOMENCIE TO KONIUNKCJA JEST PRAWDZIWA
 * 
 * OR - lub - ALTERNATYWA - || 
 * JEŻELI JEDNO LUB DRUGIE ZDANIE JEST PRAWDZIWE WTEDY WYNIK JEST PRAWIDŁOWY
 * 
 * XOR - (eXclusive OR) - wyłączna alternatywa
 * 
 * XOR różni się od OR ,że gdy mamy PRAWDA PRAWDA = FAŁSZ 

 */



//OPERATORY BITOWE , BIT - najmmniejsza jednostka informacji przechowywana przez komputer


//Zamiana z systemu dwójkowego do systemu dziesiętnego 

/*
 * 1 2 6 =  1 * 10 ^ 2 + 2 * 10 ^ 1 + 6 * 10 ^ 0 = 100 + 20 + 6 = 126 
 * 
 *1 0 1 0 = 1 * 2 ^ 3 + 0 * 2 ^ 2 + 1 * 2 ^ 1 + 0 * 2 ^ 0 = 10
 * 
 *1 0 1 0 = 1 * 2 ^ 3 + 1 * 2 ^ 1 = 8 + 2 = 10 // nie musimy zapisywać zer
 * 
 * 
 * 2 - 0 0 1 0
 * 10 - 1 0 1 0
 */



echo 2 & 10; 



 // 2 -  0 0 1 0
    // 10 - 1 0 1 0
    
    // & - KONIUNKCJA
    // 0 0 1 0
    // 1 0 1 0
    // 0 0 1 0 - 2

    echo 2 & 10;
    
    echo "<br />----------<br />";
    // | - ALTERNATYWA
    // 0 0 1 0
    // 1 0 1 0
    // 1 0 1 0 - 10

    echo 2 | 10; 
    
    
    echo "<br />----------<br />";
    // ^ - XOR
    // 0 0 1 0
    // 1 0 1 0
    // 1 0 0 0 - 8

    echo 2 ^ 10;     
    
    echo "<br />----------<br />";
    // ~ - NOT
    // 1 0 1 0
    // 0 1 0 1 - 5

    echo ~10;  
    
   
    echo "<br />----------<br />";
    
    // 0 1 0 1 - 5
    // 0 0 1 0 (1)
     // 0 0 0 1 (0) (1)
    echo 5 >> 2;   
    echo "<br />----------<br />";  
    // 0 1 0 1 - 5
    // 1 0 1 0 - 10
    // 000000000000000000 1 0 1 0 0 - 20
    echo 5 << 2;     

    /// INSTRUKCJE WARUNKOWE !
    
  /*
     * TRUE - gdy jest różny od 0, FALSE - 0 lub też null
     * warunek to wyrażenie (cokolwiek co będzie jakąś ostateczine wartością liczbową lub też nullem)
     * JEŚLI (warunek1)
     *  instrukcja1;
     * JEŚLI W innym wypadku (warunek2)
     *  instrukcja2;
     * CAŁKOWICIE w innym wypadku, gdy poprzednie warunki nie są spełnione
     *  instrukcja3;
     * 
     */
    
     $a = 5;
     $b = "5";
     /*
     if ($a > $b)
         echo "a jest wieksze od b";
     else if ($a < $b)
         echo "b jest wieksze od a";
     else
     {
         echo "a jest rowne b<br />"; 
         if ($a === $b)
             echo "dodatkowo a jest tego samego typu co b";
     }
     */
     
     //echo "asdfasdfasdf";
     //        0                1            0
     if (!((5 >7 && 7 > 4) || (10 == 10)) )
         echo "prawda";
     
     
     if ($a == $b)
     {
         $a += 5; //a = a +5
         echo "a jest rowne b <br />";
         
         if ($a > $b)
             echo "a jest wieksze od b";
         else if ($a < $b)
             echo "b jest wieksze od a";
     }
     
     /*
      * if (warunek1)
      *     instrukcja1;
      * 
      * if (warunek1)
      *     instrukcja1;
      * else
      *     instrukcja2;
      * 
      * if (warunek1)
      *     instrukcja1;
      * else if (warunek2)
      * {
      *     instrukcja2;
      *     instrukcjanta;
      * }
      * else
      *     instrukcja3;
      * 
      * if (warunek)
      *     instrukcja;
      * else if (warunek2)
      *     instrukcja2;
      * else if (warunek3)
      *     instrukcja3;
      * else if
      * .....
      * 
      * 
      */
  
?>
    </body>
</html>