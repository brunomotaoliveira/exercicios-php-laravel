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

