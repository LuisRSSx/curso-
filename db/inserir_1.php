<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro 
(nome, nascimento, email, site, filhos, salario)
VALUES (
    'Maria',
    '1975-05-25',
    'mariaj@email.com.br',
    'https://mariasim.sites.com.br',
    3,
    8968
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();