<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajout_log.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.1-web/css/all.css"/>
    <title>Document</title>
</head>
<body>
<div class="container" id="addFormContainer">
        <form  class="form" action="" method="post">
            <h2>+ Ajouer un logement</h2>
            <div class="form-group">
                <input type="text" id="name" name="name" required placeholder="prix de logement">
            </div>
            <div class="form-group">
                <select name="formation_id" required>
                    <option value="" disabled selected>Sélectionnez une code de cite</option>
                </select>
            </div>
            <div class="form-group">
                <select name="formation_id" required>
                    <option value="" disabled selected>Sélectionnez une numero du terrain</option>
                </select>
            </div>
            <div class="form-group">
                <select name="formation_id" required>
                    <option value="" disabled selected>Sélectionnez un code client</option>
                </select>
            </div>
            <div class="btn">
                <button type="submit" id="submit-btn">Ajouter</button>
                <button class="back-btn1"><a href="sidebar.php">Retour</a></button>
            </div>
        </form>
    </div>
</body>
</html>