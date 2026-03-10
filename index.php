<?php
$date = date("Y/m/d");
$url = "https://alkitab.mobi/2/renungan/roc/$date/";

$html = file_get_contents($url);

preg_match('/<article.*?>(.*?)<\/article>/s', $html, $matches);

$content = $matches[1] ?? "Renungan belum tersedia.";
?>

<!DOCTYPE html>
<html>
<head>
<title>Renungan Harian</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Renungan Harian</h1>

<div class="renungan">
<?php echo $content; ?>
</div>

<a href="quotes.php" class="btn">Quotes Rohani</a>

</div>

</body>
</html>
