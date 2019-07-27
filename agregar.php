<?php

include ('conexion.php');
$punto=$_GET['punto'];
echo $local;

 if ($punto)
{
$query = "select local,visitante,id_contador from contador";
 $result = mysqli_query($conexion, $query);

 while($row=mysqli_fetch_array($result)) 
					{
						$local = $row['local'];
						$visitante = $row['visitante'];
						$id_contador=$row['id_contador'];
					}

				$local = $local+$punto;
				

$query2 = "update contador set local='$local' 
                         where id_contador='$id_contador'";
 $result2 = mysqli_query($conexion, $query2);	
}


?>