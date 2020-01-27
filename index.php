<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemple d'AJAX avec Fetch</title>
</head>

<body>
    <form id="formTables" action="">
        <h2>Sélectionner les tables de multiplication</h2>
        <input type="checkbox" name="tables[]" value="1"><label>1</label>
        <input type="checkbox" name="tables[]" value="2"><label>2</label>
        <input type="checkbox" name="tables[]" value="3"><label>3</label>
        <input type="checkbox" name="tables[]" value="4"><label>4</label>
        <input type="checkbox" name="tables[]" value="5"><label>5</label>
        <input type="checkbox" name="tables[]" value="6"><label>6</label>
        <input type="checkbox" name="tables[]" value="7"><label>7</label>
        <input type="checkbox" name="tables[]" value="8"><label>8</label>
        <input type="checkbox" name="tables[]" value="9"><label>9</label>
        <input type="submit" name="submit" value="Envoyer">
    </form>
    <div id="result" style="display: flex">
    </div>
    <script src="app.js"></script>
</body>

</html>