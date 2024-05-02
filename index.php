<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
</head>
<body>
    <form action="paragraph.php" method="POST">
        <div>
            <label for="censured-word">Parola da censurare</label>
            <input id="censured-word" type="text" name="word-forbidden">
        </div>
        <div>
            <label for="text-area">Parola da censurare</label>
            <textarea id="text-area" name="paragraph" cols="50" rows="20"></textarea>
        </div>
        <div>
            <button>Invia il paragrafo</button>
        </div>
    </form>
</body>
</html>