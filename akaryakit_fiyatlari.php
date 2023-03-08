<?php
// cURL ile web sayfasını okuyalım
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.petrolofisi.com.tr/tr-TR/Fiyatlarimiz");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);

// Fiyatları çıkaralım
preg_match('/Benzin \(L\)<\/td>\s+<td>(.*?)<\/td>/', $output, $benzin);
preg_match('/Motorin \(L\)<\/td>\s+<td>(.*?)<\/td>/', $output, $motorin);

// Sonuçları yazdıralım
echo "Benzin fiyatı: " . $benzin[1] . "\n";
echo "Motorin fiyatı: " . $motorin[1] . "\n";
?>
