<?php
    require __DIR__ . '/src/app.php';
?>

<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Dizaino studija - dizaino ir reklamos paslaugos">
        <meta name="keywords" content="dizainas, reklama, grafinis dizainas, stendai, antspaudai, spauda">
        <title>Dizaino studija</title>
        <link rel="icon" href="images/logo.png" type='image/x-icon'/>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/media_styles.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    
<!--    Privacy policy pop out-->
<!--    cookies -->

    <body>
        
<!--        NAVIGACIJA-->
        
        <header>
            <nav>
                <div class="burger">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo.svg" alt="Dizaineriai">
                        </a>
                    </div>
                    <label for="toggle">&#9776;</label>
                </div>
                <input type="checkbox" id="toggle"/>
                <ul id="nav-links">
                    <li><a href="#about">Apie</a></li>
                    <li><a href="#services">Paslaugos</a></li>
                    <li><a href="#blog">Blogas</a></li>
                    <li><a href="#contact">Kontaktai</a></li>
                </ul>
            </nav>
        </header>
        
        
        <main>
            
<!--    PARALLAX    -->
            
            <section>
                <div id="parallax">
                    <div id="parallax-text">
                        <h1>Dizaino studija</h1>
                    </div>
                </div>
            </section>
            
<!--            APIE MUS -->
            
            <article id="about">
                <h2>Apie mus</h2>
                <p>
                    1994 m. įkurta T. Danilevičiaus dizaino studija - viena pirmųjų įmonių, pradėjusi reklamos verslą Žemaitijoje. 2006 m. dizaino studijai suteiktas socialinės įmonės statusas. 2016 m. Įmonė perorganizuota į UAB „Kontrus“. Rinkoje sėkmingai gyvuoja jau 22 metus. Šiuo metu įmonėje dirba 10 darbuotojų, iš jų 6 asmenys, turintys negalią. Klientams galime pasiūlyti atskirus kūrybinius ir kompleksinius sprendimus - nuo idėjos sukūrimo iki galutinio jos realizavimo.
                </p>
            </article>
            
<!--            PASIEKIMAI -->
            <section id="result">
                <div id="result-wrapper">
                    <div class="result-box">
                        <i class="fas fa-briefcase"></i>
                        <div class="result-text">
                            <div>500</div>
                            <div>Pabaigtų <br> projektų</div>
                        </div>
                    </div>
                    <div class="result-box">
                        <i class="far fa-clock"></i>
                        <div class="result-text">
                            <div>25</div> 
                            <div>Metai <br>patirties</div>
                        </div>
                    </div>
                    <div class="result-box">
                        <i class="far fa-sun"></i>
                        <div class="result-text">
                            <div>656</div>
                            <div>Pozityvių atsiliepimų</div>
                        </div>
                    </div>
                    <div class="result-box">
                        <i class="far fa-heart"></i>
                        <div class="result-text">
                            <div>700</div>
                            <div>Patenkintų klientų</div>
                        </div>
                    </div>
                </div>
            </section>
            
<!--            PASLAUGOS-->
            
            <section>
                <div id="services">
                    <h2>Paslaugos</h2>
                    <p>
                        Mums svarbiausia kokybiškai ištransliuota Jūsų verslo žinutė, geriausiai Jūsų vertybes atspindintis dizainas bei Jūsų pasitenkinimas įgyvendita vizija.
                    </p>
                    
                    <div id="service-wrapper">

                        <div class="service">
                            <div class="graphic">
                                <a href="pages/services.php">
                                    <div class="service-text">
                                        <h3>Grafinis dizainas</h3>
                                        <h4>Logotipai | Spauda</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="service">
                            <div class="print">
                                <a href="pages/services.php">
                                    <div class="service-text">
                                        <h3>Tekstilės spauda</h3>
                                        <h4>Šilkografija | Termo | Transferinė</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="service">
                            <div class="exhibition">
                                <a href="pages/services.php">
                                    <div class="service-text">
                                        <h3>Ekspozicijos</h3>
                                        <h4>Apipavidalinimas | Spauda</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="service">
                            <div class="boards">
                                <a href="pages/services.php">
                                    <div class="service-text">
                                        <h3>Stendai</h3>
                                        <h4>Aiškinamoji atributika</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="service">
                            <div class="commercial">
                                <a href="pages/services.php">
                                    <div class="service-text">
                                        <h3>Reklama</h3>
                                        <h4>Lauko | Vizuolinė | <br> Transporto</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="service">
                            <div class="stamps">
                                <a href="pages/services.php">
                                    <div class="service-text">
                                        <h3>Antspaudai</h3>
                                        <h4>Gamyba | Priežiūra</h4>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    
                    <div class="more">
                        <a href="pages/services.php"><h3>Daugiau</h3></a>
                    </div>
                </div>
            </section>
            
<!--            BLOGAS-->
            <section id="blog">
                <h2>Mūsų naujienos</h2>
                <div id="carousel">
                    <div class="post in-left">
                        <div class="post-tag pirmas">
                            <div><span>Grafinis dizainas</span></div>
                        </div>
                        <div class="post-text">
                            <a href="pages/blog.php"><h3>Pirmas postas</h3></a>
                            <p>
                                Grafinis dizainas – vizualinio turinio pateikimas įvairiomis meninėmis ir techninėmis priemonėmis.
                            </p>
                        </div>
                    </div>
                    
                    <div class="post in-left">
                        <div class="post-tag antras">
                            <div><span>Reklama</span></div>
                        </div>
                        <div class="post-text">
                            <a href="pages/blog.php"><h3>Antras postas</h3></a>
                            <p>
                                Reklama – informacija, skirta paveikti potencialius vartotojus, tikslinę grupę.
                            </p>
                        </div>
                    </div>
                    
                    <div class="post in-left">
                        <div class="post-tag trecias">
                            <div><span>Parodos</span></div>
                        </div>
                        <div class="post-text">
                            <a href="pages/blog.php"><h3>Trečias postas</h3></a>
                            <p>
                                Paroda - nuolatinis arba laikinas viešasis renginys, kurio metu publikai pateikiami ekspozicijos objektai (eksponatai).
                            </p>
                        </div>
                    </div>
                    
                    <div class="post in-left">
                        <div class="post-tag ketvirtas">
                            <div><span>Šilkografija</span></div>
                        </div>
                        <div class="post-text">
                            <a href="pages/blog.php"><h3>Ketvirtas postas</h3></a>
                            <p>
                                Šilkografija – vienas seniausių žinomų trafaretinės spaudos būdų, pradėtas naudoti Kinijoje ir siejamas su šilko atsiradimu.
                            </p>
                        </div>
                    </div>
                    
                    <div class="post in-left">
                        <div class="post-tag penktas">
                            <div><span>Reklama</span></div>
                        </div>
                        <div class="post-text">
                            <a href="pages/blog.php"><h3>Penktas postas</h3></a>
                            <p>
                                Reklama – informacija, skirta paveikti potencialius vartotojus, tikslinę grupę atlikti įvairius veiksmus.
                            </p>
                        </div>
                    </div>
                    
                </div>
                    
                <div class="carousel-dots">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
                    <span class="dot" onclick="currentSlide(5)"></span> 
                </div>
            </section>
            
            
<!--            KONTAKTAI-->
            <section id="contact">
                <h2>Susisiekite</h2>
                
                <div class="contact-wrapper">
                    <div class="contact-item">
                        <address class="contact-data">
                            <ul>
                                <li>UAB "Kontrus"</li>
                                <li><i class="fas fa-map-marker"></i>&nbsp; &nbsp;Senamiesčio a. 5, Plungė</li>
                                <li><a href="mailto:reklama@dizaineriai.com"><i class="fas fa-envelope"></i>&nbsp; &nbsp;reklama@dizaineriai.com</a></li>
                                <li><a href="tel:+370-448-70060"><i class="fas fa-phone"></i>&nbsp; &nbsp;+370 448 70060</a></li>
                            </ul>
                        </address>
                        <div class="social-media social-media-desktop">
                            <div class="social-item">
                                <a href="https://www.facebook.com/dizaineriai" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            </div>
                            <div class="social-item">
                                <a href="https://www.instagram.com/districtsoundmusic/?fbclid=IwAR0SNpR-88rSFJ_bjKBpwUQKSe0UBlvsRTf6qhPhi5oxqqnwUaMywyKpwBw" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="social-item">
                                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <form id="contact-form" method="post" action="index.php">
                            <div>
                                <input type="text" name="name" class="form-control" placeholder="Vardas" required>
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control" placeholder="El. paštas" required>
                            </div>
                            <div>
                                <textarea name="message" class="form-control" placeholder="Jūsų žinutė" required></textarea>
                            </div>
                            <button type="submit" name="submit" id="submit" class=" form-control">SIŲSTI</button>
                        </form>
                      </div>
                    
                    <div class="social-media social-media-mobile">
                            <div class="social-item">
                                <a href="https://www.facebook.com/dizaineriai" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            </div>
                            <div class="social-item">
                                <a href="https://www.instagram.com/districtsoundmusic/?fbclid=IwAR0SNpR-88rSFJ_bjKBpwUQKSe0UBlvsRTf6qhPhi5oxqqnwUaMywyKpwBw" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="social-item">
                                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
            </section>
        </main>
        
        
        <footer>
            <div class="footer">
                <div>&copy; <?php echo date("Y"); ?> All Rights Reserved.</div>
                <div>Designed by <a href="https://airinapine.com" target="_blank">a Pine <i class="fas fa-air-freshener"></i></a></div>
            </div>
        </footer>
        
<!--        JAVASCRIPT -->
        
        <script src="JS/script.js"></script>
        
    </body>
</html>
