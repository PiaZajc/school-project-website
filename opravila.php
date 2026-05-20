<!DOCTYPE html>
<html lang="sl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opravila</title>

        <link rel="stylesheet" href="/lib/bootstrap-5.3.8-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/stil.css">
    </head>
    <body>

        <?php include 'header.php'; ?>
        
        <main>
        
        <div class="container-fluid background-title-section shadow mb-4">
            <!-- TEKST -->
            <div class="d-flex">
                <h1 class="justify-content-center align-items-center animatedHeading">
                    Opravila
                </h1>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="col-12 d-flex flex-column align-items-center text-center p-0">
                <p class="px-5 py-3 p-0">
                    Vpiši svoje naloge v spodnje polje in jih dodaj na seznam. Naloge lahko označiš kot opravljene/neopravljene, jih preimenuješ ali izbrišeš.
                </p>
            </div>
        </div>


        <!-- STATS -->
        <div class="container my-1">
            <div class="stats-container col-12 d-flex flex-column align-items-center text-center gap-3">
                    <!-- opravljeni taski -->
                    <div id="progress-number" class="d-flex align-items-center justify-content-center">0 / 0</div>

                    <!-- besedilo -->
                    <p id="progress-text" class="m-0">Začni z enim opravilom.</p>

                    <!-- task bar -->
                    <div id="progress-bar">
                        <div id="progress"></div>
                    </div>
            </div>
        </div>

        <img src="/img/confettiFalling.gif" alt="" id="confetti-gif">


        <!-- OPRAVILA -->
        <div class="wrapper mx-1 mx-sm-5 my-4 rounded shadow d-flex flex-column justify-content-center">

            <!-- TODO INPUT -->
            <form id="form-enter-key" class="form-opravila py-3">
                <input 
                id="todo-input"
                type="text"
                placeholder="Napišite opravilo... "
                autocomplete="off">
                <button id="add-button" type="submit" onClick="addTodo()">
                    <img src="img/addDark.png" alt="delete">
                </button>
            </form>

            <ul id="todo-list" class="py-1 py-sm-2">
                <!-- TASKI -> z JavaScript -->
            </ul>
        </div>

        </main>

        <?php include 'footer.php'; ?>
        
        <script src="/lib/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/skripta.js"></script>
    </body>
</html>