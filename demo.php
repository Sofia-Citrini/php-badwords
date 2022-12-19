<?php

$paragraph = $_POST['paragraph'];
$word = $_POST['word'];

$censuredParagraph = str_replace($word, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div><?php echo $paragraph ?></div>
    <div><?php echo strlen($paragraph) ?></div>

    <div><?php echo $censuredParagraph ?></div>
    <div><?php echo strlen($censuredParagraph) ?></div>
</body>
</html>

