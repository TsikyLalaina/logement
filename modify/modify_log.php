<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajout_log.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.1-web/css/all.css">
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('assets/fontawesome-free-6.5.1-web/svgs/solid/caret-down.svg') no-repeat;
            background-position: right 10px center;
            background-size: 20px;
        }

        .btn {
            text-align: center;
        }

        button {
            padding: 10px 20px;
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

        .back-btn1 a {
            color: #fff;
            text-decoration: none;
        }

        .back-btn1 button {
            background-color: #808080;
            margin-right: 10px;
        }

        .back-btn1 button:hover {
            background-color: #696969;
        }
    </style>
    <title>Modification de logement</title>
</head>
<body>
<div class="container">
    <form class="form" action="" method="post">
        <h2 style="text-align: center;">Modifier un logement</h2>
        <div class="form-group">
            <label for="name">Prix de logement</label>
            <input type="text" id="name" name="name" required placeholder="Prix de logement" value="100000">
        </div>
        <div class="form-group">
            <label for="code_cite">Code de cité</label>
            <select name="code_cite" id="code_cite" required>
                <option value="" disabled selected>Sélectionnez une code de cité</option>
                <option value="C001" selected>C001</option>
                <option value="C002">C002</option>
                <option value="C003">C003</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numero_terrain">Numéro du terrain</label>
            <select name="numero_terrain" id="numero_terrain" required>
                <option value="" disabled selected>Sélectionnez une numéro du terrain</option>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="code_client">Code client</label>
            <select name="code_client" id="code_client" required>
                <option value="" disabled selected>Sélectionnez un code client</option>
                <option value="CL001" selected>CL001</option>
                <option value="CL002">CL002</option>
                <option value="CL003">CL003</option>
            </select>
        </div>
        <div class="btn">
            <button type="submit" id="submit-btn">Enregistrer</button>
            <button class="back-btn1"><a href="sidebar.php">Retour</a></button>
        </div>
    </form>
</div>
</body>
</html>
