<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <title>{{config('app.name', 'Up')}}</title>
</head>
<body>
<section class="s3">
    <nav>
        <a href="../layouts/home"><img src="image/logo.png" alt=""></a>
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
        <a href="{{ route('startpage') }}" class="butt">start</a>
    </div>
    <div class="dwl">
        <a href="{{ route('login') }}" class="butt">login</a>
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
        <img src="/image/read.jpg" alt="">
        <div class="block-front"><span>Reading books is a useful and pleasant pastime. However, it is not always possible to carry your favorite novel in paper form with you. It's good that in the 21st century people have smartphones that can fit a whole library of e-books</span>
        </div>
    </div>
    <div class="block-container">
        <img src="/image/training.jpg" alt="">
        <div class="block-front"><span>Most people know that exercise is good for their health, but only a small percentage follow the recommendation of 150 minutes of moderate-intensity physical activity per week.</span>
        </div>
    </div>
    <div class="block-container">
        <img src="/image/notes.jpg" alt="">
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
            <img src="image/user2.jpg" alt="">
            <div>
                <h6>"TO DO" - training programs for every day for all major muscle groups. With just a few minutes a day, you can build muscle and improve your shape without even going to the gym. You do not need trainers and equipment - all exercises are performed with your own weight</h6>
                <h3>Christine Werkley</h3>
            </div>
        </div>
        <div class="clients-col">
            <img src="image/user1.jpg" alt="">
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
