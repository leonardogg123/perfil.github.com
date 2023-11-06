<?php

require_once('../action/Crud.php');
require_once('../database/conect.php');

$database = new Database ();
$db = $database->getConnection();
$crud =new Crud ($db);


if(isset($_GET['action'])){
    switch($_GET['action']){
        case 'create':
            $crud->create($_POST);
            $rows = $crud->read();
            break;

        case 'read';
            $rows = $crud->read();
            break;

        case 'update':
                if(isset($_POST['id'])){
                    $crud->update($_POST);

                }
                $rows = $crud->read();
                break; 

      //case delete
        case 'delete';
        $crud->delete($_GET['id']);
        $rows = $crud->read();
        break;

        default:
            $rows = $crud->read();
            break;
    }
}else{
    $rows = $crud->read();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Itinerários</title>
    <style>
        body {
            background-color: #fff;
        }

        table {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 10px 45px;
            background: #c6e3bb;
            width: 1200px;
            height: 450px;
            margin-left: 30px;
            border-radius: 10px;
            box-shadow: rgba(14, 83, 125, 0.902) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        table, th, td {
            border: 3px solid #fff;
            border-collapse: collapse;
        }

        th, td {
            padding: 30px;
            text-align: center;
            background-color: #4e8c8c;
            color: rgb(0, 0, 0);
            
        }

        th {
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #a2d5c3;
        }

        tr:nth-child(odd) {
            background-color: #86b8a2;
        }

        a.delete {
            background-color: #dc3545;
        }

        a.delete:hover {
            background-color: #c82333;
        }

        h1 {
            font-family: "Inria Serif", serif;
            text-align: center;
            color: black;
            font-size: 50px;
        }

    .button-container {
        display: flex;
        justify-content: center;
        margin: 20px 0; 
        
        
    }

    .edit-button,
    .delete-button {
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 10px;
        padding: 10px 20px;
        margin: 0 5px;
    }

    .edit-button:hover,
    .delete-button:hover {
        background-color: #0056b3;
    }

    .delete-button {
        background-color: #dc3545;
    }

    .delete-button:hover {
        background-color: #c82333;
    }
    a{
        display: inline-block;
        padding: 10px 10px;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
        background-color: #4caf50;
        margin-left: 1000px;
        }

</style>
</head>
<body> 
<table>
    <tr>
        <th>Id</th>
        <th>Destino de Viagem</th>
        <th>Data de Partida</th>
        <th>Data de Retorno</th>
        <th>Número de Viajantes</th>
        <th>Documentos da Viagem</th>
        <th>Transporte</th>
        <th>Telefone de Emergência</th>
        <th>Notas Adicionais</th>
    </tr>

    <?php
    if ($rows->rowCount() == 0) {
        echo "<tr>";
        echo "<td colspan='10'>Nenhum dado foi encontrado</td>";
        echo "<tr/>";
    } else {
        while ($row = $rows->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['destino_de_viagem'] . "</td>";
            echo "<td>" . $row['data_de_partida'] . "</td>";
            echo "<td>" . $row['data_de_retorno'] . "</td>";
            echo "<td>" . $row['numero_de_viajantes'] . "</td>";
            echo "<td>" . $row['documentos_da_viagem'] . "</td>";
            echo "<td>" . $row['transporte'] . "</td>";
            echo "<td>" . $row['telefone_de_emergencias'] . "</td>";
            echo "<td>" . $row['notas_adicionais'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='10'>";
            echo "<a href='?action=update&id=" . $row['id'] . "' class='edit-button'>Editar</a>";
            echo "<a href='?action=delete&id=" . $row['id'] . "' onclick='return confirm(\"Tem certeza que deseja deletar esse registro?\")' class='delete-button'>Deletar</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
         <a href="../public/index.php">Página inicial</a><br><br>
         <h1>ITINERÁRIO</h1>
</table>

