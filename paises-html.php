<table border="1">
<?php
sleep(1);



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

?>
<tr>
<td>Pais</td><td><?php echo $_GET["pa"];?></td></tr>
<td>Superfice</td><td><?php echo $superficie;?></td></tr>
<td>Capital</td><td><?php echo $capital;?></td></tr>
<td>Idioma</td><td><?php echo $idioma;?></td></tr>
<td>Pais</td><td><?php echo $poblacion;?></td></tr>
</table>
