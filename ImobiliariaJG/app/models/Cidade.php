<?php

class Cidade {
    public $id;
    public $nome;
    public $estado;

    public function __construct($nome, $estado = null)
    {
        $this->setNome($nome);
        $this->setEstado($estado);
    }

public function setID($id){
$this->id = (int) $id;
}

public function setNome($nome){
    //simples validação
    if (!empty($nome)) {
        $this->nome = $nome;
    }
}

public function setEstado($estado){
    if (!empty($estado)) {
        $this->estado = $estado;
    }
}


}

?>