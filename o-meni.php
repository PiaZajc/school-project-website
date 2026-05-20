<!DOCTYPE html>
<html lang="sl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>O meni</title>

        <link rel="stylesheet" href="/lib/bootstrap-5.3.8-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/stil.css">

    </head>
    <body class="min-vh-100">
        <?php include 'header.php'; ?>

        <!-- MAIN vsebina -->

        <div class="container-fluid background-title-section shadow mb-4">
            <div class="d-flex">
                <h1 class="justify-content-center align-items-center animatedHeading">
                    O meni
                </h1>
            </div>
        </div>

        <!-- MAIN SECTION -->
        <div class="container-fluid">

            <div class="row">

                <!-- SLIKA -->
                <div class="col-12 col-lg-5 o-meni-img-position">
                    <img src="img/portrait.png" alt="Portret" class="scaleAnimation o-meni-img portrait rounded">
                    <img src="img/sticky-note-background-blue.png" alt="Background image" class="scaleAnimation o-meni-img background">
                </div>

                <!-- TEKST -->
                <div class="col-12 col-lg-7 d-flex flex-column justify-content-center align-items-center text-center oMeniText">
                    <p class="m-0 p-1"><b>Ime in priimek:</b> Pia Zajc</p>
                    <p class="m-0 p-1"><b>Študentska številka:</b> x</p>
                    <p class="m-4 p-3 border rounded shadow">
                        Sem študentka 2. letnika FIŠ, smer Informatika v sodobni družbi.
                        Že nekaj let me navdušujejo notranje rastline.
                        Zanje rada skrbim in jih opazujem, saj se s tem učim, kako jim zagotoviti najboljše pogoje za rast.
                        Poleg tega me zanima tudi informatika, kjer rada pridobivam nova znanja in razvijam svoje veščine.
                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="container my-5">
            <div class="row">
                <div class="col-12 long-text text-center">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptatem aspernatur odio ratione, dolore minima. Ut culpa velit molestias deserunt.
                    </p>
                        <img src="img/leafPlantBlack40px.png" alt="" class="scaleAnimation py-5">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi placeat nostrum velit similique unde eos.
                    </p>

                    <img src="img/leafPlantBlack40px.png" alt="" class="scaleAnimation py-5">

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolores porro tenetur, velit impedit veniam quos eos aliquam sint id quia culpa quae dolorem mollitia, iusto ullam fugiat, excepturi harum? Ipsa rerum cum pariatur ratione nemo soluta. Assumenda, quaerat ullam!
                    </p>

                    <img src="img/leafPlantBlack40px.png" alt="" class="scaleAnimation py-5">

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore deserunt blanditiis provident cumque, quasi ut ad necessitatibus nisi natus tempora quisquam autem iure magnam? Delectus laboriosam cumque corporis quia eum ex beatae minima quo dolorem. Aspernatur.
                    </p>

                    <img src="img/leafPlantBlack40px.png" alt="" class="scaleAnimation py-5">

                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga id cum magnam nobis ratione officia!
                    </p>
                </div>
            </div>
        </div>


        <!-- SECTION 1 -->
        <div class="container shadow my-5 mb-4 rounded">

            <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column">
                
                    <!-- NASLOV 1 -->
                    <div class="mb-2 py-1 background-sub-title-section d-flex align-items-center justify-content-start">
                        <h3 class="m-0 text-sub-title-section animatedHeading">
                            Moje najljubše povezave
                        </h3>
                    </div>

                    <!-- LINKI -->
                    <ul class="my-list">
                        <li>
                            <a href="https://www.plantlovers.eu/en-int/blogs/care-and-maintenance" target="_blank">Plant Lovers EU</a>
                            <p class="font-size-small">
                                Plantlovers je belgijska spletna trgovina z rastlinami in blog, ki izvira iz petih generacij vrtnarjev, osredotočenih na zagotavljanje visokokakovostnih, trajnostno gojenih sobnih rastlin, zlasti redkih tropskih, s praktičnimi nasveti za nego za ljubitelje notranjih rastlin.
                            </p>
                        </li>
                        <li>
                            <a href="https://www.joshwcomeau.com/" target="_blank">
                                Spletna stran spletnega razvijalca Josha W. Comeauja
                            </a>
                            <p class="font-size-small">
                                Josh W. Comeau je razvijalec front-enda in pedagog, znan po ustvarjanju interaktivnih, poglobljenih vadnic o Reactu, CSS-ju in animaciji. Njegova spletna stran joshwcomeau.com deluje kot središče za te vadnice in vrhunske izobraževalne tečaje, osredotočene na samozavestno izgradnjo veščin front-enda.
                            </p>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@coding2go" target="_blank">Coding2GO</a>
                            <p class="font-size-small">
                                Coding2GO je izobraževalna platforma za spletni razvoj, ki sta jo ustvarila fullstack razvijalca Fabian in Pavel, osredotočena na praktično, začetnikom prijazno poučevanje HTML, CSS in JavaScript. 
                            </p>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@veritasium" target="_blank">Veritasium</a>
                            <p class="font-size-small">
                                Veritasium je YouTube kanal za znanost, ki ga je ustvaril dr. Derek Muller. Kanal ponuja poglobljene dokumentarce, poskuse in intervjuje, ki raziskujejo fiziko in inženirstvo.
                            </p>
                        </li>
                        <li>
                            <a href="https://www.sydneyplantguy.com/" target="_blank">Sydney Plant Guy</a>
                            <p class="font-size-small">
                                Sydney Plant Guy je influencer, specializiran za gojenje velikih, redkih aroidnih in tropskih vzpenjavk v majhnih stanovanjskih prostorih, pri čemer uporablja posebne tehnike. Predstavlja eksotične vrste, kot je Monstera esqueleto, s poudarkom na umetniškem oblikovanju in potrpežljivi, poskusni negi rastlin.
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-lg-6 -flex flex-column gap-2">

                    <!-- NASLOV 2 -->
                    <div class="mb-2 py-1 background-sub-title-section d-flex align-items-center justify-content-start">
                        <h3 class="m-0 text-sub-title-section animatedHeading">
                            Moji najljubši filmi
                        </h3>
                    </div>

                    <!-- LINKI + TEKST -->
                    <ul class="my-list">
                        <li>
                            <a href="https://en.wikipedia.org/wiki/Forrest_Gump" target="_blank">Forrest Gump</a>
                            <p class="font-size-small">
                                Forrest Gump je ameriški komično-dramski film iz leta 1994, ki ga je režiral Robert Zemeckis. Film je priredba romana Winstona Grooma iz leta 1986, scenarij pa je napisal Eric Roth
                            </p>
                        </li>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/Joker_(2019_film)" target="_blank">Joker</a>
                            <p class="font-size-small">
                                Joker (2019) je psihološki triler, ki služi kot zgodba o nastanku ikoničnega zlobneža iz stripov DC Comics, osredotoča pa se na Arthurja Flecka, duševno bolnega, obubožanega stand-up komika in zabavnega klovna.
                            </p>
                        </li>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/The_Batman_(film)" target="_blank">Batman</a>
                            <p class="font-size-small">
                                Film Batman (2022) spremlja Brucea Wayna v njegovem drugem letu kot neomajnega nočnega vigilanta v Gotham Cityju. Raziskuje vrsto sadističnih umorov, ki jih je zagrešil Ugankar, čigar tarča so koruptivne elitne osebnosti.
                            </p>
                        </li>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/Inside_Out" target="_blank">Vrvež v moji glavi (Inside Out)</a>
                            <p class="font-size-small">
                                Inside Out (2015) je animirani film studia Pixar, ki raziskuje um 11-letne Riley med njeno težko selitvijo v San Francisco. Čustva – veselje, žalost, strah, jeza in gnus – nadzorujejo njena dejanja iz centrale, a ko se veselje in žalost izgubita v njenem umu, nastane kaos. Film poudarja, da so vsa čustva, vključno z žalostjo, bistvena za čustveno zrelost in rast.
                            </p>
                        </li>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/The_Platform_2" target="_blank">The Platform 2</a>
                            <p class="font-size-small">
                                The Platform 2 (2024) je predzgodba, postavljena v 333-nadstropni navpični zapor, ki se osredotoča na žensko, ki se prebija skozi brutalni, samoupravni sistem, kjer "lojalisti" nasilno uveljavljajo racioniranje hrane.
                            </p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- TABELA 2 -->
        <div class="mx-3 mx-sm-5 my-5">
        <table class="my-4 text-center table table-striped table-hover shadow">
            <caption class="caption-top">
                <h3>
                    Moje znanje in veščine
                </h3>
            </caption>
            <thead class="p-3 text-center">
                <tr>
                    <th>Področje</th>
                    <th>Tehnologija / orodje</th>
                    <th>Raven znanja</th>
                    <th>Znanje</th>
                    <th>Posebnosti</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td data-label="Področje">Frontend</td>
                    <td data-label="Tehnologija / orodje">HTML in CSS</td>
                    <td data-label="Raven znanje">Osnovno</td>
                    <td data-label="Znanje">Postavitev strani, prilagajanje spletne strani različnim velikostim ekrana</td>
                    <td data-label="Posebnosti">Razumem strukturo HTML in CSS</td>
                </tr>
                <tr>
                    <td data-label="Področje">Frontend</td>
                    <td data-label="Tehnologija / orodje">Bootstrap</td>
                    <td data-label="Raven znanje">Osnovno</td>
                    <td data-label="Znanje">Utility classi, grid sistem</td>
                    <td data-label="Posebnosti">/</td>
                </tr>
                <tr>
                    <td data-label="Področje">Razvoj aplikacij</td>
                    <td data-label="Tehnologija / orodje">Java</td>
                    <td data-label="Raven znanje">Osnovno - srednje</td>
                    <td data-label="Znanje">OOP, razredi, metode</td>
                    <td data-label="Posebnosti">Študijski projekt - program za upravljanje zaloge v trgovini z rastlinami</td>
                </tr>
                <tr>
                    <td data-label="Področje">Frontend</td>
                    <td data-label="Tehnologija / orodje">JavaScript</td>
                    <td data-label="Raven znanje">Osnovno</td>
                    <td data-label="Znanje">Eventi, Document Object Model (DOM) manipulacija</td>
                    <td data-label="Posebnosti">Manjši projekti (to-do app)</td>
                </tr>
                <tr>
                    <td data-label="Področje">Podatkovne baze</td>
                    <td data-label="Tehnologija / orodje">MySQL</td>
                    <td data-label="Raven znanje">Osnovno</td>
                    <td data-label="Znanje">Ustvarjanje in povezovanje tabel, osnovne SQL poizvedbe</td>
                    <td data-label="Posebnosti">Delo z relacijskimi bazami podatkov</td>
                </tr>
                <tr>
                    <td data-label="Področje">3D modeliranje</td>
                    <td data-label="Tehnologija / orodje">Cinema 4D</td>
                    <td data-label="Raven znanje">Osnovno - srednje</td>
                    <td data-label="Znanje">Modeliranje, osnovni renderji</td>
                    <td data-label="Posebnosti">Študijski projekti</td>
                </tr>
            </tbody>
        </table>
        </div>
        

        <?php include 'footer.php'; ?>

        <script src="/lib/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/skripta.js" defer></script>
    </body>
</html>