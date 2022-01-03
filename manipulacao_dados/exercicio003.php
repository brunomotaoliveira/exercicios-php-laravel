<!-- $list_user = [
            [
                "id" => 1,
                "name" => "Gabriel",
            ],
            [
                "id" => 2,
                "name" => "Bruno",
            ]
        ];

        $pedidos = [
            [
                "id_user" => 1, 
                "name"  => "Pão de queijo",
                "valor" =>  100
            ],
            [
                "id_user" => 1, 
                "name"  => "cafe com leite",
                "valor" =>  200
            ],
            [
                "id_user" => 2, 
                "name"  => "Pão de queijo",
                "valor" =>  100
            ],
            [
                "id_user" => 2, 
                "name"  => "Pão doce",
                "valor" =>  100
            ],
            [
                "id_user" => 2, 
                "name"  => "Suco",
                "valor" =>  100
            ],
        ];

        // a) pege todos os pedidos do Cliente "Gabriel"
        // EX:
        //  [
        //    [
        //        "id_user" => 1, 
        //        "name"  => "Pão de queijo",
        //        "valor" =>  100
        //    ],
        //    [
        //        "id_user" => 1, 
        //        "name"  => "cafe com leite",
        //        "valor" =>  200
        //    ]
        //  ]

        // B) pegar todos os pedidos do "Bruno

        // C) mostre o total de cada cliente
        // ["Gabriel" => 300, "Bruno" => 300] -->
<?php
        //Exercicio 3
$valoresBruno = [];
$valoresGabriel = [];

foreach($pedidos as $pedido) {
    
    if($pedido["id_user"] == 1) {
        
        array_push($valoresGabriel, ["valor"=>$pedido["valor"], "id_user"=>$pedido["id_user"], "name"=>$pedido["name"]]);
        print_r(json_encode($pedido));
    }
    if($pedido["id_user"] == 2) {
        array_push($valoresBruno, ["valor"=>$pedido["valor"], "id_user"=>$pedido["id_user"], "name"=>$pedido["name"]]);
        print_r(json_encode($pedido));
    }
    echo '<br>';

}

print_r(["Gabriel"=>array_sum(array_column($valoresGabriel, 'valor'))]);
echo '<br>';
print_r(["Bruno"=>array_sum(array_column($valoresBruno, 'valor'))]);

?>