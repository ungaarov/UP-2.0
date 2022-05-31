<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <title>{{config('app.name', 'Up')}}</title>
    <style>

        .s3 {
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(../image/img6.jpg);
            background-position: center;
            background-size: cover;
            position: relative;


        }

        nav {
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }

        nav img {
            width: 100px;
        }

        .nav-links {
            flex: 1;
            text-align: right;
        }

        .nav-links ul li {
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }

        .nav-links ul li a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 13px;
        }

        .nav-links ul li::after {
            content: '';
            width: 0;
            height: 2px;
            background: #808080;
            display: block;
            margin: auto;
            transition: 0.5s;
        }

        .nav-links ul li:hover::after{
            width: 100%;
        }

        .text-box {
            width: 90%;
            color: #FFFFFF;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .text-box h1 {
            font-size: 62px;
        }

        .dws {

            top: 70%;
            left: 40%;
            position: absolute;
            transform: translate(-50%, -50%);
        }

        .butt {
            border: 3px solid #218294;
            font-size: 30px;
            color: #218294;
            text-decoration: none;
            text-transform: uppercase;
            width: 250px;
            height: 60px;
            display: block;
            text-align: center;
            line-height: 60px;
            font-family: Arial, sans-serif;
            position: relative;
            transition: .5s;
            overflow: hidden;
        }

        .butt::before,
        .butt::after {
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            background: #218294;
            top: 0;
            left: -100%;
            opacity: .5;
            transition: .3s;
            z-index: -1;
        }

        .butt::after {
            opacity: 1;
            transition-delay: .2s;
        }

        .butt:hover {
            color: #fff;
        }

        .butt:hover::before,
        .butt:hover::after {
            left: 0;
        }

        .dwl {
            top: 70%;
            left: 60%;
            position: absolute;
            transform: translate(-50%, -50%);
        }

        .about {
            width: 88%;
            margin: auto;
            text-align: center;
            padding-top: 100px;
        }

        .course {
            width: 88%;
            margin: auto;
            text-align: center;
            padding-left: 100px;
        }

        h1 {
            font-size: 36px;
            font-weight: 600;
        }

        p {
            color: black;
            font-size: 30px;
            font-weight: 300;
            line-height: 35px;
            padding: 10px;
            font-family: sans-serif;
        }

        .block-container {
            position: relative;
            float: left;
            margin: 30px;
            margin-top: 5%;
            display: flex;
            justify-content: space-between;
        }

        .block-container, .block-container div, .block-container img {
            width: 380px;
            height: 300px;
        }

        .block-container div, .block-container img {
            position: absolute;
            margin-left: 20px;
        }

        .block-container img {
            z-index: 1000;
        }

        .block-front {
            z-index: 1001;
            background-color: black;
            transition: all 0.4s ease-in-out 0s;
            opacity: 0;
            color: black;
            cursor: pointer;
        }

        .block-front:hover {
            opacity: .5;
        }

        .block-front span {
            display: block;
            font-weight: bold;
            padding: 100px 20px;
            text-align: center;
            color: white;

        }

        .client {
            width: 80%;
            margin: 10%;
            padding-left: 100px;
            text-align: center;
        }

        h6 {

            color: black;
            font-size: 14px;
            font-weight: 300;
            line-height: 22px;
            padding: 10px;
            font-family: sans-serif;

        }

        .row {
            margin-top: 5%;
            display: flex;
            justify-content: space-between;
        }

        .clients-col {
            border-radius: 10px;
            margin-bottom: 5%;
            text-align: left;
            background: #fff3f3;
            padding: 15px;
            cursor: pointer;
            display: flex;
        }

        .clients-col img {
            height: 40px;
            margin-left: 5px;
            margin-right: 30px;
            border-radius: 50%;
        }

        h3 {
            text-align: center;
        }

        .clients-col h6 {
            padding: 0;
        }

        .clients-col h3 {
            margin-top: 15px;
            text-align: left;
        }

    </style>
</head>
<body>
<section class="s3">
    <nav>
        <a href="{{'home'}}"><img src="../image/logo.png" alt=""></a>
        <div class="nav-links">
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="#About">ABOUT</a></li>
                <li><a href="">COURSE</a></li>
                <li><a href="#clients">CLIENTS</a></li>
                <li><a href="">CONTACT</a></li>
            </ul>
        </div>
    </nav>
    <div class="text-box">
        <h1>Grow with "to do" efficiently and for free!</h1>
    </div>
    <div class="dws">
        <a href="{{('startpage') }}" class="butt">start</a>
    </div>
    <div class="dwl">
        <a href="{{('login') }}" class="butt">login</a>
    </div>
</section>
<section class="about">
    <h1><a id="About">About us</a></h1>
    <p>To Do is a personal task management app that empowers users to track and focus on what they need to do. Free training courses on various topics, including self-development. A service that helps organize anything. Make lists of things and ideas, as well as read and exercise with to do.</p>
    <hr>
</section>

<section class="course">
    <h1>Courses we offer</h1>
    <div class="block-container">
        <img src="../image/read.jpg" alt="">
        <div class="block-front"><span>Reading books is a useful and pleasant pastime. However, it is not always possible to carry your favorite novel in paper form with you. It's good that in the 21st century people have smartphones that can fit a whole library of e-books</span>
        </div>
    </div>
    <div class="block-container">
        <img src="../image/training.jpg" alt="">
        <div class="block-front"><span>Most people know that exercise is good for their health, but only a small percentage follow the recommendation of 150 minutes of moderate-intensity physical activity per week.</span>
        </div>
    </div>
    <div class="block-container">
        <img src="../image/notes.jpg" alt="">
        <div class="block-front"><span>Developing good practices (and getting rid of bad ones) is difficult. This requires you to fundamentally change your behavior in order to resist your choice. To simplify the process, we recommend using a habit production site.</span>
        </div>
    </div>
</section>

<section class="client">
    <hr>
    <br>
    <h1><a id="clients">Our clients</a></h1>
    <h6>reviews of our users</h6>
    <div class="row">
        <div class="clients-col">
            <img src="../image/user2.jpg" alt="">
            <div>
                <h6>"TO DO" - training programs for every day for all major muscle groups. With just a few minutes a day, you can build muscle and improve your shape without even going to the gym. You do not need trainers and equipment - all exercises are performed with your own weight</h6>
                <h3>Christine Werkley</h3>
            </div>
        </div>
        <div class="clients-col">
            <img src="../image/user1.jpg" alt="">
            <div>
                <h6>'TO DO' for habit production works because it gives you the effect of implementation for later progress.Once you see your progress, the likelihood of you quitting the habit will decrease significantly. However, to get the most out of the process, you need to have not only an interesting book, but also a convenient and comfortable reader.</h6>
                <h3>David Byer</h3>
            </div>
        </div>

    </div>
</section>
<section class="contacts">

</section>
</body>
</html>
