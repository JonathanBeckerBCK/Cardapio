<?php

require_once("modelo/Prato.php");
require_once("modelo/Pedido.php");

$Comidas = array("","Camarão à Milanesa","Pizza Margherita","Macarrão à Carbonara","Bife à Parmegiana","Risoto ao Funghi");
unset($Comidas[0]);

print"-------------- C a r d a p i o ------------------\n";
print"|  Número  |         Nome         |     Valor   |\n";
print"|    1     | $Comidas[1]   |    110,00   |\n";
print"|    2     | $Comidas[2]     |     80,00   |\n";
print"|    3     | $Comidas[3] |     60,00   |\n";
print"|    4     | $Comidas[4]    |     75,00   |\n";
print"|    5     | $Comidas[5]     |     70,00   |\n";
print"-------------------------------------------------\n";
print"                1-Cadastrar\n";
print"                2-Cancelar\n";
print"                3-Listar\n";
print"                4-Total de Vendar\n";
print"                0-Sair\n";



$decisao = readline("");

switch ($decisao) {
    case '1':
    
    $Pedidos    = new Pedido();
    print"-------------- C l i e n t e s --------------\n";
    $Pedidos->setNomeCliente(readline("Nome:"));
    


    break;

    case '2':
    



    break;
    
    case '3':
    



    break;

    case '4':
    



    break;

   
    default:
        
        break;
}

