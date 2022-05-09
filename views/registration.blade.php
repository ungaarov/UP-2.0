<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/1802/1802292.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        body{
            font-family: Monoserrat, serif;
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(../image/img6.jpg);
        }
        .navbar-nav{
            text-align: right;
        }
        .navbar-header{
            font-size: 10px;
        }
        .navbar-brand{
            font-size: 30px;
        }
        .nav-item{
            padding: 0 5px;
        }
        a{
            color: #fff;
        }
        a:hover{
            text-decoration: none;
        }
        .container{
            width: 450px;
            background-color: rgb(0, 0, 0, .5);
            margin: 100px auto 0 auto;
            text-align: center;
            box-shadow: 0 -5px 0 #3abdfd ;
            border-radius: 0 0 10px 10px;
            padding-bottom: 20px;
        }
        .container img {
            width: 120px;
            height: 120px;
            margin: -60px 0 30px 0;
            border: 5px solid #1a394f;
            border-radius: 50%;
        }
        input[type="number"], input[type="number"]{
            width: 300px;
            height: 50px;
            font-size: 18px;
            margin-bottom: 25px;
            border-radius: 4px;
            padding-left: 40px;
        }
        input[type="text"], input[type="password"]{
            width: 300px;
            height: 50px;
            font-size: 18px;
            margin-bottom: 25px;
            border-radius: 4px;
            padding-left: 40px;
        }
        .btn_1{

            margin: 0 auto;
            display: block;
            width: 100px;
            height: 50px;
            text-align: center;
            background-color:#3abdfd;
            border-radius: 5px;
            font-size: 20px;
            color: #000;
        }
        .dws-submit {
            padding: 13px 30px;
            margin: 5px 0 20px 0;
            font-size: 15px;
            color: #fff;
            background-color: #2ca8c6;
            border: none;
            border-bottom: 4px solid #6ee9fd;
            cursor: pointer;
        }
        .dws-submit:hover
        {
            transition: all 0.5s;
            background: #fff;
            color: #2c536c;
        }
        .dws-input::before{
            font-family: FontAwesome, serif;
            position: absolute;
            font-size: 30px;
            padding: 10px 0 0 7px;
            color: #2c536c;
        }
        .dws-input:hover::before{
            color: #319ebc;
            transition: all 0.3s;
        }
        .social i:hover{
            background-color: #fff;
            color: #1a394f;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}l"><i class="fas fa-cut"></i>UP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Login/Registration</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <img src="image/22.jpg" alt="icon">
    <form>
        <div>
            <p style="color: #ffffff; font-size: 35px; font-weight: bold">
                Registration Form
            </p>
        </div>
        <div>
            <label class="dws-input">
                <input id="text" type="text" name="number" placeholder="Phone number/Email">
            </label>
        </div>
        <div>
            <label class="dws-input">
                <input id = "password" type="password" name="password" placeholder="Password">
            </label>
        </div>
        <div>
            <label class="dws-input">
                <input id ="pass2" type="password" name="password" placeholder="Repeat password">
            </label>
        </div>
        <div><button type="button" id="registr" class="btn_1 btn-dark">Enter</button></div>
    </form>
</div>
</body>
</html>
