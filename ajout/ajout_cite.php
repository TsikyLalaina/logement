<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="ajout.css">
<title>Ajout de Cité</title>

</head>
<body>

<div class="container">
    <h2>Ajout de Cité</h2>
    <form id="cite-form">
        <div class="form-group">
            <label for="code_cite">Code de Cité:</label>
            <input type="text" id="code_cite" name="code_cite" required>
        </div>
        <div class="form-group">
            <label for="lib_cite">Libellé de Cité:</label>
            <input type="text" id="lib_cite" name="lib_cite" required>
        </div>
        <div class="form-group">
            <label for="code_agc">Code d'Agence:</label>
            <input type="text" id="code_agc" name="code_agc" required>
        </div>
        <button type="submit" class="btn">Ajouter</button>
    </form>
</div>

</body>
</html>
