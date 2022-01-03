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

$user = [
    "name" => "João",
    "Idade" => 88,
    "Documentos" => [
        [
            "name" => "RG",
            "numero" => "000000000",
        ],
        [
            "name" => "CPF",
            "numero" => "11111111111",
        ]
    ]
];

foreach($user["Documentos"] as $userName) {
        //var_dump($users["name"]);
        echo $userName["name"], '<br>';
}

foreach($user["Documentos"] as $userNumero) {
    //var_dump($users["numero]);
    echo $userNumero["numero"], '<br>';
}

$idadeDividida = $user["Idade"]/2;

array_push($user, ["metadeDaIdade"=>$idadeDividida]);
var_dump(json_encode($user));

?>