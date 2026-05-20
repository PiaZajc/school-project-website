<?php include("menu.php"); ?>

<!-- NAVIGACIJSKA VRSTICA -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">

        <!-- NASLOV -->
        <a class="navbar-brand" href="index.php">
            <img src="img/plantLogoWhite.png" alt="Logo" class="logo">
            Zeleni kotiček</a>

        <!-- NAVBAR -->
        <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <!-- LINKI -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="navbar-nav ms-auto">
                <?php
                    foreach($links as $element) {
                        echo "<a class='nav-link " . activeMenu($element["link"], $current_active_path) . "' href='" . $element["link"] . "'>" . $element["title"] . "</a>";
                    }
                ?>
            </div>
        </div>
    </div>
</nav>