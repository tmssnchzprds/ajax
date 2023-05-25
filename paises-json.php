<?php
header('Content-Type: text/txt; application/json');

if ($_GET['pa']=='Argentina')
{
  $superficie=2700000;
  $capital="Buenos Aires";
  $idioma="Castellano";
  $poblacion=38000000;
}
if ($_GET['pa']=='Brasil')
{
  $superficie=8500000;
  $capital="Brasilia";
  $idioma="Portugues";
  $poblacion=163000000;
}
if ($_GET['pa']=='Chile')
{
  $superficie=750000;
  $capital="Santiago";
  $idioma="Castellano";
  $poblacion=15000000;
}
if ($_GET['pa']=='Spain')
{
  $superficie=250000;
  $capital="Madrid";
  $idioma="Castellano";
  $poblacion=44000000;
}

/*echo "{
        'superficie':'$superficie',
        'capital':'$capital',
        'idioma':'$idioma',
        'poblacion':'$poblacion'
      }";
	 */
$respuesta["superficie"]=$superficie;
$respuesta["capital"]=$capital;
$respuesta["idioma"]=$idioma;
$respuesta["poblacion"]=$poblacion;
echo json_encode($respuesta);

	  

?>