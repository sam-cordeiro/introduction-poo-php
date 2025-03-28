<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        class Produto{
            private $nome = "";
            private $marca = "";
            private $quantidade = 0;
            private $preco = 0.0;

            function __construct($nome, $marca, $quantidade, $preco){
                $this->nome = $nome;
                $this->marca = $marca;
                $this->quantidade = $quantidade;
                $this->preco = $preco;
            }

            public function getNome() {
                return $this->nome;
            }

            public function setNome($name){
                $this->nome = $name;
            }

            public function getMarca() {
                return $this->marca;
            }

            public function set($marca){
                $this->marca = $marca;
            }

            public function getQuantidade() {
                return $this->quantidade;
            }

            public function setQuantidade($quantidade){
                $this->quantidade = $quantidade;
            }

            public function getPreco() {
                return $this->preco;
            }

            public function setPreco($preco){
                $this->preco = $preco;
            }
            
        }
        
        $p = new Produto($_POST["nome"], $_POST["marca"], intval($_POST["qtd"]), floatval($_POST["preco"]));

        var_dump($p);

    ?>
</body>
</html>