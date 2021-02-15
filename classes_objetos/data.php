<div class="titulo">Classe Data</div>

<?php
    class Data{
        public $dia = 1;
        public $mes = 1;
        public $ano = 1;

        public function apresentar(){
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }
    }
    $aniversario = new Data();
    $aniversario -> dia = 14;
    $aniversario -> mes = "08";
    $aniversario -> ano = 1987;

    echo $aniversario->apresentar(), '<br>';