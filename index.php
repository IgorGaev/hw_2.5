<?php
require_once 'classNews.php';

$jsonBase = json_decode(file_get_contents(__DIR__.'/news_base.json'),true);

$news1 = new News($jsonBase);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
</head>
<body>

<?= $news1->displayNews() ?>

</body>
</html>
