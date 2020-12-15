<!-- 

    Data_15/12/2020
    We are PHP
    Dev Tiago Mabango

    LinkDin Tiago Mabango
    Facebook Tiago Mabango
    Intagram @tiagomabango
-->
<style>
	p.describe{color:green;font-size:20px;}
	span.comando{color:red;}
	div.container{padding:16px;}
</style>
<div class="container">
<?php

/**
* Comandos de saida
* echo
* print
* print_r
* vprintf
* var_dump
*/


//========Usando o comando echo para imprimir dados na tela ===========

 $commandOutPut = "We are PHP";
 $programming = "#BoraProgramar";  
 
echo "	<p class='describe'> 
			
			Comando de saida <span class='comando'> echo </span>

		</p>";

echo " <p> Olá We are PHP" ," " , " #Boraprogramar </p> 
{$commandOutPut} {$programming}";

// =================================================================


 

//========Usando o comando print para imprimir dados na tela ===========

print " <p class='describe'> 

		 Comando de saida <span class='comando'> print </span>

		</p>";

 
Print " <p> $commandOutPut  </p>  $programming  ";

// ================================================================


// ======= o print_r é usado para listar Array ,let's do it ========
echo " <p class='describe'>
		 Comando de saida <span class='comando'> print_r </span> 
		</p>";


$programmings =[
"We_are_php" => "programmings free",
"first_day" => "15/12/2020",
"author" => "Tiago Mabango"
];


print_r($programmings);
echo "<pre>".
		print_r($programmings,true).
	"</pre>";

// ==================================================================

// ============== o vprintf é usado para listar Array ,let's do it ======
echo "<p class='describe'>
		 Comando de saida <span class='comando'> vprintf </span>
	  </p>";


$we_are_phpp = "<article><h1>Actividade para %s<h1/><p> Primeiro Projecto %s,  </br> Autor %s</p>  </article>";

vprintf($we_are_phpp ,$programmings);

// ==================================================================


// o var_dump é usado para debugar e mostrar toda informação de um determinado objecto ou variavel. let's do it
echo "	<p class='describe'>
			Comando de saida <span class='comando'> var_dump </span> 
		</p>";

echo "<pre>";
var_dump($programmings);
echo "</pre><br /> <br />";
var_dump($programming);
echo "<br /> <br />";
var_dump($commandOutPut);

?>
</div>