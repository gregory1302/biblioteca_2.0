<?php
include_once "conexao.php";

$nome_leitor = filter_input(INPUT_GET, "nome_leitor", FILTER_SANITIZE_STRING);

if(!empty($nome_leitor)){

    $pesq_leitor = "%" . $nome_leitor . "%";

    $query_leitor= "SELECT , nome_leitor FROM leitores WHERE nome_leitor LIKE :nome_leitor LIMIT 20";
    $result_leitor = $conn->prepare($query_leitor);
    $result_leitor->bindParam(':nome_leitor', $pesq_leitor);
    $result_leitor->execute();

    if(($result_leitor) and ($result_leitor->rowCount() != 0)){
        while($row_leitor = $result_leitor->fetch(PDO::FETCH_ASSOC)){
            $dado[] = [
                'cod_leitor' => $row_leitor['cod_leitor'],
                'nome_leitor' => $row_leitor['nome_leitor']
            ];
        }


        $retorna = ['erro' => false, 'dado' => $dado];
        //$retorna = ['erro' => true, 'msg' => "Erro: Nenhum usuário encontrado!"];
    }else{
        $retorna = ['erro' => true, 'msg' => "Erro: Nenhum leitor encontrado!"];
    }
    
}else{
    $retorna = ['erro' => true, 'msg' => "Erro: Nenhum leitor encontrado!"];
}

echo json_encode($retorna);