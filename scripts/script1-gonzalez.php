<?php
/**
 * Esto es un script con dos funciones
 * @author Juan Manuel González Navarrete
 * @version 1.0.1
 * @copyright Ciclo DAW 2023
 */

/**
 * Esta función devuelve un saludo con el nombre que le pasamos como parámetro
 * @param string $nombre Es el nombre de la persona que saludamos
 * @return string Saludamos a la persona
 * @version 1.0.0
 * @throws No tienes exceciones
 *
 */
function nombre($nombre){
	echo "Buenos días " . $nombre . ".";
	echo "<br>";
}

/**
 * Esta función devuelve si eres mayor de edad o no segundo el parámetro pasado
 * @param integer $edad edad que tiene el usuario
 * @return string Indicamos si es mayor o menor de edad y puede acceder aun lugar.
 * @version 1.0.1
 * @throws No tienes excepciones
 */
function edad($edad){
	if ($edad >= 18) {
		echo "Eres mayor de edad, tienes " . $edad . " años, puedes entrar.";
	} else {
		echo "Eres menor de edad, tienes " . $edad . " años, no puedes entrar.";
	}
	echo "<br>";
}

echo "<h2>Ejemplo de salida de las funciones</h2>";
nombre("Juanma");
edad(40);

nombre("Luca");
edad(9);

?>
