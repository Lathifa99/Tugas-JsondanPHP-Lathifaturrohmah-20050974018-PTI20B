<?php
//memuat halaman json
$data= file_get_contents("http://localhost/json-mahasiswa/datamahasiswa.json");

//menampilkan hasil
//echo $data;
$parsdata = json_decode($data);

//cek perubahan json to array
//echo "<pre>"; print_r ($parsdata); echo"</pro>";

//tampilkan data spesifik
//echo $parsdata[0]->nama;

?>

<html>

<head>
    <title>Biodata Mahasiswa TI</title>
</head>

<body>
    <label>
        Nama Mahasiswa :
    </label>
    <?php echo $parsdata[0]->nama; ?>
    <br />
    <label>
        NIM :
    </label>
    <?php echo $parsdata[0]->nim; ?>
    <br />
    <label>
        No Telepon :
    </label>
    <?php echo $parsdata[0]->no_telepon; ?>
    </br>
    Hobi :
    <br />
    <?php

        foreach ($parsdata[0]->hobi as $hobi){
            echo "$hobi";
            echo"<br/>";
        }
        ?>
    </>
</body>

</html>