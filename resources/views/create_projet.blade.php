<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouveau projet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        select,
        input[type="color"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .couleur-affichee {
            width: 20px;
            height: 20px;
            display: inline-block;
            margin-left: 10px;
            border: 1px solid #ccc;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Créer un nouveau projet</h2>
        <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" required>
            </div>

            <div>
                <label for="template">Modèle de design:</label>
                <select name="template" id="template" required>
                    <option value="menu_verticale_gauche">Menu verticale gauche</option>
                    <option value="menu_horizontal">Menu horizontal</option>
                    <option value="menu_burger">Menu burger</option>
                </select>
            </div>

            <div>
                <label for="couleur_police">Couleur de la police:</label>
                <input type="color" name="couleur_police" id="couleur_police" required>
                <div class="couleur-affichee" id="affichage_couleur_police"></div>
            </div>

            <div>
                <label for="couleur_background">Couleur de fond:</label>
                <input type="color" name="couleur_background" id="couleur_background" required>
                <div class="couleur-affichee" id="affichage_couleur_background"></div>
            </div>

            <div>
                <label for="couleur_separation">Couleur des séparations:</label>
                <input type="color" name="couleur_separation" id="couleur_separation" required>
                <div class="couleur-affichee" id="affichage_couleur_separation"></div>
            </div>

            <div>
                <label for="image">Image pour le top (contenant le nom du site):</label>
                <input type="file" name="image" id="image" accept="image/*" required>
            </div>

            <div>
                <label for="article">Article:</label>
                <textarea name="article" id="article" rows="5" required></textarea>
            </div>

            <button type="submit">Créer Projet</button>
        </form>
    </div>

    <script>
        document.getElementById('couleur_police').addEventListener('input', function() {
            document.getElementById('affichage_couleur_police').style.backgroundColor = this.value;
        });

        document.getElementById('couleur_background').addEventListener('input', function() {
            document.getElementById('affichage_couleur_background').style.backgroundColor = this.value;
        });

        document.getElementById('couleur_separation').addEventListener('input', function() {
            document.getElementById('affichage_couleur_separation').style.backgroundColor = this.value;
        });
    </script>
</body>
</html>
