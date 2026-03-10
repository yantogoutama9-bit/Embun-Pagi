<?php

$url = "https://rehobot.org/category/quote/";
$html = file_get_contents($url);

preg_match_all('/<blockquote.*?>(.*?)<\/blockquote>/s', $html, $matches);

$quotes = $matches[1] ?? [];

?>

<!DOCTYPE html>
<html>
<head>
<title>Quotes Rohani</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Quotes Rohani</h1>

<?php
foreach($quotes as $q){
echo "<div class='quote'>$q</div>";
}
?>

<a href="index.php" class="btn">Kembali ke Renungan</a>

</div>

</body>
</html>
