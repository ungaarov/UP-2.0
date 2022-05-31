<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fontawesome.com/v4/">
    <meta name="viewport" content="with-device-width, initial-scale=1.0">
    <title>Startpage</title>

    <style>
        /*body{*/
        /*    background-color: #1a394f;*/
        /*    background-image: url("../image/929.jpg");*/
        /*}*/
        /*nav {*/
        /*    display: flex;*/
        /*    padding: 2% 6%;*/
        /*    justify-content: space-between;*/
        /*    align-items: center;*/
        /*}*/

        /*nav img {*/
        /*    width: 100px;*/
        /*}*/

        /*.nav-links {*/
        /*    flex: 1;*/
        /*    text-align: right;*/
        /*}*/

        /*.nav-links ul li {*/
        /*    list-style: none;*/
        /*    display: inline-block;*/
        /*    padding: 8px 12px;*/
        /*    position: relative;*/
        /*}*/

        /*.nav-links ul li a {*/
        /*    color: #FFFFFF;*/
        /*    text-decoration: none;*/
        /*    font-size: 13px;*/
        /*}*/

        /*.nav-links ul li::after {*/
        /*    content: '';*/
        /*    width: 0;*/
        /*    height: 2px;*/
        /*    background: #808080;*/
        /*    display: block;*/
        /*    margin: auto;*/
        /*    transition: 0.5s;*/
        /*}*/

        /*.nav-links ul li:hover::after {*/
        /*    width: 100%;*/
        /*}*/

        /*.courses{*/
        /*    width: 1100px;*/
        /*    margin: 50px 50px;*/
        /*    margin-left: 150px;*/
        /*    margin-top: 150px;*/
        /*    display: flex;*/
        /*    justify-content:space-between;*/
        /*}*/

        /*.course{*/
        /*    color: white;*/
        /*    font-size: 25px;*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    width:338px;*/
        /*    height: 250px;*/
        /*    border-radius:10%;*/
        /*    background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url("https://media.wired.com/photos/5955c3573ff99d6b3a1d165c/master/pass/books.jpg");*/
        /*}*/


        /*.sport{*/
        /*    background-image:linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url("https://www.gov.kz/uploads/2019/11/5/7a9c6764febc1a832dbce5599c5685ae_original.206592.jpg");*/

        /*}*/

        /*.notes{*/
        /*    background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url("https://www.wikihow.com/images_en/thumb/1/18/Take-Better-Notes-Step-1-Version-2.jpg/v4-460px-Take-Better-Notes-Step-1-Version-2.jpg.webp");*/
        /*}*/

        body{
            background-color: #1a394f;
            background-image: url("../image/929.jpg");
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

        .nav-links ul li:hover::after {
            width: 100%;
        }

        .courses{
            width: 770px;
            margin: 50px 50px;
            margin-left: 350px;
            margin-top: 150px;
            display: flex;
            justify-content:space-between;
        }

        .course{
            color: white;
            font-size: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            width:338px;
            height: 250px;
            border-radius:10%;
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url("https://media.wired.com/photos/5955c3573ff99d6b3a1d165c/master/pass/books.jpg");
        }

        .notes {
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url("https://www.wikihow.com/images_en/thumb/1/18/Take-Better-Notes-Step-1-Version-2.jpg/v4-460px-Take-Better-Notes-Step-1-Version-2.jpg.webp");
        }


    </style>


</head>
<body>
<nav>
    <a href="{{ route('home') }}"><img src="../image/logo.png" alt=""></a>
    <div class="nav-links">
        <ul>
            <li><a href="{{ route('home') }}">HOME</a></li>
        </ul>
    </div>
</nav>

<div class="courses">
    <a href="{{ route('library') }}" class="course reading" key="feedback">READING</a>
{{--    <a class="course sport" href="#" key="feedback">UP-SPORT</a>--}}
    <a class="course notes" href="{{ route('todo') }}" key="feedback">NOTES</a>
</div>

</body>
</html>
