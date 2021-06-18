<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css" />
        <title>Mimi's kitchen</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono:wght@700&family=Overpass:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js"></script>
        <script src="js/gsap-member/gsap-member/minified/Draggable.min.js"></script>
        <script src="js/app.js"></script>

    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="#">MENU</a>
                    </li>
                    <li>
                        <a href="#">LOCATIONS</a>
                    </li>
                    <li>
                        <a href="#">CONTACT</a>
                    </li>
                </ul>
                <img class="titletext" src="img/download(1).png" />
                <img class="insta" src="img/Shape.png" alt="instagram icon" />
            </nav>
        </header>
        <div class="section1">
                <img class="illustration" src="img/image.png" alt="illustration" />
            <div class="text">
                <p>We serve food<br />with a purpose .</p>
                <button id="btn">EXPLORE OUR MENU</button>
            </div>
        </div>
        <div class="Welcome">
            <h1 class="welcome">Welcome !</h1>
        </div>
        <div class="line">
            <img src="img/Line.png">
        </div>
        <div class="description">
            <p class="descriptiontext">Mimi's Kitchen was born from the idea to offer fresh, locally-sourced meals with no hidden<br /> ingredients. Farm-to-table goodness and a warm atmosphere in the heart of Virginia.</p>
        </div>
        <div class="section2">
            <div class="img2">
                <img class="illustration2" src="img/image5.png" alt="fruits and vegetables" />
            </div>
            <div class="text2">
                <p class="speech">We try to keep our menu as fresh and healthy as<br /> possible by using local, seasonal vegetables. At the<br /> same time, we avoid using artificial ingredients and<br /> additives during our cooking process.</p>
            </div>
        </div>
        <div class="abouttext" id="reveal1">
            <h1 class="welcome">About Mimi's</h1>
        </div>
        <div class="about">
            <div class="description2" id="reveal1">
                <img src="img/Group16.png" alt="" />
                <h3>OUR PROMISE</h3>
                <p>We work with local farms to bring you<br /> the best ingredients.</p>
            </div>
            <div class="description2" id="reveal1">
                <img src="img/Group17.png" alt="" />
                <h3>OUR KITCHEN</h3>
                <p>Our kitchen uses organic olive oil only,<br /> no soy or peanut oil here!</p>
            </div>
            <div class="description2" id="reveal1">
                <img src="img/Group18.png" alt="" />
                <h3>OUR INGREDIENTS</h3>
                <p>We're committed to only using organic<br /> produce, grass-fed meats and eggs<br /> from freerange chickens.</p>
            </div>
        </div>
        <div class="section3">
            <img src="img/image3.png" width="100%" alt="">
            <button class="explore">EXPLORE OUR MENU</button>                
        </div>
        <div class="quotes">
            <img src="img/download.png" alt="">
        </div>
        <div class="food">
            <p class="foodtext">Food is not just fuel. Food is about<br />family, food is about community, food is<br />about identity. And we nourrish all those<br /> things when we eat well."<br /> <span class="author">MICHAEL POLLAN</span></p>
        </div>
        <div class="rectangles">
            <img src="img/Rectangle3.png" alt="">
            <img src="img/Rectangle3.1.png" alt="">
            <img src="img/Rectangle3.1.png" alt="">
        </div>
        <div class="section4">
            <div class="imgwrapper">
                <img width="100%" src="img/image51.png" alt="">
            </div>
            <div class="textwrapper">
                <div>
                    <p class="section4bis">Host your next party with us !</p>
                    <img src="img/Line(1).png" alt="">  
                    <p class="section4_text">We'd love to host your big day. We offer catering for<br />business meetings, events or parties - small and<br />large. To order catering for your next meeting or<br />event, get started online (<span class="visit">catering.mimiskitchen.com</span>)<br />or call us at 571-323-9555.</p>
                    <button class="btn">REQUEST A QUOTE</button>
                </div>
            </div>
        </div>
        <div class="community">
            <h1 class="welcome">Giving back to the community</h1>
        </div>
        <div class="line2">
            <img src="img/Line.png">
        </div>
        <div class="explain">
            <p class="explaintext">Everything that doesn't get served at the end of the day gets donated to Reston's<br />Cornerstones Kitchen, a non-profit organization working to end hunger and address the root<br />causes of poverty and food insecurity.<span class="visit"> Visit their site</span>.</p>
        </div>
        <div class="section5">
            <img class="section5img" src="img/image6.png" alt="">
            <div class="section5bis">
                <p class="section5bistitle">Where to find us</p>
                <div class="line5">
                    <img src="img/Line(1).png" alt="">
                </div>
                <div class="section5text">
                    <div class="wrapper">
                        <img class="icon" src="img/Vector.png" alt="">
                        <p>11150 Sunset Hills Road, Suite 210,<br />Reston, VA 20190</p>
                    </div>
                    <div class="wrapper">
                        <img class="icon" src="img/Vector(1).png" alt="">
                        <p>571-323-9555</p>
                    </div>
                    <div class="wrapper">
                        <img class="icon" src="img/Group15.png" alt="">
                        <p>contact@mimiskitchen.com</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>1150 Sunset Hills Road, Suite 210, Reston, VA 20190 &bull; 571-323-9555</p>
            <p>Copyright &copy; 2019 Mimi's Kitchen</p>
        </footer>
        
    </body>
</html>