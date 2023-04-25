<?php
/*Este código inclui o arquivo "config.php" na página atual. Isso é útil quando você precisa usar funções ou variáveis definidas em outro arquivo.*/

require 'config.php';  
?>

<h1>Listagem de Usuários</h1>

<table border="1">
    
    <!--Essas linhas criam uma linha de cabeçalho na tabela HTML com os títulos de cada coluna.-->
    <tr>
        <th>ID</th>
        <th>Nome Fantasia</th>
        <th>Razão Social</th>
        <th>CNPJ</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
</table>

<a href="cadastrar.html">Cadastrar Usuários</a>