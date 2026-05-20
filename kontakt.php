<?php 
$ime = $priimek = $email = $telefon = $sporocilo = "";

$errors = [
    "ime" => "",
    "priimek" => "",
    "email" => "",
    "telefon" => "",
    "sporocilo" => ""
];

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ime
    if(empty($_POST["ime"])) {
        $errors["ime"] = "Ime je obvezno!";
    } else {
        $ime = test_input($_POST["ime"]);

        if (!preg_match("/^[a-zA-ZčćšžđČĆŠŽĐ]+$/",$ime)) {
            $errors["ime"] = "Dovoljeni so samo znaki od a do z ter šumniki!";
        }
    }

    // priimek
    if(empty($_POST["priimek"])) {
        $errors["priimek"] = "Priimek je obvezen!";
    } else {
        $priimek = test_input($_POST["priimek"]);

        if (!preg_match("/^[a-zA-ZčćšžđČĆŠŽĐ]+$/",$priimek)) {
            $errors["priimek"] = "Dovoljeni so samo znaki od a do z ter šumniki!";
        }
    }

    // email
    if(empty($_POST["email"])) {
        $errors["email"] = "Email je obvezen!";
    } else {
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Neustrezna oblika email naslova!";
        }
    }

    // telefon
    if(empty($_POST["telefon"])) {
        $errors["telefon"] = "Telefon je obvezen!";
    } else {
        $telefon = test_input($_POST["telefon"]);

        if (!preg_match("/^0\d{8}$/",$telefon)) {
            $errors["telefon"] = "Dovoljene so samo mobilne telefonske številke!";
        }
    }

    // sporocilo
    if(empty($_POST["sporocilo"])) {
        $errors["sporocilo"] = "Sporočilo je obvezno!";
    } else { 
        $sporocilo = test_input($_POST["sporocilo"]);
    }

    if(empty($errors["ime"]) && empty($errors["priimek"]) && empty($errors["email"]) && empty($errors["telefon"]) && empty($errors["sporocilo"])) {
        $success = true;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="sl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kontaktni obrazec</title>

        <link rel="stylesheet" href="/lib/bootstrap-5.3.8-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/stil.css">

    </head>

    <body>
        <?php include("header.php"); ?>
        

        <?php 
        function printError($key, $error) {
            switch($key) {
                case "ime":
                    echo "<li><b>Ime:</b> " . $error . "</li>";
                    break;
                case "priimek":
                    echo "<li><b>Priimek:</b> " . $error . "</li>";
                    break;
                case "email":
                    echo "<li><b>Email:</b> " . $error . "</li>";
                    break;
                case "telefon":
                    echo "<li><b>Telefon:</b> " . $error . "</li>";
                    break;
                case "sporocilo":
                    echo "<li><b>Sporočilo:</b> " . $error . "</li>";
                    break;
            }
        }
        ?>

        <div class="container-fluid background-title-section shadow mb-4">
            <div class="d-flex">
                <h1 class="justify-content-center align-items-center animatedHeading text-center">
                    Kontaktni obrazec
                </h1>
            </div>
        </div>
        
        <div class="container mb-4 rounded shadow gap-3">
            <div class="row p-3">

                <?php if($success && empty($errors["ime"]) && empty($errors["priimek"]) && empty($errors["email"]) && empty($errors["telefon"]) && empty($errors["sporocilo"])) {?>
                    <div class="alert alert-success">
                        Vaše povpraševanje je uspešno poslano.
                    </div>
                <?php } elseif (!$success && (!empty($errors["ime"]) || !empty($errors["priimek"]) || !empty($errors["email"]) || !empty($errors["telefon"]) || !empty($errors["sporocilo"]))) { ?>
                    <div class="alert alert-danger">
                        Obrazec ni bil uspešno poslan. Prosimo, popravite naslednje napake:
                        <ul>
                            <?php 
                                foreach($errors as $key => $error) {
                                    if(!empty($error)) {
                                    printError($key, $error);
                                    }
                                }
                            ?>  
                        </ul>   
                    </div>
                <?php } ?>

                <?php 
                function setValidInvalidClass($input, $errors, $key) {
                    if (!empty($errors[$key])) {
                        return "is-invalid";
                    } else if (!empty($input) && empty($errors[$key])) {
                        return "is-valid";
                    } else {
                        return "";
                    }
                }
                ?>
            
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="my-3" novalidate>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            
                            <!-- IME -->
                            <label for="ime" class="form-label">Ime:</label>
                            <input type="text" id="ime" name="ime" class="form-control <?php echo setValidInvalidClass($ime, $errors, "ime"); ?>"
                            value="<?php echo $ime; ?>"
                            pattern="^[a-zA-ZčćšžđČĆŠŽĐ]+$"
                            required
                            oninvalid="this.setCustomValidity('Ime lahko vsebuje samo črke!')"
                            oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-12 col-sm-6">

                            <!-- PRIIMEK -->
                            <label for="priimek" class="form-label">Priimek:</label>
                            <input type="text" id="priimek" name="priimek" class="form-control <?php echo setValidInvalidClass($priimek, $errors, "priimek"); ?>" 
                            value="<?php echo $priimek; ?>"
                            pattern="^[a-zA-ZčćšžđČĆŠŽĐ]+$"
                            required 
                            oninvalid="this.setCustomValidity('Priimek lahko vsebuje samo črke!')"
                            oninput="this.setCustomValidity('')">
                        </div>
                    </div>

                    <div class="row mt-sm-3">
                        <div class="col-12 col-sm-6">

                            <!-- EMAIL -->
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" id="email" name="email" class="form-control <?php echo setValidInvalidClass($email, $errors, "email"); ?>" 
                            value="<?php echo $email; ?>"
                            required
                            oninvalid="this.setCustomValidity('Vnesite pravilen email (npr. ime@domena.si)!')"
                            oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-12 col-sm-6">

                            <!-- TELEFON -->
                            <label for="telefon" class="form-label">Telefon:</label>
                            <input type="tel" id="telefon" name="telefon" class="form-control <?php echo setValidInvalidClass($telefon, $errors, "telefon"); ?>" 
                            value="<?php echo $telefon; ?>"
                            pattern="^[0-9]+$"
                            required
                            oninvalid="this.setCustomValidity('Telefon lahko vsebuje samo številke!')"
                            oninput="this.setCustomValidity('')">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">

                            <!-- SPOROČILO -->
                            <label for="sporocilo" class="form-label">Sporočilo:</label>
                            <textarea id="sporocilo" name="sporocilo" class="form-control <?php echo setValidInvalidClass($sporocilo, $errors, "sporocilo"); ?>" 
                            rows="5" cols="30" 
                            required
                            oninvalid="this.setCustomValidity('Sporočilo je obvezno!')"
                            oninput="this.setCustomValidity('')"><?php echo $sporocilo; ?></textarea>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12 col-sm-2">
                            
                            <!-- BUTTON -->
                            <button type="submit" class="btn btn-success w-100">Pošlji</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <?php include("footer.php"); ?>

        <script src="/lib/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/skripta.js"></script>
    </body>

</html>



