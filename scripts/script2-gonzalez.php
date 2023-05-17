<?php
/**
 * Clase usuario para el acceso a un sitio web
 * @author Juan Manuel González Navarrete
 * @version 1.0.1
 * @copyright Ciclo DAW 2023
 */

/**
 * Esta clase es para generar distintos instacias de usuarios.
 * Tiene una series de atributos (propiedades)
 * @todo Esta clase se actualizará con una conexión a una base de datos. Para guardar las propiedades de los usuario creados en ella.
 */
class Usuario {

	//Atributos de la clase Usuarios
	/**
	 * @var string $usuario, nick/alias de acceso para el usuario
	 */
	private $usuario;

	/**
	 * @var string $password, contraseña de acceso para el usuario
	 */
	private $password;

	/**
	 * @var string $email, correo electrónico del usuario,
	 * para poder recibir notificaciones o recuperar la contraseña.
	 */
	private $email;

	/**
	 * @var booelan $estado, si el usuario esta activo o no.
	 */
	private $estado;

	//Método Constructor de la Clase
	/**
	 * Constructor de la clase, recibe cuatro parámetro para crear el objeto
	 * @param string $usuario nombre del usuario para poder acceder
	 * @param $password contraseña para el acceso
	 * @param $email email para recuperar el acceso
	 * @param boolean $estado usuario bloqueado o no
	 */
	public function __construct($usuario, $password, $email, $estado){
		$this->usuario=$usuario;
		$this->password=$password;
		$this->email=$email;
		$this->estado=$estado;
	}

	//Métodos getters y setters
	/**
	 * Método que devuelve el valor de la propiedad usuario
	 * @return string Devuelve el valor de la propiedad usuario
	 */
	public function getUsuario(){
		return $this->usuario;
	}

	/**
	 * Método que devuelve el valor de la propiedad password
	 * @return string Devuelve el valor de la propiedad paswword
	 */
	public function getPassword(){
		return $this->pasword;
	}

	/**
	 * Método que devuelve el valor de la propiedad email
	 * @return string Devuelve el valor de la propiedad email
	 */
	public function getEmail(){
		return $this->email;
	}

	/**
	 * Método que devuelve el valor de la propiedad estado
	 * @return string Devuelve el valor de la propiedad estado
	 */
	public function getEstado(){
		return $this->estado;
	}

	/**
	 * Método que actualiza el valor de la propiedad usuario por el parámetro pasado
	 * @param string $usuario Nuevo valor para actualizar
	 */
	public function setUsuario($usuario){
		$this->usuario=$usuario;
	}

	/**
	* Método que actualiza el valor de la propiedad password por el parámetro pasado
	* @param string $password Nuevo valor para actualizar
	 */
	public function setPassword($password){
		$this->password=$password;
	}

	/**
	* Método que actualiza el valor de la propiedad email por el parámetro pasado
	* @param string $email Nuevo valor para actualizar
	 */
	public function setEmail($email){
		$this->email=$email;
	}

	/**
	* Método que actualiza el valor de la propiedad estado por el parámetro pasado
	* @param boolean $estado Nuevo valor para actualizar
	 */
	public function setEstado($estado){
		$this->estado=$estado;
	}

	/**
	 * Método que comprueba el estado del usuario si esta activado o no. Devuelve el estado
	 * @return string Devuelve el estado del usuario
	 */
	public function comprobarEstado(){
		if ($this->estado){
			$estado="activo";
		} else {
			$estado="desactivado";
		}
		return $estado;
	}

	/**
	 * Método que devuelve todas las propiedades del usuario excepto la password
	 * @return string Devuelve todas las propiedades del usuario
	 */
	public function mostrarDatos(){
		echo "El usuario " . $this->usuario . " tiene el email, " . $this->email . " y su estado es " . $this->comprobarEstado() . ".";
	}



} //Fin clase Usuario


echo "<h2>Ejempo de instancias de la clase y sus métodos</h2>";
$user1 = new Usuario("Ana", "Ana", "ana@almeria.com", True);
$user2 = new Usuario("Paco", "paco1", "paco@almeria.com", True);
$user3 = new Usuario("María", "aslfCxloq", "maria@almeria.com", False);

$user1->setPassword("jf12AB");
echo "El estado de " . $user1->getUsuario() . " es " . $user1->comprobarEstado();
echo "<br>";

echo "El nombre del usuario 2 es, " . $user2->getUsuario() . "<br>";
$user2->setUsuario("Francisco");
echo "El nombre actualizado del usuario 2 es, " . $user2->getUsuario() . "<br>";

$user3->mostrarDatos();




?>
