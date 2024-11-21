<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id="$id";