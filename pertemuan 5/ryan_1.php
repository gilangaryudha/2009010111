<?php
$json = '{
    "nama": "XYZ Budi",
    "domisili" : "marelan",
    "usia" : 19
    "wni" : true
    "hobi" : [
        "main game", "tidur", "telat kuliah"
        ]
    }';

    $mahasiswa = json_decode($json);

    echo "nama {$mahasiswa->nama} <br>";
    echo "domisili: {$mahasiswa->domisili} <br>";

    echo "hobi: " . implode(",",$mahasiswa->hobi);