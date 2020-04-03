<?php

function student_code()
{
    return rand(100, 999);
}


function input_date()
{
    return date("Y-m-d H:i:s");
}


function student_mark()
{
    return rand(1, 10);
}



echo student_code() . student_mark();
echo input_date();

$students = [
    "5a" => [
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Agnė",
            "last_name" => "Macaitė",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ],
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Marta",
            "last_name" => "Batytė",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ],
    ],
    "5b" => [
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Jonas",
            "last_name" => "Kubas",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ],
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Ona",
            "last_name" => "Ogintaitė",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ]
    ],
    "6a" => [
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Titas",
            "last_name" => "Titinas",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ],
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Mantas",
            "last_name" => "Macas",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ]
    ],
    "6b" => [
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Jolita",
            "last_name" => "Juknaitytė",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ],
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Marius",
            "last_name" => "Dirmantas",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ]
    ],
    "7a" => [
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Vilija",
            "last_name" => "Vitytė",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ],
        [
            "code" => student_code(),
            "date" => input_date(),
            "first_name" => "Julius",
            "last_name" => "Karpis",
            "marks" => [
                "math" => student_mark(),
                "it" => student_mark(),
                "english" => student_mark()
            ]
        ]
    ]
];