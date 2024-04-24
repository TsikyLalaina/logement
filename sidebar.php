<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.1-web/css/all.css"/>
    <link rel="stylesheet" href="sidebar.css">
    <title>Dashboard</title>
</head>
<body>
        <nav class="sidebar" id="Sidebar">
            <div class="container">
                <div class="Pict"><img src="" alt="profile pic"></div>
                <h3 class="w3-wide"><b>Tsiky</b></h3>
            </div>
            <div class="w3-pad">
                <div class="line"></div>
                <a href="#dashboard" class="w3-button" ><p>Dashboard</p><t>></t></a>
                <div class="line"></div>
                <a href="#profile" class="w3-button" ><p>Profile</p><t>></t></a>
                <div class="line"></div>
                <a href="#" class="w3-button w3-dropdown-toggle" data-target="dropdown1"><p>Housing</p><t>></t></a>
                <div class="line"></div>
                <div id="dropdown1" class="dropdown">
                    <a href="ajout/ajout_log.php"  class="w3-button&" >Ajouter</a>
                    <a href="modify/modify_log.php" class="w3-button&">modifier</a>
                </div>
                <a href="#" class="w3-button w3-dropdown-toggle" data-target="dropdown2"><p>Client</p><t>></t></a>
                <div class="line"></div>
                <div id="dropdown2" class="dropdown">
                    <a href="ajout/ajout_client.php"  class="w3-button&" >Ajouter</a>
                    <a href="modify/modify_client.php" class="w3-button&">modifier</a>
                </div>
                <a href="#" class="w3-button w3-dropdown-toggle" data-target="dropdown3"><p>Payment</p><t>></t></a>
                <div class="line"></div>
                <div id="dropdown3" class="dropdown">
                    <a href="ajout/ajout_pay.php"  class="w3-button&" >Ajouter</a>
                    <a href="modify/modify_pay.php" class="w3-button&">modifier</a>
                </div>
                <a href="#" class="w3-button w3-dropdown-toggle" data-target="dropdown4"><p>Agency</p><t>></t></a>
                <div class="line"></div>
                <div id="dropdown4" class="dropdown">
                    <a href="ajout/ajout_ag.php"  class="w3-button&" >Ajouter</a>
                    <a href="modify/modify_ag.php" class="w3-button&">modifier</a>
                </div>
                <a href="#" class="w3-button w3-dropdown-toggle" data-target="dropdown5"><p>Area</p><t>></t></a>
                <div class="line"></div>
                <div id="dropdown5" class="dropdown">
                    <a href="ajout/ajout_pro.php"  class="w3-button&" >Ajouter</a>
                    <a href="modify/modify_pro.php" class="w3-button&">modifier</a>
                </div>
                <a href="#" class="w3-button w3-dropdown-toggle" data-target="dropdown6"><p>Land</p><t>></t></a>
                <div class="line"></div>
                <div id="dropdown6" class="dropdown">
                    <a href="ajout/ajout_cite.php"  class="w3-button&" >Ajouter</a>
                    <a href="modify/modify_cite.php" class="w3-button&">modifier</a>
                </div>
                <a href="#" class="w3-button w3-dropdown-toggle" data-target="dropdown7"><p>Sale</p><t>></t></a>
                <div class="line"></div>
                <div id="dropdown7" class="dropdown">
                    <a href="#"  class="w3-button&" >Ajouter</a>
                    <a href="#" class="w3-button&">modifier</a>
                </div>
                <a href="#" class="w3-button w3-dropdown-toggle" data-target="dropdown8"><p>Neiborhood</p><t>></t></a>
                <div class="line"></div>
                <div id="dropdown8" class="dropdown">
                    <a href="#"  class="w3-button&" >Ajouter</a>
                    <a href="#" class="w3-button&">modifier</a>
                </div>
                <a href="#" class="w3-button w3-dropdown-toggle" data-target="dropdown9"><p>Rent</p><t>></t></a>
                <div class="line"></div>
                <div id="dropdown9" class="dropdown">
                    <a href="#"  class="w3-button&" >Ajouter</a>
                    <a href="#" class="w3-button&">modifier</a>
                </div>
            </div>
        </nav>
        <iframe src="dashboard.php" frameborder="0" width="100%" height="100%" id="dashboard"></iframe>
    <script>
        // Fonction pour afficher ou cacher le dropdown lors du clic sur le lien
        var dropdownToggles = document.querySelectorAll('.w3-dropdown-toggle');
        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                var targetId = this.getAttribute('data-target');
                var dropdown = document.getElementById(targetId);
                if (dropdown.style.display === 'block') {
                    dropdown.style.display = 'none';
                } else {
                    dropdown.style.display = 'block';
                }
            });
        });
    </script>
    <script src="assets/aos/aos.js"></script>
</body>
</html>