<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Client</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        select, input[type="text"], textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f9f9f9;
            outline: none;
            transition: border-color 0.3s;
        }

        select:focus, input[type="text"]:focus, textarea:focus {
            border-color: #4CAF50;
        }

        select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>');
            background-repeat: no-repeat;
            background-position: right 15px center;
            cursor: pointer;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Modification Client</h2>
        <form action="traitement_modification_client.php" method="post">
            <div class="form-group">
                <label for="code_cli">Code Client:</label>
                <select id="code_cli" name="code_cli" required>
                    <option value="" disabled selected>Sélectionnez un code client</option>
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                    <!-- Ajoutez d'autres options selon vos besoins -->
                </select>
            </div>
            <div class="form-group">
                <label for="nom_cli">Nom Client:</label>
                <input type="text" id="nom_cli" name="nom_cli" required>
            </div>
            <div class="form-group">
                <label for="lieu_tra_cli">Lieu de travail:</label>
                <input type="text" id="lieu_tra_cli" name="lieu_tra_cli" required>
            </div>
            <div class="form-group">
                <label for="adres_cli">Adresse Client:</label>
                <textarea id="adres_cli" name="adres_cli" required></textarea>
            </div>
            <button type="submit">Modifier Client</button>
        </form>
    </div>
</body>
</html>
