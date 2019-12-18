
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YibinOuyang</title>
</head>

<body>
    <div id="topbar">
        <img id="slide_button" src="image/menu.svg" alt="nav_button">

    </div>
    <nav id="mainNav">
        <h2 class="hidden">mainNav</h2>
        <ul>
            <li><a href="#mainheader">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        
        </ul>
    </nav>

    <header id="mainheader">
        <img src="image/myself.jpeg" alt="">
        <h2>hi, I'm </h2>
        <div class="greenbar"></div>
        <h3>YibinOuyang</h3>
        <div class="yellowbar"></div>
        <p>A FRONT-END DEVELOPER</p>
        <img src="image/cyrene.jpeg" alt="">

    </header>

    <section class="part1">
        <div class="greybar"></div>
        <img src="image/logo2.svg" alt="">
        <p>I am a student at Fanshawe Collage study IDP3
            and will graduate next April.
            I want to be a web developer in the future. </p>
        </div>

    </section>


    <section id="about">

        <h3>About Me</h3>
        <p>Past Projects</p>
        <div class="greybar2"></div>

        <div id="pastwork">
            <div id="pastwork1">
                <a href="traa.html"><img src="image/work1.jpeg" alt=""></a>
                <a href="music.html"><img src="image/work2.jpeg" alt=""></a>
                <a href="wine.html"><img src="image/work3.jpeg" alt=""></a>
                
            </div>
            <div id="pastwork2">
                <a href="poster.html"><img src="image/work4.jpeg" alt=""></a>
                
                <a href="teambio.html"><img src="image/work5.jpeg" alt=""></a>
                <a href="logo.html"><img src="image/work6.jpeg" alt=""></div>
</a>
                
        </div>

    </section>

    <section id="contact">

        <h2>Contact Me</h2>
        <div class="greybar3"></div>
        <div id="contacttable">
        <div class="part4">
        <video width="320" height="240" controls>
        <source src="image/protfolio_video.mp4" type="video/mp4"> 

        </div>
        <div id="formcon">
            <form id="ContactForm" action="form.php" method="post"></form>
            <label>Name: (required)</label>
            <input type="text" required id="Name" name="fullName" size="40" placeholder="Enter your name">

            <label>Phone Num: (require)</label>
            <input type="phone" required id="Phone" size="40" placeholder="Enter your Phone">

            <label>Feedback:</label>
            <textarea name="comments" id="Comments" required cols="40" rows="6"></textarea>
            <input id="Submit" type="Submit" value="Submit">
        </div></div>
    </section>

    <section id="photograph">
        <h2>photograph works in Montreal</h2>
        <div class="bluebar"></div>
        <img src="image/photo2.jpeg" alt="">
        <img src="image/photo1.jpeg" alt="">
    </section>

    <footer id="footer">
        <div class="socialMedia">
            <h2 class="hidden">Social Media</h2>
            <ul id="iconNav">
                <li id="facebook">
                    <a href="http://www.facebook.com">
                        <img src="image/facebook-2.svg" alt="">
                    </a>
                </li>
                <li id="twitter">
                    <a href="http://www.instagram.com">
                        <img src="image/instagram-2.svg" alt="">
                    </a>
                </li>
                <li id="youtube">
                    <a href="https://www.youtube.com/?hl=zh-cn">
                        <img src="image/youtube.svg" alt="">
                    </a>
                </li>
                <li id="instagram">
                    <a href="https://www.linkedin.com/?hl=zh-cn">
                        <img src="image/linkedin.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>

        <div id="copyRight">
            <p>@copyright 2019 YibinOuyang</p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>