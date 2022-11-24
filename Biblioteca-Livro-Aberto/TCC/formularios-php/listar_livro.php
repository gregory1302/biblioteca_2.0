<?php
include_once "conexao.php";

$titulo = filter_input(INPUT_GET, "titulo", FILTER_SANITIZE_STRING);

if(!empty($titulo)){

    $pesq_livro = "%" . $titulo . "%";

    $query_livro= "SELECT , titulo FROM livros WHERE titulo LIKE :titulo LIMIT 20";
    $result_livro = $conn->prepare($query_livro);
    $result_livro->bindParam(':titulo', $pesq_livro);
    $result_livro->execute();

    if(($result_livro) and ($result_livro->rowCount() != 0)){
        while($row_livro = $result_livro->fetch(PDO::FETCH_ASSOC)){
            $dado[] = [
                'cod_livro' => $row_livro['cod_livro'],
                'titulo' => $row_livro['titulo']
            ];
        }


        $retorna = ['erro' => false, 'dado' => $dado];
        //$retorna = ['erro' => true, 'msg' => "Erro: Nenhum livro encontrado!"];
    }else{
        $retorna = ['erro' => true, 'msg' => "Erro: Nenhum livro encontrado!"];
    }
    
}else{
    $retorna = ['erro' => true, 'msg' => "Erro: Nenhum livro encontrado!"];
}

echo json_encode($retorna);