<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="modify.css">
<title>Modification d'Agence</title>
</head>
<body>

<div class="container">
    <h2>Modification d'Agence</h2>
    <form id="agency-form">
        <div class="form-group">
            <label for="code_agc">Code d'Agence:</label>
            <select id="code_agc" name="code_agc" required>
                <option value="">Sélectionner un code d'agence</option>
                <option value="agence1">Agence 1</option>
                <option value="agence2">Agence 2</option>
                <option value="agence3">Agence 3</option>
                <!-- Ajoutez d'autres options selon vos besoins -->
            </select>
        </div>
        <div class="form-group">
            <label for="lib_agc">Libellé d'Agence:</label>
            <input type="text" id="lib_agc" name="lib_agc" required>
        </div>
        <div class="form-group">
            <label for="code_pro">Code de Province:</label>
            <input type="text" id="code_pro" name="code_pro" required>
        </div>
        <button type="submit" class="btn">Modifier</button>
    </form>
</div>

</body>
</html>
