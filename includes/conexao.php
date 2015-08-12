<?php
$conexao = mysql_connect('mysql.hostinger.com.br', 'u963154851_canti', 'Pr@t01Ntelig3n7e');
        if (!$conexao) {
            die('Conexão cancelada:' . mysql_error());
        } echo '';
        $banco = mysql_select_db('u963154851_pinct', $conexao);
?>
