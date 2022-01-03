        <!-- $item = [
            "name"  => "Pão de queijo",
            "valor" =>  100
        ]; -->

        <!-- // a) retornar o nome do item
        // b) retornar o valor do item
        // c) adicionar data de vencimento no item -->

        <?php 

$item= [
    "name" => "Pão de Queijo",
    "valor" => 100
];

    echo $item["name"], '<br>';
    echo $item["valor"];
    echo '<br>';
    var_dump($item);
    echo '<br>';

    array_push($item, ["dataVencimento"=>"12/21"]); // -> forma 1
    //$item["dataVencimento"] = "12/21";  // forma 2
    echo '<br>';
    var_dump($item);
    echo '<br>';
    var_dump(json_encode($item));
?>