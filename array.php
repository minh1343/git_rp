<?php 

$champs = [
    "5" => [
        "Baron Nashor",
        "Ryze",
        "Volibear",
        "Ziggs"
    ],
    "4" => [
        "Renekton",
        "Yone",
        "Veigar",
        "Yunara"
    ],
    "3" => [
        "Draven",
        "Mundo",
        "Leblance",
        "Sejuani",
        "Vayne"
    ],
    "2" => [
        "Yasuo",
        "Ashe",
        "Bard",
        "Trymdamer",
        "Sion"
    ],
    "1" => [
        "Sona",
        "Apelios",
        "Blitcrank",
        "Shen",
        "Lulu",
        "Jhin"
    ]
    
];


// var_dump($champs);


// Loop array

// foreach($champs as $champ){
//     var_dump($champ);
// }


// Destructuring


// [$champs_5, $champs_4, $champs_3, $champs_2, $champs_1] = $champs; doesn't work
 


// var_dump($champs_3);

['5' => $champs_5] = $champs;
var_dump($champs_5);