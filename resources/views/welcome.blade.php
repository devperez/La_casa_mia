<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css" />
        <title>Mimi's kitchen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li>
                        <a href="#">Locations</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <h1>Mimi's kitchen</h1>
                <img class="insta" src="img/Shape.png" alt="instagram icon" height="20px" />
            </nav>
        </header>
        <div class="section1">
            <div class="img">
                <img class="illustration" src="img/image.png" alt="illustration" />
            </div>
            <div class="text">
                <p>We serve food</p><p>with a purpose .</p>
                <button>EXPLORE OUR MENU</button>
            </div>
        </div>
        <h1 class="welcome">Welcome !</h1>
        <div class="line">
            <img src="img/Line.png">
        </div>
        <div class="description">
            <p>Mimi's Kitchen was born from the idea to offer fresh, locally-sourced meals with no hidden<br /> ingredients. Farm-to-table goodness and a warm atmosphere in the heart of Virginia.</p>
        </div>
        <div class="section2">
            <div class="img2">
                <img class="illustration2" src="img/image5.png" alt="fruits and vegetables" />
            </div>
            <div class="text2">
                <p class="speech">We try to keep our menu as fresh and healthy as possible by using local, seasonal vegetables. At the same time, we avoid using artificial ingredients and additives during our cooking process.</p>
            </div>
        </div>
        <h1 class="welcome">About Mimi's</h1>
        <div class="about">
            <div class="description">
                <img src="img/Group16.png" alt="" />
                <h3>OUR PROMISE</h3>
                <p>We work with local farms to bring you the best ingredients.</p>
            </div>
            <div class="description">
                <img src="img/Group17.png" alt="" />
                <h3>OUR KITCHEN</h3>
                <p>Our kitchen uses organic olive oil only, no soy or peanut oil here!</p>
            </div>
            <div class="description">
                <img src="img/Group18.png" alt="" />
                <h3>OUR INGREDIENTS</h3>
                <p>We're committed to only using organic produce, grass-fed meats and eggs from freerange chickens.</p>
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
            <p class="foodtext">Food is not just fuel. Food is about family, food is about community, food is about identity. And we nourrish all those things when we eat well."<br /> <span class="author">MICHAEL POLLAN</span></p>
        </div>
        <div class="rectangles">
            <img src="img/Rectangle3.png" alt="">
            <img src="img/Rectangle3.1.png" alt="">
            <img src="img/Rectangle3.1.png" alt="">
        </div>
        <div class="section4">
            <img src="img/image51.png" alt="">
            <div class="section4bis">
                <h2>Host your next party with us !</h2>
                <img src="img/Line(1).png" alt="">
                <p class="section4_text">We'd love to host your big day. We offer catering for business meetings, events or parties - small and large. To order catering for your next meeting or event, get started online (catering.mimiskitchen.com) or call us at 571-323-9555.</p>
                <button class="btn">REQUEST A QUOTE</button>
            </div>
        </div>
        <h1 class="welcome">Giving back to the community</h1>
        <div class="line">
            <img src="img/Line.png">
        </div>
        <div class="explain">
            <p>Everything that doesn't get served at the end of the day gets donated to Reston's Cornerstones Kitchen, a non-profit organization working to end hunger and address the root causes of poverty and food insecurity. Visit their site.</p>
        </div>
        <div class="section4">
            <img src="img/image6.png" alt="">
            <div class="section4bis">
                <h2>Where to find us</h2>
                <img src="img/Line(1).png" alt="">
                <p>11150 Sunset Hills Road, Suite 210, Reston, VA 20190</p>
                <p>571-323-9555</p>
                <p>contact@mimiskitchen.com</p>
            </div>
        </div>
        <footer>
            <p>1150 Sunset Hills Road, Suite 210, Reston, VA 20190 * 571-323-9555</p>
            <p>Copyright 2019 Mimi's Kitchen</p>
        </footer>
    </body>
</html>
