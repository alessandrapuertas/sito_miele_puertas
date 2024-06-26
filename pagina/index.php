<?php
	session_start();
    if(!isset($_SESSION['username'])){ 
		header('location: ../login.php');
	}
    $username = $_SESSION["username"];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    
    <div class ="bigcontainer clearfix">
        <header class = "header">
            <div class = "header__1">
                <a href="index.php" class ="header__1__copy__logo"><img src="../immagini/bar-counter.png" alt="" class = "img-dim"></a>
                <a href="ordina.php" class ="header__1__copy__logo"><img src="../immagini/delivery-bike.png" alt="" class = "img-dim"></a>
                <a href="logout.php" class ="header__1__copy__logo"><img src="../immagini/logout.png" alt="" class = "img-dim"></a>
                <a href="" class ="header__1__icon-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class = "header__2">
                <ul class = "header__2__menu">
                
                    <li class = "header__2__menu__item"><a href="colazioni.html" >colazioni</a></li>
                    <li class = "header__2__menu__item"><a href="aperitivi.html" >aperitivi</a></li>
                    <li class = "header__2__menu__item"><a href="serate.html" >serate</a></li>
                    <li class = "header__2__menu__item"><a href="prenotazioni.html" >prenota la tua serata</a></li>
                    
    
                </ul>
            </div>
            
        </header>
        <section class = "homecontainer">
            <section class = "container">
            
                <ul class = "container__menu">
                    <li class = "container__menu__item1 ">
                        <a href="colazioni.html" class ="container__menu__item__copy1">
                            colazioni
                        </a>
                        <a href="colazioni.html" class ="container__menu__item__icon1">
                            <img src="../immagini/croissant.png" alt="" class = "img-dim">
                        </a>
                        
                    </li>
                    <li class = "container__menu__item2">
                        <a href="aperitivi.html" class ="container__menu__item__copy2">
                            aperitivi
                        </a>
                        <a href="aperitivi.html" class ="container__menu__item__icon2">
                            <img src="../immagini/cocktail.png" alt="" class = "img-dim">
                        </a>
                        
                    </li>
                    
                    <li class= "container__menu__item3">
                        <a href="serate.html" class ="container__menu__item__copy3">
                            serate
                        </a>
                        <a href="serate.html" class ="container__menu__item__icon3">
                            <img src="../immagini/confetti.png" alt="" class = "img-dim">
                        </a>
                    </li>
                    <li class= "container__menu__item4">
                        <a href="prenotazioni.html" class ="container__menu__item__copy4">
                            prenota la tua serata
                        </a>
                        <a href="prenotazioni.html" class ="container__menu__item__icon4">
                            <img src="../immagini/reservation.png" alt="" class = "img-dim">
                        </a>
                    </li>
        
                </ul>
                
                
        </section>
        
          
        <section class ="container2">
            <div class = "container2__caption">
                <div  class = "container2__caption__copy">
                    <h1 class = "importanttextes">BENVENUTI A SNAP!</h1>
                </div>
            </div>
            
            
        </section>
        
    </div>
    
    <section class = "banners clearfix">
        
        <div class = "banners__2">
            <div class= "banners__2__text">
                <h1 class = "hometextes">chi siamo</h1>
                
                <h2 class = "homepar2">Benvenuti nel cuore della vivace scena urbana, dove l'atmosfera accogliente si fonde con un gusto unico nel nostro nuovo bar. </h2>
                <h2 class = "homepar2"> Che si tratti di una pausa rigenerante durante il giorno o di un momento di divertimento serale, ci impegniamo a offrirvi un servizio impeccabile e un'esperienza indimenticabile.</h2>
                <a class = "bigcontainer2__copy__buttons__button2" href="ordina.php">Scopri il nostro team!</a>
                
            </div>
            
        </div>
        <div class = "banners__1">  
            <img src="../immagini/croissants.jpg" alt="" class = "banners__1__image img-dim2">        
        </div>
    </section>

    <div class = "bigcontainer2">
        <div class = "bigcontainer2__copy">
            <div class = "bigcontainer2__copy__text">
                <h1 class = "hometextes">ordina da casa!</h1>
            </div>
            
            <div class = "bigcontainer2__copy__buttons">
                <ul>
                    <li><a href="https://glovoapp.com/it/it/" class = "bigcontainer2__copy__buttons__button">glovo</a></li>
                    <li><a href="https://www.ubereats.com/it" class = "bigcontainer2__copy__buttons__button">uber eats</a></li>
                    <li><a href="https://www.justeat.it/" class = "bigcontainer2__copy__buttons__button">just eat</a></li>
                </ul>
        </div>
        
            
        
        
        
    </div>
    <section class = "banner clearfix">
        
        <div class = "banner__2">
            <div class= "banner__2__text">
                <h1 class = "hometextes">dove siamo e i nostri orari</h1>
                
                <h2 class = "homepar">da Lunedì a Giovedì, 06:30 - 21:00</h2>
                <h2 class = "homepar">Venerdì e Sabato, 12:30 - 1:00</h2>
                <h2 class = "homepar">Domenica, 12:30 alle 21:00</h2>
                
            </div>
            
        </div>
        <div class = "banner__1">  
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2790.794337878137!2d9.380365376113511!3d45.614776771076855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786b11880582f9f%3A0xe7bb5e621931138f!2sLiceo%20Scientifico%20Statale%20Antonio%20Banfi!5e0!3m2!1sit!2sit!4v1708984089210!5m2!1sit!2sit"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>
    </section>
    <div class = "bigcontainer3">
        <div class = "bigcontainer3__copy">
            <div class = "bigcontainer3__copy__text">
                <h1 class = "hometextes">contattaci:</h1>
            </div>
            
            <div class = "bigcontainer3__copy__buttons">
                <ul>
                    <li><a href="https://www.facebook.com/" class = "bigcontainer3__copy__buttons__button"><img src="../immagini/facebook.png" alt="" class = "img-dim"></a></li>
                    <li><a href="https://www.instagram.com/" class = "bigcontainer3__copy__buttons__button"><img src="../immagini/instagram.png" alt="" class = "img-dim"></a></li>
                    <li><a href="https://wa.me/393393257645//?text=urlencodedtext" class = "bigcontainer3__copy__buttons__button"><img src="../immagini/whatsapp (2).png" alt="" class = "img-dim"></a></li>

                    
                </ul>
        </div>
        
            
        
        
        
    </div>
    
    <footer class="footer">
        <p class ="homepar">Copyright - 2020 Morenoale.it</p>
    </footer>
    
    
    

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>   
    <script>
        
        $(document).ready(function(){
            $(".container__menu__item__icon1").mouseenter(function(e){
                $(".container__menu__item__icon1").addClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy1").addClass('is-shown');
                e.preventDefault();
                
            });
            $(".container__menu__item1").mouseleave(function(e){
                $(".container__menu__item__icon1").removeClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy1").removeClass('is-shown');
                e.preventDefault();
            });
        

        });
        $(document).ready(function(){
            $(".container__menu__item__icon2").mouseenter(function(e){
                $(".container__menu__item__icon2").addClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy2").addClass('is-shown');
                e.preventDefault();
                
            });
            $(".container__menu__item2").mouseleave(function(e){
                $(".container__menu__item__icon2").removeClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy2").removeClass('is-shown');
                e.preventDefault();
            });
        

        });
        $(document).ready(function(){
            $(".container__menu__item__icon3").mouseenter(function(e){
                $(".container__menu__item__icon3").addClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy3").addClass('is-shown');
                e.preventDefault();
                
            });
            $(".container__menu__item3").mouseleave(function(e){
                $(".container__menu__item__icon3").removeClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy3").removeClass('is-shown');
                e.preventDefault();
            });
        

        });
        $(document).ready(function(){
            $(".container__menu__item__icon4").mouseenter(function(e){
                $(".container__menu__item__icon4").addClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy4").addClass('is-shown');
                e.preventDefault();
                
            });
            $(".container__menu__item4").mouseleave(function(e){
                $(".container__menu__item__icon4").removeClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy4").removeClass('is-shown');
                e.preventDefault();
            });
        


        });

        $(document).ready(function(){
            $(".header__1__icon-bar").click(function(e){
                $(".header__2__menu").toggleClass('is-open');
                e.preventDefault();
            });
        });
        
        
    </script>
    
</body>
</html>