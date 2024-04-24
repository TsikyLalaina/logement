<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="modify.css">
<title>Modification de Terrain</title>
</head>
<body>

<div class="container">
    <h2>Modification de Terrain</h2>
    <form id="terrain-form">
        <div class="form-group">
            <label for="num_terrain">Numéro de Terrain:</label>
            <input type="text" id="num_terrain" name="num_terrain" required>
        </div>
        <div class="form-group">
            <label for="sup_terrain">Superficie du Terrain:</label>
            <input type="number" id="sup_terrain" name="sup_terrain" step="0.01" required>
        </div>
        <button type="submit" class="btn">Modifier</button>
    </form>
</div>

</body>
</html>
