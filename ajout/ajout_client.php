<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Client</title>
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

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
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
        <h2>Ajout Client</h2>
        <form action="traitement.php" method="post">
            <div class="form-group">
                <label for="code_cli">Code Client:</label>
                <input type="text" id="code_cli" name="code_cli" required>
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
                <input type="text" id="adres_cli" name="adres_cli" required></input>
            </div>
            <button type="submit">Ajouter Client</button>
        </form>
    </div>
</body>
</html>
