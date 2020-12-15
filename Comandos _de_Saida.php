<!-- 

    Data_15/12/2020
    We are PHP
    Dev Tiago Mabango

    LinkDin Tiago Mabango
    Facebook Tiago Mabango
    Intagram @tiagomabango
-->
<?php

/**
* Comandos de saida
* echo
* print
* print_r
* vprintf
* var_dump
*/

//echo
 $commandOutPut = "We are PHP";
 $programming = "#BoraProgramar";
 echo "<br> ";   
 
echo "<p style='color:green; font-size:20px;'>" ." Comando de saida <span style='color:#088'> echo </span>" ."</p>";

echo " <p>  Olá We are PHP" ," " , " #Boraprogramar" , "</p>";
echo "{$commandOutPut} {$programming}";


 

//Print
print "<p style='color:green; font-size:20px;'>" ." Comando de saida <span style='color:#000'> print </span>" ."</p>";

 
Print "$commandOutPut"."<br> <br>";
print $programming;

// o print_r é usado para listar Array ,let's do it
echo "<p style='color:green; font-size:20px;'>" ." Comando de saida <span style='color:#567'> print_r </span>" ."</p>";


$programmings =[
"We_are_php" => "programmings free",
"first_day" => "15/12/2020",
"author" => "Tiago Mabango"
];


print_r($programmings);
echo "<pre>",print_r($programmings,true),"</pre>";

// o vprintf é usado para listar Array ,let's do it
echo "<p style='color:green; font-size:20px;'>" ." Comando de saida <span style='color:#088'> vprintf </span>" ."</p>";


$we_are_phpp = "<article><h1>Actividade para %s<h1/><p> Primeiro Projecto %s,  </br> Autor %s</p>  </article>";

vprintf($we_are_phpp ,$programmings);

// o var_dump é usado para debugar e mostrar toda informação de um determinado objecto ou variavel. let's do it
echo "<p style='color:green; font-size:20px;'>" ." Comando de saida <span style='color:#088'> var_dump </span>" ."</p>";


var_dump($programmings);
echo "<br> <br>";
var_dump($programming);
echo "<br> <br>";
var_dump($commandOutPut);

?>