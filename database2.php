<?php
$db = mysqli_connect('localhost', 'root', '', 'driftora');

function select($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function create_akun($data){
 global $db;
 $Nama = $data['nama'];
 $Email = $data['email'];
 $Password = $data['password'];
 $query = "INSERT INTO pendaftaran VALUES (null, '$Nama', '$Email', '$Password')";
 mysqli_query($db, $query);

 return mysqli_affected_rows($db);


}
?>
