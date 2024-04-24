<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="modify.css">
<title>Modification de Province</title>
</head>
<body>

<div class="container">
    <h2>Modification de Province</h2>
    <form id="province-form">
        <div class="form-group">
            <label for="code_pro">Code de Province:</label>
            <select id="code_pro" name="code_pro" required>
                <option value="">Sélectionner un code de province</option>
                <option value="province1">Province 1</option>
                <option value="province2">Province 2</option>
                <option value="province3">Province 3</option>
                <!-- Ajoutez d'autres options selon vos besoins -->
            </select>
        </div>
        <div class="form-group">
            <label for="lib_pro">Libellé de Province:</label>
            <input type="text" id="lib_pro" name="lib_pro" required>
        </div>
        <button type="submit" class="btn">Modifier</button>
    </form>
</div>

</body>
</html>
