
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YibinOuyang</title>
</head>

<body>
    <div id="topbar">
        <img src="image/logo2.svg" alt="">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>

        </ul>
    </div>

    <header id="mainheader">
        <img src="image/ouyang.jpeg" alt="">
        <h2>hi, I'm </h2>
        <div class="greenbar"></div>
        <h3>YibinOuyang</h3>
        <div class="yellowbar"></div>
        <p>A FRONT-END DEVELOPER</p>
        <img src="image/yibin.jpeg" alt="">

    </header>

    <section class="part1">
        <div class="greybar"></div>
        <img src="image/logo2.svg" alt="">
        <p>I am a student at Fanshawe Collage study IDP3
            and will graduate next April.
            I want to be a web developer in the future. </p>
            <h2 class="name"></h2>
            <h3 class="collage"></h3>
            <h4 class="major"></h4>
            <p class="hobbies"></p>
        </div>

    </section>


    <section id="about">

        <h3>About Me</h3>
        <p>Past Projects</p>
        <div class="greybar2"></div>

        <div id="pastwork">
            <div id="pastwork1">
                <img src="image/work1.jpeg" alt="">
                <img src="image/work2.jpeg" alt="">
                <img src="image/work3.jpeg" alt="">
            </div>
            <div id="pastwork2">
                <img src="image/work4.jpeg" alt="">
                <img src="image/work5.jpeg" alt="">
                <img src="image/work6.jpeg" alt=""></div>

        </div>

    </section>

    <section id="contact">

        <h2>Contact Me</h2>
        <div class="greybar3"></div>
        <div id="formcon">
            <form id="ContactForm" action="form.php" method="post"></form>
            <label>Name: (required)</label>
            <input type="text" required id="Name" name="fullName" size="40" placeholder="Enter your name">

            <label>Phone Num: (require)</label>
            <input type="phone" required id="Phone" size="40" placeholder="Enter your Phone">

            <label>Feedback:</label>
            <textarea name="comments" id="Comments" required cols="40" rows="6"></textarea>
            <input id="Submit" type="Submit" value="Submit">
        </div>
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
                        <img src="image/facebook.svg" alt="">
                    </a>
                </li>
                <li id="twitter">
                    <a href="http://www.twitter.com">
                        <img src="image/twitter.svg" alt="">
                    </a>
                </li>
                <li id="instagram">
                    <a href="https://www.instagram.com/?hl=zh-cn">
                        <img src="image/ins.svg" alt="">
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