<!-- $user = [
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
        // a) retornar o nome dos documentos que o user tem
        // EX: [ "cpf", "rg"]

        // b) retornar o numero dos documentos que o user tem
        // EX: [ 0000000, 11111111]

        // c) dividir a idade pela metar e salvar no mesmo array -->

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