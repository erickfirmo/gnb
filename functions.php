<?php

include "Conta.php";


$nome_user = $_POST['nome'];
$tipo_de_conta = $_POST['tipo'];
$primeiro_valor_deposito = $_POST['primeiro-deposito'];

$agencia = 0;
$numero_conta = 0;

function aberturaDeConta($nome_user, $tipo_de_conta, $primeiro_valor_deposito, $numero_conta, $agencia) {
    $agencia += 1;
    $numero_conta += 1;

    $id_conta = 'conta'.$numero_conta.'_'.$agencia;

    return $$id_conta = new Conta($nome_user, $tipo_de_conta, $primeiro_valor_deposito, $numero_conta, $agencia);

}

//print_r(aberturaDeConta($nome_user, $tipo_de_conta, $primeiro_valor_deposito, $numero_conta, $agencia));

aberturaDeConta($nome_user, $tipo_de_conta, $primeiro_valor_deposito, $numero_conta, $agencia);




