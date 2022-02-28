<?php

$film = [

    new Film([
        "title" => "Via col Vento",
        "originalTitle" => "Gone with the Wind", 
        "year" => "1939", 
        "minutes" => "238",
        "poster" => "https://image.tmdb.org/t/p/w342/lNz2Ow0wGCAvzckW7EOjE03KcYv.jpg",
        "genres" => ['drammatico', 'guerra', 'sentimentale', 'storico'],
        "actors" => [

            new Attore([
                "name" => "Clark",
                "surname" => "Gable", 
                "birthday" => "01/02/1901", 
                "deathday" => "16/11/1960",
                "gender" => "male"
            ]),
            new Attore([
                "name" => "Vivien",
                "surname" => "Leigh",
                "asKnowsAs" => "Vivian Mary Hartley",
                "birthday" => " 05/11/1913", 
                "deathday" => "08/07/1967",
                "gender" => "male"
            ]),  
        ],
    ]),

    new Film([
        "title" => "Forrest Gump",
        "originalTitle" => "Forrest Gump", 
        "year" => "1994", 
        "minutes" => "142", 
        "genres" => ['commedia','drammatico','guerra' ],
        "poster" => "https://image.tmdb.org/t/p/w342/saHP97rTPS5eLmrLQEcANmKrsFl.jpg",
        "actors" => [

            new Attore([
                "name" => "Tom",
                "surname" => "Hanks", 
                "birthday" => "09/07/1956", 
                "gender" => "male"
            ]),
            new Attore([
                "name" => "Robin",
                "surname" => "Wright",
                "birthday" => "08/04/1966",
                "gender" => "female"
            ]),  
        ],
    ]),

    new Film([
        "title" => "Matrix Resurrections",
        "originalTitle" => "The Matrix Resurrections", 
        "year" => "2021", 
        "minutes" => "148",
        "poster" => "https://image.tmdb.org/t/p/w342/8c4a8kE7PizaGQQnditMmI1xbRp.jpg",
        "genres" => ['azione','fantascienza'],
        "actors" => [

            new Attore([
                "name" => "Keanu",
                "surname" => "Reeves", 
                "birthday" => "02/09/1964", 
                "gender" => "male"
            ]),
            new Attore([
                "name" => "Carrie-Anne",
                "surname" => "Moss",
                "birthday" => "21/08/1967",
                "gender" => "female"
            ]),
            new Attore([
                "name" => "Yahya",
                "surname" => "Abdul-Mateen II",
                "birthday" => "15/07/1987",
                "gender" => "male"
            ]), 
        ],
    ])
];

$sale = [

    new Sala("1", 174, 0),
    new Sala("2", 174, 0),
    new Sala("3", 140, 1),
    new Sala("4", 140, 1),
    new Sala("5", 140, 1),
    new SalaImmersiva("1I", 120, -1, 1, 0, 0),
    new SalaImmersiva("2I", 120, -1, 1, 1, 0),
];


$spettacoli = [

    new Spettacolo($films[2], $sale[5], "10/01/2022 19:00"),
    new Spettacolo($films[2], $sale[6], "10/01/2022 19:00"),
    new Spettacolo($films[2], $sale[5], "10/01/2022 21:00"),
    new Spettacolo($films[2], $sale[6], "10/01/2022 21:00"),
    new Spettacolo($films[2], $sale[5], "11/01/2022 17:00"),
    new Spettacolo($films[2], $sale[6], "11/01/2022 17:00")
];






?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="">
    </head>

    <body>
        

    </body>
</html>