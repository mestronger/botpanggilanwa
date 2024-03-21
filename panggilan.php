<?php
$whatsapp_api_endpoint = 'https://api.whatsapp.com/send';
$phone_number = '628xxxxxxxxxx'; // Nomor telepon penerima dengan kode negara
$message = 'Halo! Ini adalah panggilan WhatsApp otomatis.';

// Membuat URL untuk panggilan WhatsApp
$whatsapp_url = $whatsapp_api_endpoint . '?phone=' . urlencode($phone_number) . '&text=' . urlencode($message);

// Mengarahkan pengguna ke URL panggilan WhatsApp
header('Location: https://wa.me/628xxxxxxx' . $whatsapp_url);
exit;
?>
