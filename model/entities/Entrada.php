<?php
    class Entrada {
        private int $id_entrada;
        private int $id_igreja;
        private $data_entrada;
        private string $descricao;
        private int $categoria_entrada;
        private float $valor;

        function construct(int $id_entrada, int $id_igreja, $data_entrada, string $descricao, int $categoria_entrada, float $valor)
        {
            $this->id_entrada = $id_entrada;
            $this->id_igreja = $id_igreja;
            $this->data_entrada = $data_entrada;
            $this->descricao = $descricao;
            $this->categoria_entrada = $categoria_entrada;
            $this->valor = $valor;
        }

        function getIdEntrada() {return $this->id_entrada;}
        function setIdEntrada(int $id_entrada) {$this->id_entrada = $id_entrada;}

        function getIdIgreja() {return $this->id_igreja;}
        function setIdIgreja(int $id_igreja) {$this->id_igreja = $id_igreja;}

        function getDataEntrada() {return $this->data_entrada;}
        function setDataEntrada($data_entrada) {$this->data_entrada = $data_entrada;}

        function getDescricao() {return $this->id_descricao;}
        function setDescricao(string $descricao) {$this->descricao = $descricao;}

        function getCategoriaEntrada() {return $this->categoria_entrada;}
        function setCategoriaEntrada(int $categoria_entrada) {$this->categoria_entrada = $categoria_entrada;}

        function getValor() {return $this->valor;}
        function setValor(float $valor) {$this->valor = $valor;}
    }
?>