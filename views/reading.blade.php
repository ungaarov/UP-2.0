<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reading</title>
    <link rel="shortcut icon" href="/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a0e227089e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
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
        .wooklist .minibook .book_info{
            padding: 0;
            margin: 0 0 5px 0;
            width: auto;
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
    </style>


</head>
<section class="s3">
    <nav>
        <a href="{{ route('home') }}"><img src="image/logo.png" alt="icon"></a>
        <div class="nav-links">
            <ul>
                <li><a href="{{ route('home') }}">HOME</a></li>
                <li><a href="{{ route('library') }}">GENRES</a></li>
                <li><a href="">AUTHORS</a></li>
                <li><a href="">NEW BOOKS</a></li>
                <li><a href="">POPULAR</a></li>
            </ul>
        </div></nav>
    <div class="text-box">
        <h1>Reading books is a useful and pleasant pastime. However, it is not always possible to carry your favorite novel in paper form with you. It's good that in the 21st century people have smartphones that can fit a whole library of e-books</h1>

    </div>

</section>
<section class="bestbooks">
    <h1>BEST BOOKS</h1>
    <hr>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/pf2.jpg" alt="pf2" class="d-block w-5 m-auto" style="width: 30%;" >
            </div>
            <div class="carousel-item">
                <img src="image/pg2.png" alt="pg2" class="d-block w-20 m-auto" style="width: 30%;">
            </div>
            <div class="carousel-item">
                <img src="image/pg3.jpg" alt="pg3" class="d-block w-20 m-auto" style="width: 30%;">
            </div>
            <div class="carousel-item">
                <img src="image/pg4.jpg" alt="pg3" class="d-block w-20 m-auto" style="width: 30%;">
            </div>
            <div class="carousel-item">
                <img src="image/pg5.png" alt="pg3" class="d-block w-20 m-auto" style="width: 30%;">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>
