<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Menyimpan data ke file log.txt
    $logFile = fopen("log.txt", "a");  // Buka file log.txt dalam mode append (tambah data)
    $logData = "Nama: $nama\nEmail: $email\nPesan: $pesan\n\n";
    fwrite($logFile, $logData);  // Tulis data ke file
    fclose($logFile);  // Tutup file setelah penulisan

    // Tentukan alamat email tujuan
    $to = "ariyantowelly5@gmail.com";
    $subject = "Pesan Kontak dari $nama";
    $message = "Nama: $nama\nEmail: $email\nPesan:\n$pesan";
    $headers = "From: $email";
    echo $to."</br>";
    echo $subject."</br>";
    echo $message."</br>";
    echo $headers."</br>";
    // Mengirim email
    
    
}
?>