<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="modify.css">
<title>Modification de Paiement</title>
</head>
<body>

<div class="container">
    <h2>Modification de Paiement</h2>
    <form id="payment-form">
        <div class="form-group">
            <label for="code_paiement">Code de Paiement:</label>
            <select id="code_paiement" name="code_paiement" required>
                <option value="">Sélectionner un code de paiement</option>
                <option value="code1">Code 1</option>
                <option value="code2">Code 2</option>
                <option value="code3">Code 3</option>
                <!-- Ajoutez d'autres options selon vos besoins -->
            </select>
        </div>
        <div class="form-group">
            <label for="montant">Montant:</label>
            <input type="number" id="montant" name="montant" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="num_ligne">Numéro de Ligne:</label>
            <input type="text" id="num_ligne" name="num_ligne" required>
        </div>
        <button type="submit" class="btn">Modifier</button>
    </form>
</div>

</body>
</html>
