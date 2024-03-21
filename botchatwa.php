<?php
require_once 'vendor/autoload.php'; // Load Twilio PHP Library

use Twilio\Rest\Client;

// Kredensial API Twilio Anda
$twilio_sid = 'xxxxx';
$twilio_token = 'xxxxx';

// Inisialisasi objek Twilio Client
$twilio = new Client($twilio_sid, $twilio_token);

// Nomor WhatsApp pengirim (harus terdaftar di Twilio)
$from = 'whatsapp:+628xxxxxxxx';

// Nomor WhatsApp penerima
$to = 'whatsapp:+628xxxxxxxxxxx';

// Pesan yang ingin dikirim
$message = 'Halo! Ini adalah pesan otomatis dari bot WhatsApp.';

try {
    // Kirim pesan WhatsApp
    $twilio->messages->create(
        $to,
        array(
            'from' => $from,
            'body' => $message
        )
    );

    echo "Hello, World.";
} catch (Exception $e) {
    echo "Gagal mengirim pesan: " . $e->getMessage();
}
?>
