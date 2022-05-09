<!DOCTYPE html>
<html lang="en">

<head>
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        #logo {
            margin: 5px;
            float: left;
            height: 90px;
            width: auto;
        }
        .bg-green {
            background-color: #4D5656;
        }
        .brand{
            font-family: serif;
        }
        .d-flex{
            color: #097B4A;
        }
        .tabcontent{
            position: relative;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
        }
        div{
            display: block;
        }
        body{
            font: 13px Arial;
            background: #e8e8e8;
        }
        .tabcontent .tab-item{
            display: none;
        }
        .wooklist{
            margin-right: -0.4%;
            position: relative;
            padding: 35px 33px 33px 35px;
            box-sizing: content-box;
        }
        .wooklist ul{
            list-style-type: none;
            position: relative;
            margin: 0;
            padding: 0;
        }
        ul{
            list-style: none;
        }
        .wooklist .minibook li{
            width: 350px;
        }
        .wooklist ul li{
            display: inline-block;
            vertical-align: text-top;
        }
        .wooklist ul li .wrap{
            background: #fff;
            border: 1px solid #dedede;
            padding: 15px;
            margin: 0 20px 20px 0;
            position: relative;
        }
        .wooklist .minibook .img{
            padding: 0 0 10px 0;
        }
        a:link {
            -webkit-tap-highlight-color: #fcd700;
        }
        a{
            color: #bd236c;
            margin: 0;
            padding: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
        }
        a:-webkit-any-link {
            color: -webkit-link;
            cursor: pointer;
            text-decoration: underline;
        }
        .wooklist .minibook .img img{
            display: block;
            margin: 0 auto;
        }
        img, object, embed{
            max-width: 100%;
        }
        .cwl{
            text-align: center;
            position: relative;
            margin-top: 10px;
            font-family: serif;
        }
        .wooklist .minibook .book_info{
            padding: 0;
            margin: 0 0 5px 0;
            width: auto;
        }
        .clearfix{
            zoom: 1;
        }
        .clearfix:before{
            content: "\0020";
            display: block;
            height: 0;
            overflow: hidden;
        }
        .wooklist .minibook .book_info >p{
            padding: 0;
            margin: 0 0 5px 0;
        }
        .book_info .date_add{
            font-size: 11px;
            color: #999;
        }
        p{
            margin-bottom: 10px;
        }
        .booktitle{
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .s3{
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(4, 9, 30, 0.7),rgba(4, 9, 30, 0.7)), url(../image/img1.jpg);
            background-position: center;
            background-size: cover;
            position: relative;

        }
        nav{
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }
        nav img{
            width: 100px;
        }
        .nav-links{
            flex: 1;
            text-align: right;
        }
        .nav-links ul li{
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }
        .nav-links ul li a{
            color: #FFFFFF;
            text-decoration: none;
            font-size: 13px;
        }
        .nav-links ul li::after{
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
        .text-box{
            width: 90%;
            color: #FFFFFF;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }
        .text-box h1{
            font-size: 22px;
            font-family: serif;
        }
        .bestbooks{
            width: 88%;
            margin: auto;
            text-align: center;
            padding-top: 100px;
        }
        .imgs {
            display: inline;
            border: 10px;
            padding: 15px;
            margin-right: 10px;
            margin-bottom: 10px;
            height: 500px;
            width: auto;
        }
    </style>

</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-green">
        <div class="container-fluid">
            <img src="image/logo.png" width="70" height="100" alt="icon">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reading') }}">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                GENRES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">BUSINESS BOOKS</a>
                                <a class="dropdown-item" href="#">SPORTS, HEALTH, BEAUTY</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">PROGRESS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">PREMIUM</a>
                        </li>
                    </ul>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <form class="d-flex">
                    <a class="btn btn-secondary" href="{{ route('registration') }}" role="button">LOGIN/REGISTER</a>
                </form>

            </div>
        </div>
    </nav>
</header>
<body>
<div class="navcontent">
    <div style="display: block;" data onshow="20" id="mainbooks1" class="tab-item">
        <div class="line-one">
            <div class="wooklist">
                <ul class="minibook">
                    <li data-filter-class="['notread']">
                        <div class="wrap">
                            <div class="info-wr">
                                <div class="img">
                                    <img src="image/pf2.jpg" alt="icon">
                                    <p class="cwl">The Paradoxical Way to Live Happily is the second book published on the blog by alleged writer Mark Manson.</p>

                                </div>
                                <div class="book_info clearfix">
                                    <p class="date_add">20.04.2022</p>
                                    <p class="booktitle">The subtle art of bullying</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-filter-class="['notread']">
                        <div class="wrap">
                            <div class="info-wr">
                                <div class="img">
                                    <img src="image/pg2.png" alt="image">
                                    <p class="cwl">Jen Sinsero's bestseller - in a convenient CrossReads format!</p>

                                </div>
                                <div class="book_info clearfix">
                                    <p class="date_add">23.04.2013</p>
                                    <p class="booktitle">NI SY: Be confident in your abilities and don't let doubt stop you from moving forward</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-filter-class="['notread']">
                        <div class="wrap">
                            <div class="info-wr">
                                <div class="img">
                                    <img src="image/pg3.jpg" alt="image">
                                    <p class="cwl">The use of huge reserves hidden in the subconscious of each person allows you to solve the most complex everyday problems when logic is powerless.</p>

                                </div>
                                <div class="book_info clearfix">
                                    <p class="date_add">05.08.2015</p>
                                    <p class="booktitle">The Subconscious Can Do Anything!</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-filter-class="['notread']">
                        <div class="wrap">
                            <div class="info-wr">
                                <div class="img">
                                    <img src="image/pg4.jpg" alt="image">
                                    <p class="cwl">What can we learn from a simple guy who became the highest paid actor in Hollywood</p>

                                </div>
                                <div class="book_info clearfix">
                                    <p class="date_add">09.11.2021</p>
                                    <p class="booktitle">WILL</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-filter-class="['notread']">
                        <div class="wrap">
                            <div class="info-wr">
                                <div class="img">
                                    <img src="image/pg5.png" alt="image">
                                    <p class="cwl"> Here you will find a simple step by step guide to overcome any type of anxiety. Now you will forever get rid of anxiety and begin to live life to the fullest.</p>

                                </div>
                                <div class="book_info clearfix">
                                    <p class="date_add">09.11.2009</p>
                                    <p class="booktitle">Freedom from anxiety. Deal with anxiety before it does you</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-filter-class="['notread']">
                        <div class="wrap">
                            <div class="info-wr">
                                <div class="img">
                                    <img src="image/pg6.png" alt="image">
                                    <p class="cwl">Physical health, financial status, relationships with others and professional success depend on willpower - this is a well-known fact.</p>

                                </div>
                                <div class="book_info clearfix">
                                    <p class="date_add">29.12.2011</p>
                                    <p class="booktitle">Willpower: How to develop and strengthen</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
