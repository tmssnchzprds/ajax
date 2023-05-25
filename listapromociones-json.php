<?php 
//header('Content-Type: text/txt; charset=ISO-8859-1');
$conexion=mysql_connect("192.168.2.220","root","sexpe2010");
mysql_select_db("inmobiliaria-profesor_dbo", $conexion);

$CodProvincia=$_GET["Provincia"];
$consulta="SELECT promociones.nombre As NombrePromo,promociones.descripcion,provincias.nombre,promociones.FotoPromocion,promociones.cod_promocion
FROM promociones,provincias
WHERE promociones.cod_provincia=provincias.cod_provincia AND Provincias.cod_provincia=$CodProvincia";
$resultado=mysql_query($consulta,$conexion);

			
			if (mysql_num_rows($resultado) <> 0)
					{
					while($registro = mysql_fetch_assoc($resultado)) 
					 {
					$vec[]=$registro;
	
					 }
					} 
					
/*require('JSON.php');
$json=new Services_JSON();
$cad=$json->encode($vec);
echo $cad;*/
echo json_encode($vec);
					 
					?>  
					 
					
			
					
