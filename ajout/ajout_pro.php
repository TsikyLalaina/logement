<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="ajout.css">
<title>Ajout de Province</title>
</head>
<body>

<div class="container">
    <h2>Ajout de Province</h2>
    <form id="province-form">
        <div class="form-group">
            <label for="code_pro">Code de Province:</label>
            <input type="text" id="code_pro" name="code_pro" required>
        </div>
        <div class="form-group">
            <label for="lib_pro">Libellé de Province:</label>
            <input type="text" id="lib_pro" name="lib_pro" required>
        </div>
        <button type="submit" class="btn">Ajouter</button>
    </form>
</div>

</body>
</html>
