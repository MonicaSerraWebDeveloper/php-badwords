<?php
    $userParagraph = $_POST['paragraph'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph</title>
</head>
<body>
    <p><?php echo $userParagraph ?></p>
    <div>Numero di parole: <?php echo strlen($userParagraph) ?></div>
</body>
</html>