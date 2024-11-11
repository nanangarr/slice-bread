<?php
function encrypt_aes256_gcm($plaintext, $key)
{
    // Pastikan kunci 256 bit (32 bytes)
    $key = substr(hash('sha256', $key, true), 0, 32);

    // Buat IV dengan panjang 12 byte (96 bit) untuk GCM
    $iv = openssl_random_pseudo_bytes(12);

    // Enkripsi
    $ciphertext = openssl_encrypt($plaintext, 'aes-256-gcm', $key, OPENSSL_RAW_DATA, $iv, $tag);

    // Gabungkan IV, tag, dan ciphertext menjadi satu
    return base64_encode($iv . $tag . $ciphertext);
}

function decrypt_aes256_gcm($encryptedData, $key)
{
    // Pastikan kunci 256 bit (32 bytes)
    $key = substr(hash('sha256', $key, true), 0, 32);

    // Decode data
    $data = base64_decode($encryptedData);

    // Pisahkan IV, tag, dan ciphertext
    $iv = substr($data, 0, 12);
    $tag = substr($data, 12, 16);
    $ciphertext = substr($data, 28);

    // Dekripsi
    return openssl_decrypt($ciphertext, 'aes-256-gcm', $key, OPENSSL_RAW_DATA, $iv, $tag);
}

// Contoh penggunaan
$plaintext = "Ini adalah teks yang akan dienkripsi.";
$key = "KunciRahasiaAnda";

// Enkripsi
$encrypted = encrypt_aes256_gcm($plaintext, $key);
echo "Hasil Enkripsi: " . $encrypted . PHP_EOL;

// Dekripsi
$decrypted = decrypt_aes256_gcm($encrypted, $key);
echo "Hasil Dekripsi: " . $decrypted . PHP_EOL;
?>
