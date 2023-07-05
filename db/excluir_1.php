<div class="titulo">Excluir Registro#01</div>

<?php
require_once "conexao.php";

$sql = "DELETE FROM cadastro WHERE Id = 3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();