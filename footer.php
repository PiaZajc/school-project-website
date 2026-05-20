
    <footer class="bg-dark shadow mt-auto">

        <div class="container py-4">
            <div class="row align-items-center text-center text-md-start">

                <!-- LOGO -->
                <div class="col-md-4 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                    <a href="index.php">
                        <img src="img/plantLogoWhite.png" alt="Logo" class="d-block" style="width: 100px; height: 100px">
                    </a>
                </div>

                <!-- COPYRIGHT -->
                <div class="main-text-footer col-md-4 d-flex justify-content-center align-items-center mb-4 mb-md-0">Copyright &copy; 2026</div>

                <!-- LINKI -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="main-text-footer heading-footer pb-2 text-center">navigacija</div>

                    <ul class="list-unstyled mb-0 p-0 d-flex flex-column align-items-center">
                        <?php foreach ($links as $element): ?>
                            <li>
                                <a href="<?= $element['link'] ?>" 
                                    class="links-footer text-decoration-none align-items-center"> 
                                    <?= $element['title'] ?> </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    
                </div>
            </div>
        </div>
    </footer>