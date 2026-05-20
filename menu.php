<?php
    $current_active_path = pathinfo($_SERVER["SCRIPT_NAME"], PATHINFO_BASENAME);
    
    // funkcija za preveranje aktivne poti
    function activeMenu($path, $currentPath) {
        return ($path === $currentPath) ? "active" : "";
    }

    $links = [
        ["link" => "index.php", "title" => "Domov"],
        ["link" => "opravila.php", "title" => "Opravila"],
        ["link" => "o-meni.php", "title" => "O meni"],
        ["link" => "kontakt.php", "title" => "Kontakt"]
    ];
?>