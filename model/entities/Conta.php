<?php
    class Entrada {
        private int $id_conta;
        private int $id_igreja;
        private $data_venc;
        private $data_pagto;
        private string $descricao;
        private int $categoria_saida;
        private float $valor;
        private string $num_doc;


        function construct(int $id_conta, int $id_igreja, $data_venc, 
        $data_pagto, string $descricao, int $categoria_saida, float $valor, string $num_doc)
        {
            $this->id_conta = $id_conta;
            $this->id_saida = $id_igreja;
            $this->data_venc = $data_venc;
            $this->data_pagto = $data_pagto;
            $this->descricao = $descricao;
            $this->$categoria_saida = $categoria_saida;
            $this->$valor = $valor;
            $this->$num_doc = $num_doc;
        }

        function getIdConta() {return $this->id_conta;}
        function setIdConta(int $id_conta) {$this->id_conta = $id_conta;}

        function getIdISaida() {return $this->id_saida;}
        function setIdSaida(int $id_saida) {$this->id_saida = $id_saida;}

        function getDataVenc() {return $this->data_venc;}
        function setDataVenc($data_venc) {$this->data_venc = $data_venc;}

        function getDataPagto() {return $this->data_pagto}
        function setDataPagto($data_pagto) {$this->data_pagto = $data_pagto;}

        function getDescricao() {return $this->descricao;}
        function setDescricao(int $descricao) {$this->descricao = $descricao;}

        function getCategoriaSaida() {return $this->categoria_saida;}
        function setCategoriaSaida(int $categoria_saida) {$this->categoria_saida = $categoria_saida;}
        
        function getValor() {return $this->valor;}
        function setValor(float $valor) {$this->valor = $valor;}

        function getNumDoc() {return $this->num_doc;}
        function setNumDoc(float $num_doc) {$this->valor = $num_doc;}
    }
?>