<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.1-web/css/all.css"/>
    <link rel="stylesheet" href="profile.css">
    <title>profile</title>
</head>
<body>
    <div class="container" >
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search...">
        </div>
            <table id="tabliste">
                <thead>
                  <tr>
                    <th>Picture</th>
                    <th>Numero du logement</th>
                    <th>Agent</th>
                    <th>Views</th>
                    <th>Previews</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th><input type="checkbox" id="selectAll"></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Lignes de données à remplir -->
                  <tr>
                    <td><img src="assets/img/testimonials-bg.jpg" alt="Client Picture"></td>
                    <td>123</td>
                    <td>tsiky</td>
                    <td>100</td>
                    <td>50</td>
                    <td><a href="#" class="edit"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#" class="delete"><i class="fas fa-trash-alt"></i></a></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td><img src="assets/img/testimonials-bg.jpg" alt="Client Picture"></td>
                    <td>456</td>
                    <td>audric brillant</td>
                    <td>80</td>
                    <td>40</td>
                    <td><a href="#" class="edit"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#" class="delete"><i class="fas fa-trash-alt"></i></a></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td><img src="assets/img/testimonials-bg.jpg" alt="Client Picture"></td>
                    <td>123</td>
                    <td>tsiky</td>
                    <td>100</td>
                    <td>50</td>
                    <td><a href="#" class="edit"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#" class="delete"><i class="fas fa-trash-alt"></i></a></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td><img src="assets/img/testimonials-bg.jpg" alt="Client Picture"></td>
                    <td>456</td>
                    <td>audric brillant</td>
                    <td>80</td>
                    <td>40</td>
                    <td><a href="#" class="edit"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#" class="delete"><i class="fas fa-trash-alt"></i></a></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <!-- Ajoutez plus de lignes selon le nombre de clients -->
                </tbody>
            </table>

    </div>
    <script>
        // Filtrage des résultats de recherche
        document.getElementById("searchInput").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("tabliste");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Changer l'index si nécessaire pour correspondre à la colonne de recherche
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });

        // Cocher tous les cases à cocher si la case à cocher dans l'en-tête est cochée
        document.getElementById("selectAll").addEventListener("change", function() {
            var checkboxes = document.querySelectorAll("tbody input[type='checkbox']");
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = document.getElementById("selectAll").checked;
            });
        });
    </script>


</body>
</html>
