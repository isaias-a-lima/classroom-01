<?php
class Igreja{
    private int $id;
    private string $nome;
    private string $email;
    private string $endereco;
    private string $telefone;  
    
    function __construct($id, $nome, $email, $endereco, $telefone) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    function getId() { return $this->id; }
    function setId($id) { $this->id = $id; }
    
    function getNome() { return $this->nome; }
    function setNome($nome) { $this->nome = $nome; }

    function getEmail() { return $this->email; }
    function setEmail($email){ $this->email = $email; }

    function getEndereco() { return $this->endereco; }
    function setEndereco($endereco){ $this->endereco = $endereco; }

    function getTelefone() { return $this->telefone; }
    function setTelefone($telefone){ $this->telefone = $telefone; }
}
?>