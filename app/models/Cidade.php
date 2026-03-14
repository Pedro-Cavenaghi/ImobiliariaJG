<?php

class Cidade {
    private $id;
    private $nome;
    private $estado;

    public function __construct(string $nome, string $estado)
    {
        $this->setNome($nome);
        $this->setEstado($estado);
    }

public function getID(): ?int{
return $this->id;
}

public function getNome(): string{
return $this->nome;
}

public function getEstado(): string{
return $this->estado;
}

public function setID($id){
    if ($this->id === null){
$this->id = (int) $id;
    }

}

public function setNome($nome){
    //simples validação
    if (empty($nome)) {
      throw new Exception("O nome da cidade é obrigatório.");
    }
    $this->nome = $nome;
}

public function setEstado($estado){
$estado = strtoupper(trim($estado));

    if (strlen($estado) !== 2) {
        throw new Exception("O estado deve conter extamente 2 letras.");
    }       
    $this->estado = $estado;
}


}

?>