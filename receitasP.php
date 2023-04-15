<?php 

include_once './conexao.php';

$dados_requisicao = $_REQUEST;

$query_qnt_usuarios = "SELECT COUNT(ID_item) as qtn_itens FROM receitas";


$result_qnt_itens = $conn->prepare($query_qnt_usuarios);

$result_qnt_itens->execute();
$row_qnt_itens = $result_qnt_itens->fetch(PDO::FETCH_ASSOC);
//var_dump($row_qnt_itens);

$query_itens = "SELECT nome_item, metadata, componente_quant,teste,horas FROM receitas ";

if(!empty($dados_requisicao['search']['value'])){
    $query_itens .= " WHERE nome_item LIKE :nome_item ";
    $query_itens .= " OR metadata LIKE :metadata ";
    $query_itens .= " OR teste LIKE :teste";
}


$result_itens = $conn->prepare($query_itens);


if(!empty($dados_requisicao['search']['value'])){
    $valor_pesc = "%" .$dados_requisicao['search']['value'] ."%";
    $result_itens->bindParam(':nome_item',$valor_pesc, PDO::PARAM_STR);
    $result_itens->bindParam(':metadata',$valor_pesc, PDO::PARAM_STR);
    $result_itens->bindParam(':teste',$valor_pesc,PDO::PARAM_STR);
}

$result_itens->execute();

while($row_item = $result_itens->Fetch(PDO::FETCH_ASSOC)){
    //var_dump($row_item);
    extract($row_item);

    $registro = [];
    $registro[] = $nome_item;
    $registro[] = $metadata;
    $registro[] = $componente_quant;
    $registro[] = $teste;
    $registro[] = $horas;

    $dados[] = $registro;
    

}
//var_dump($dados);

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal"=> intval($row_qnt_itens['qtn_itens']),
    "recordsFiltered"=> intval($row_qnt_itens['qtn_itens']),
    "data" => $dados
];

//var_dump($resultado);

echo json_encode($resultado);
?>

