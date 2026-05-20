<!DOCTYPE html>
<html lang="sl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Domov</title>

        <link rel="stylesheet" href="/lib/bootstrap-5.3.8-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/stil.css">
    </head>
    <body>
        
        <?php include ("header.php") ?>

        <main>

        <!-- CAROUSEL -->
        <div class="container-fluid p-0 carouselMain">
            <div id="my-carousel" class="carousel slide col-12" data-bs-interval="5000" data-bs-ride="carousel">
            
                <div class="carousel-indicators mb-2" data-bs-theme="dark">
                    <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="5"></button>
                </div>

                <!-- Slideshow -->
                <div class="carousel-inner border border-0 bg-dark">
                    
                    <div class="carousel-item active">
                        <img src="img/1.png" alt="Slika 1" class="d-block w-100">
                    </div>

                    <div class="carousel-item">
                        <img src="img/2.png" alt="Slika 2" class="d-block w-100">
                    </div>

                    <div class="carousel-item">
                        <img src="img/3.png" alt="Slika 3" class="d-block w-100">
                    </div>

                    <div class="carousel-item">
                        <img src="img/4.png" alt="Slika 4" class="d-block w-100">
                    </div>

                    <div class="carousel-item">
                        <img src="img/5.png" alt="Slika 5" class="d-block w-100">
                    </div>

                    <div class="carousel-item">
                        <img src="img/6.png" alt="Slika 6" class="d-block w-100">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#my-carousel" data-bs-slide="prev" data-bs-theme="dark">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#my-carousel" data-bs-slide="next" data-bs-theme="dark">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <div class="container-fluid border border-dark bg-dark shadow-lg">
            <div class="row line-break">
                <div class="col-12">
                </div>
            </div>
        </div>


        <!-- HERO SECTION -->
        <div class="container-fluid hero-section d-flex align-items-center justify-content-center text-center shadow">

            <img src="img/plant-left.png" class="leaf leaf-left" alt="Plant">
            <img src="img/plants-right2.png" class="leaf leaf-right" alt="Plants">

            <div class="hero-content my-5 justify-content-center align-items-center">
                <h1 class="pb-3 animatedHeading">
                    Zeleni kotiček
                </h1>
                <div class="hero-text">
                    <p>
                        Ustvarite svoj zeleni kotiček in v svoj dom vnesite občutek narave, svežine in miru. Notranje rastline niso le dekoracija, ampak pomemben del zdravega in prijetnega bivalnega okolja.
                    </p>
                    <p>
                        Z ustrezno izbiro rastlin lahko izboljšate kakovost zraka, zmanjšate stres ter ustvarite prostor, kjer se boste počutili bolj sproščeno in povezano z naravo. Ne glede na vaše izkušnje ali čas za nego, obstaja rastlina, ki je prava za vas.
                    </p>
                </div>
            </div>

        </div>


        <!-- HIGHLIHTS 1 -->
        <div class="container my-5">
            <div class="row m-0 gy-4">

                <!-- BOX 1 -->
                <div class="col-12 col-md-6">
                    <div class="rounded p-3 d-flex h-100 box-fixed box-gradient-green">

                        <div class="icon-box">
                            <img src="img/plant.png" alt="Plant icon" class="icons">
                        </div>

                        <div class="text-box d-flex flex-column">

                            <h3>Notranje rastline</h3>

                            <p class="long-text mb-0 text-start">
                                Notranje rastline <b>izboljšujejo kakovost zraka</b>, ustvarjajo prijetno atmosfero in pozitivno vplivajo na počutje v prostoru.
                            </p>

                        </div>

                    </div>
                </div>

                <!-- BOX 2 -->
                <div class="col-12 col-md-6">
                    <div class="rounded p-3 d-flex h-100 box-fixed box-gradient-blue">

                        <div class="icon-box">
                            <img src="img/plant-care.png" alt="Plant care icon" class="icons">
                        </div>

                        <div class="text-box d-flex flex-column">

                            <h3>Nega sobnih rastlin</h3>

                            <p class="long-text mb-0 text-start">
                                Sobne rastline potrebujejo pravilno nego, ki vključuje <b>svetlobo, vodo in hranila</b>. Zelo pomembno je, da spremljamo vlago in vlažnost zemlje.
                            </p>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        
        <!-- SECTION 1 -->
        <div class="container-fluid background-section shadow">
            <div class="d-flex flex-column justify-content-center align-items-center text-center p-2">
                <h2 class="mb-4 animatedHeading">
                    Notranje rastline glede na zahtevnost nege
                </h2>
                <p class="long-text mb-2">
                    Rastline lahko razdelimo glede na zahtevnost nege. Nekatere so zelo enostavne in <b>primerne za začetnike</b>, saj prenesejo manj svetlobe in redko zalivanje. Druge pa zahtevajo več pozornosti, specifične pogoje in so pogosto redkejše ali bolj občutljive vrste, ter so <b>primerne za napredne poznavalce</b>.
                </p>
                <p class="long-text mb-0">
                    V nadaljevanju bosta predstavljeni <b>dve skupini notranjih rastlin</b>, razdeljeni glede na zahtevnost nege, kjer so prikazane njihove glavne značilnosti in osnovne potrebe za uspešno rast.
                </p>
            </div>
        </div>

        <!-- TABELA 1 -->
         <div class="mx-3 mb-5 mx-sm-5 my-5">
        <table class="my-4 text-center table table-striped table-hover shadow">
            <caption class="caption-top">
                <h3>
                    Manj zahtevne rastline
                </h3>
            </caption>
            <thead class="p-3 text-center text-dark">
                <tr>
                    <th>Ime rastline</th>
                    <th>Latinsko ime</th>
                    <th>Svetloba</th>
                    <th>Zalivanje</th>
                    <th>Posebnosti</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td data-label="Ime rastline">Zamija</td>
                    <td data-label="Latinsko ime">Zamioculcas zamiifolia</td>
                    <td data-label="Svetloba">Nizka do srednja</td>
                    <td data-label="Zalivanje">Redko</td>
                    <td data-label="Posebnosti">Zelo odporna, prenaša sušo</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Sanseverija (taščin jezik)</td>
                    <td data-label="Latinsko ime">Sansevieria trifasciata</td>
                    <td data-label="Svetloba">Nizka do močna</td>
                    <td data-label="Zalivanje">Redko</td>
                    <td data-label="Posebnosti">Skoraj neuničljiva, raste zelo počasi</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Pothos</td>
                    <td data-label="Latinsko ime">Epipremnum aureum</td>
                    <td data-label="Svetloba">Srednja</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Hitro rastoča, viseča</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Spatifil (lilija)</td>
                    <td data-label="Latinsko ime">Spathiphyllum</td>
                    <td data-label="Svetloba">Srednja</td>
                    <td data-label="Zalivanje">Pogosto</td>
                    <td data-label="Posebnosti">Opozarja na sušo (listi ovenijo)</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Aloe vera</td>
                    <td data-label="Latinsko ime">Aloe vera</td>
                    <td data-label="Svetloba">Močna</td>
                    <td data-label="Zalivanje">Redko</td>
                    <td data-label="Posebnosti">Zdravilna rastlina</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Čopasta zelenčica</td>
                    <td data-label="Latinsko ime">Chlorophytum comosum</td>
                    <td data-label="Svetloba">Srednja</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Hitro se razmnožuje</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Fikus elastika</td>
                    <td data-label="Latinsko ime">Ficus elastica</td>
                    <td data-label="Svetloba">Srednja do močna</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Veliki sijoči listi</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Aglaonema</td>
                    <td data-label="Latinsko ime">Aglaonema spp.</td>
                    <td data-label="Svetloba">Nizka do srednja</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Barviti listi</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Sukulente (razne)</td>
                    <td data-label="Latinsko ime">Succulentae</td>
                    <td data-label="Svetloba">Močna</td>
                    <td data-label="Zalivanje">Zelo redko</td>
                    <td data-label="Posebnosti">Shranjujejo vodo v listih</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Monstera</td>
                    <td data-label="Latinsko ime">Monstera deliciosa</td>
                    <td data-label="Svetloba">Močna</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Vzpenjalka</td>
                </tr>
            </tbody>
        </table>
        </div>

        <!-- HIGHLIHTS 2 -->
        <div class="container my-5">
            <div class="row m-0 gy-4">

                <div class="col-12 col-lg-4">
                    <div class="rounded p-3 d-flex h-100 box-fixed box-gradient-green">

                        <div class="icon-box">
                            <img src="img/popular.png" alt="Popular icon" class="icons">
                        </div>

                        <div class="text-box d-flex flex-column">

                            <h3>Najbolj priljubljene vrste</h3>
                            <p class="long-text mb-0 text-start">
                                Med najbolj priljubljene sobne rastline sodijo <b>monstere, fikusi, sanseverije in pothosi</b>. Te rastline so znane po svoji odpornosti in enostavni negi. Odlične so za začetnike!
                            </p>

                        </div>

                    </div>
                </div>

                <!-- BOX 2 -->
                <div class="col-12 col-lg-4">
                    <div class="rounded p-3 d-flex h-100 box-fixed box-gradient-blue">

                        <div class="icon-box">
                            <img src="img/advice.png" alt="Advice icon" class="icons">
                        </div>

                        <div class="text-box d-flex flex-column">

                            <h3>Nasveti za začetnike</h3>
                            <p class="long-text mb-0 text-start">
                                Začetniki naj začnejo z nezahtevnimi rastlinami, ki prenesejo različne pogoje. Pomembno je <b>redno zalivanje</b>, <b>dobra drenaža</b> in dovolj <b>naravne svetlobe</b>.
                            </p>

                        </div>

                    </div>
                </div>

                <!-- BOX 3 -->
                <div class="col-12 col-lg-4">
                    <div class="rounded p-3 d-flex h-100 box-fixed box-gradient-yellow">

                        <div class="icon-box">
                            <img src="img/good.png" alt="Advantages icon" class="icons">
                        </div>

                        <div class="text-box d-flex flex-column">

                            <h3>Prednosti rastlin</h3>

                            <p class="long-text mb-0 text-start">
                                Notranje rastline <b>izboljšujejo kakovost zraka</b>, povečujejo vlažnost zraka in <b>zmanjšujejo stres</b>. So odlične za pisarne in domove, kjer želimo bolj naravno okolje.
                            </p>

                        </div>

                    </div>
                </div>

            </div>
        </div> 


        <!-- TABELA 2 -->
        <div class="mx-3 mx-sm-5 my-5">
        <table class="my-4 text-center table table-striped table-hover shadow">
            <caption class="caption-top">
                <h3>
                    Bolj zahtevne rastline
                </h3>
            </caption>
            <thead class="p-3 text-center">
                <tr>
                    <th>Ime rastline</th>
                    <th>Latinsko ime</th>
                    <th>Svetloba</th>
                    <th>Zalivanje</th>
                    <th>Posebnosti</th>
                </tr>
            </thead>

            <tbody class="">
                <tr>
                    <td data-label="Ime rastline">Orhideja</td>
                    <td data-label="Latinsko ime">Phalaenopsis</td>
                    <td data-label="Svetloba">Močna (brez direktnega sonca)</td>
                    <td data-label="Zalivanje">Namakanje</td>
                    <td data-label="Posebnosti">Občutljiva pri negi</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Bonsai</td>
                    <td data-label="Latinsko ime">Različne vrste</td>
                    <td data-label="Svetloba">Močna</td>
                    <td data-label="Zalivanje">Pogosto</td>
                    <td data-label="Posebnosti">Zahteva oblikovanje</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Kalateja</td>
                    <td data-label="Latinsko ime">Calathea spp.</td>
                    <td data-label="Svetloba">Posredna svetloba</td>
                    <td data-label="Zalivanje">Pogosto</td>
                    <td data-label="Posebnosti">Občutljiva na vlago</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Alokazija</td>
                    <td data-label="Latinsko ime">Alocasia spp.</td>
                    <td data-label="Svetloba">Močna, posredna</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Eksotični listi</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Monstera variegata</td>
                    <td data-label="Latinsko ime">Monstera deliciosa variegata</td>
                    <td data-label="Svetloba">Močna</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Beli deli na listih in steblu</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Fikus lirata</td>
                    <td data-label="Latinsko ime">Ficus lyrata</td>
                    <td data-label="Svetloba">Močna</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Občutljiv na spremembe</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Nepentes (mesojedka)</td>
                    <td data-label="Latinsko ime">Nepenthes</td>
                    <td data-label="Svetloba">Močna</td>
                    <td data-label="Zalivanje">Posebno</td>
                    <td data-label="Posebnosti">Lovijo insekte</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Strelicija</td>
                    <td data-label="Latinsko ime">Strelitzia nicolai</td>
                    <td data-label="Svetloba">Močna</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Zraste od 2 do 3 metre v višino</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Maranta</td>
                    <td data-label="Latinsko ime">Maranta leuconeura</td>
                    <td data-label="Svetloba">Posredna</td>
                    <td data-label="Zalivanje">Pogosto</td>
                    <td data-label="Posebnosti">Molilna rastlina</td>
                </tr>
                <tr>
                    <td data-label="Ime rastline">Anturij ali flamingovec</td>
                    <td data-label="Latinsko ime">Anthurium</td>
                    <td data-label="Svetloba">Močna, posredna</td>
                    <td data-label="Zalivanje">Zmerno</td>
                    <td data-label="Posebnosti">Imenujejo ga tudi flamingovec</td>
                </tr>
            </tbody>
        </table>
        </div>

        </main>

        <?php include("footer.php"); ?>

        <script src="/lib/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/skripta.js"></script>
    
    </body>
</html>