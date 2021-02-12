<div class=titulo>Interface</div>

<?php
interface Animal {
	function  respirar();
}

interface Canino{
	function latir():string;
}

interface Mamar{
	function mamar():string;
}

class Cachorro implements Animal, Canino, Mamar {
	function respirar(){
		echo "Irei usar oxigênio";
	}

	function latir():string{
		return 'au,au';
	}

	function mamar():string{
		return "Eu bebo leite";
	}
}

$animal = new Cachorro;

$animal->respirar();
//implement é obrigado de implementar, nesse caso, o respirar()
echo '<br>';
echo $animal->latir();
echo '<br>';
echo $animal->mamar();
echo '<br>Fim!';
