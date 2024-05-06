<?php 

function connection(){

    $host = "localhost";
    $database = "db_kelas";
    $username = "root";
    $password = "";
    
    return mysqli_connect($host, $username, $password, $database);
}

function siswa(){
    $query = "SELECT * FROM siswa";
    
    $data = mysqli_query(connection(), $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($data)){
        $rows[] = $row;
    }

    return $rows;
}

function kelasMPUtama($mp){
    $query = "SELECT * FROM siswa WHERE id_mp_utama = $mp";

    $data = mysqli_query(connection(), $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($data)){
        $rows[] = $row;
    }

    return $rows;
}

function kelasEskul($ekskul){
    $query = "SELECT * FROM siswa WHERE id_ekskul = $ekskul";

    $data = mysqli_query(connection(), $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($data)){
        $rows[] = $row;
    }

    return $rows;
}
