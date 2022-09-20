<?php
    class Saida {
        private int $id_saida;
        private int $id_igreja;
        private $data_saida;
        private string $descricao;
        private int $categoria_saida;
        private float $valor;
        private string $num_doc;

        function construct(int $id_saida, int $id_igreja, $data_saida, string $descricao, int $categoria_saida, float $valor)
        {
            $this->id_saida = $id_saida;
            $this->id_igreja = $id_igreja;
            $this->data_entrada = $data_saida;
            $this->descricao = $descricao;
            $this->categoria_entrada = $categoria_saida;
            $this->valor = $valor;
        }

        function getIdSaida() {return $this->id_saida;}
        function setIdSaida(int $id_saida) {$this->id_saida = $id_saida;}

        function getIdIgreja() {return $this->id_igreja;}
        function setIdIgreja(int $id_igreja) {$this->id_igreja = $id_igreja;}

        function getDataSaida() {return $this->data_saida;}
        function setDataSaida($data_saida) {$this->data_saida = $data_saida;}

        function getDescricao() {return $this->id_descricao;}
        function setDescricao(string $descricao) {$this->descricao = $descricao;}

        function getCategoriaSaida() {return $this->categoria_saida;}
        function setCategoriaSaida(int $categoria_saida) {$this->categoria_saida = $categoria_saida;}

        function getValor() {return $this->valor;}
        function setValor(float $valor) {$this->valor = $valor;}
    }
?>