<?php
// Ustawienie pliku, który przechowuje liczbę pobrań
$file = "download_counter.txt";

// Jeśli plik nie istnieje, tworzymy go
if (!file_exists($file)) {
    file_put_contents($file, "0");
}

// Odczytujemy aktualną liczbę pobrań
$downloads = (int)file_get_contents($file);

// Zwiększamy liczbę pobrań
$downloads++;

// Zapisujemy zaktualizowaną liczbę pobrań do pliku
file_put_contents($file, $downloads);

// Zwracamy liczbę pobrań
echo $downloads;
?>
