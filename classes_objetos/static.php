<div class="titulo">Membros Estáticos</div>

<?php
class A {
	public $naoStatic = 'Variável de Instância';
	public static $static = 'Variável de Classe';

	public function mostrarA(){
		echo "Não estático = {$this->naoStatic}<br>";
		// Tentativa 1
		//echo "Estático = {$this->static}<br>";
		//echo"Estático = {self::$static}<br>" não funciona com interpolação.
		echo "Estático = " . self::$static . "<br>";
	}

	public static function mostrarStaticA(){
		echo "Estática = " . self::$static . "<br>";
	}
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); //não é interessante de usar
//Embaixo é mais interessante

echo '<br>';
A::mostrarStaticA();

echo A::$static . "<br>"; //acessar diretamente pela classe
A::mostrarStaticA();

//Alterando variável do static
A::$static = 'Alterando membro de classe!';
echo A::$static . '<br>';






