<?php
    $userParagraph = $_POST['paragraph'];
    $wordForbidden = $_POST['word-forbidden'];
    $lengthString = strlen($userParagraph);
    $censuredWord = str_replace($wordForbidden, '***', $userParagraph);
    $censoredStringLength = strlen($censuredWord);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph</title>
</head>
<body>
    <h2>Explicit content</h2>
    <p><?php echo $userParagraph ?></p>
    <div>Numero di parole: <?php echo $lengthString ?></div>

    <h2>Censored</h2>
    <p><?php echo $censuredWord ?></p>
     <div>Numero di parole: <?php echo $censoredStringLength ?></div>
</body>
</html>