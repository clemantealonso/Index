<?php
$host_db="localhost";
$usuario="root";
$pass="";
//conectar la base de datos con el resto de los documentos
$link=mysqli_connect($host_db,$usuario,$pass);
if(!$link){
	// verificar la conecxion
	echo '<script>'; echo 'alert("Mysql no es compatible")';
	echo'</script>';
}
else{
	echo '<script>'; echo 'alert("Conectado ")';
	echo'</script>'; echo "<br>";
}
// se conecta la base de datos con el html para dar respuesta en php
$dbconnect=mysqli_select_db($link,'taller');
if(!$dbconnect){
	
	
	echo '<script>'; echo 'alert("No es pocible la conexion")';
	echo'</script>';
}
else{
	echo '<script>'; echo 'alert("conectado")';
	echo'</script>'; echo "<br>";
}
// se consultan los datos en la tabla
$query = 'SELECT * FROM trabajo';
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));

//se crea la tabla que se presentará en el html
echo "<table>\n";
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "\t<tr>\n";
   // foreach ($line as $) {
        echo "\t\t<td>".$line["id"]."</td>\n";
    //}
    echo "\t</tr>\n";
}
echo "</table>\n";
// Se comparten los resultados
mysqli_free_result($result);

//update 
UPDATE tabla SET edad='';

//seleccionar datos
$sele=$_REQUEST['seleccionar'];
$bus=$_REQUEST['texto'];

$sql ='SELECT * FROM datos where'.$sele.'="'.$bus.'"';
//eliminar datos
mysqli_query($link,'Delete FROM taller where'.$sele.'="'.$bus.'"';

//Insertar datos
$link = conectar();
$q ="INSERT INTO taller 

//se cierra la conexión con la base de datos
mysqli_close($link);




?>