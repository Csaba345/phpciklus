<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Űrlap feldolgozás</title>
</head>
<body>
    <form action="szamitas.php" method="post">
        <label for="v">
            v folyadékáram sebessége:
        </label>
        <input type="number" name="sebesseg" id="v" min = 0 value=0>
        <label for="A">
            A keresztmetszet(m^2):
        </label>
        <input type="number" name="keresztmetszet" id="A" min = 0 value=0>
        <input type="submit" value="Küldés" name="kuldes">
    </form>
</body>
</html>