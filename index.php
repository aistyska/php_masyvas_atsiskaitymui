<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP masyvas</title>
</head>
<body>

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
?>

<table>
    <tr>
        <th>Klasė</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Kontrolinių darbų vidurkis</th>
        <th>Duomenų formavimo data</th>
    </tr>

<?php
foreach ($students as $class => $all) {
    foreach ($all as $student) :?>
        <tr>
            <td> <?= $class; ?> </td>
            <td> <?= $student["code"] ?></td>
            <td> <?= mb_strtoupper($student["first_name"]) ?> </td>
            <td> <?= mb_strtoupper($student["last_name"]) ?> </td>
            <td><?= round(array_sum($student["marks"]) / count($student["marks"])) ?> </td>
            <td> <?= $student["date"] ?> </td>
        </tr>
<?php endforeach;
    }?>
</table>
</body>
</html>