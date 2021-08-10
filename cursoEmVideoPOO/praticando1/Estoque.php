<?php
class Estoque {
    private $quantidade;

    public function __construct() {
        echo "<p>";
        echo "O total de produtos é: {$this->getQuantidade}";
        echo "</p>";
    }

    private function setQuantidade($q) {
        $this->quantidade = $q;
    }

    private function getQuantidade() {
        return $this->quantidade;
    }

    public function totalProdutos() {
        echo "<p>";
        echo "O total de produtos é: {$this->getQuantidade()}";
        echo "</p>";
    }

    public function adicionarProduto($quantidade) {
        $this->setQuantidade($this->getQuantidade() + $quantidade);
        echo "<p>";
        echo "{$quantidade} foram adicionados com sucesso!";
        echo "</p>";
    }

    public function removerProduto($quantidade) {
        if ($quantidade > $this->getQuantidade()) {
            echo "<p>";
            echo "Não é possível remover {$quantidade} produtos.";
            echo "Somente tem {$this->getQuantidade()} no estoque.";
            echo "</p>";
        } else {
            echo "<p>";
            echo "{$quantidade} removido com sucesso!";
            echo "</p>";
        }

    }
}
?>