<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="ajout.css">
<title>Ajout de Paiement</title>
</head>
<body>

<div class="container">
    <h2>Ajout de Paiement</h2>
    <form id="payment-form">
        <div class="form-group">
            <label for="code_paiement">Code de Paiement:</label>
            <input type="text" id="code_paiement" name="code_paiement" required>
        </div>
        <div class="form-group">
            <label for="montant">Montant:</label>
            <input type="number" id="montant" name="montant" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="num_ligne">Numéro de Ligne:</label>
            <input type="text" id="num_ligne" name="num_ligne" required>
        </div>
        <button type="submit" class="btn">Soumettre</button>
    </form>
</div>

</body>
</html>
