<?php

$date = date("Y/m/d");

$urlRenungan = "https://alkitab.mobi/2/renungan/roc/$date/";
$urlQuote = "https://rehobot.org/category/quote/";

/* ambil renungan */

$html = file_get_contents($urlRenungan);

preg_match('/<article.*?>(.*?)<\/article>/s',$html,$match);

$renungan = $match[1] ?? "Renungan tidak ditemukan";

/* ambil quotes */

$htmlQuote = file_get_contents($urlQuote);

preg_match_all('/<blockquote.*?>(.*?)<\/blockquote>/s',$htmlQuote,$q);

$quotes = $q[1] ?? [];

$index = date("z") % count($quotes);

$quoteHariIni = $quotes[$index] ?? "";

echo json_encode([
"renungan"=>$renungan,
"quote"=>$quoteHariIni
]);
