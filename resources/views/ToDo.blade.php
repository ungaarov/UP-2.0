<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>To do list</title>

    <style>

        body{
            background-image: url('../image/motivation.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 120%;">
        }
        * {
            box-sizing: border-box;
        }
        ul {
            margin: 0;
            padding: 0;
        }

        ul li {
            cursor: pointer;
            position: relative;
            padding: 12px 8px 12px 40px;
            background: rgba(238, 238, 238, 0.9);
            font-size: 18px;
            transition: 0.2s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        ul li:nth-child(odd) {
            background: rgba(249, 249, 249, 0.9);
        }

        ul li:hover {
            background: rgba(221, 221, 221, 0.9);
        }

        ul li{
            background: rgba(136, 138, 138, 0.9);
            color: rgba(255, 255, 255, 0.5);
            text-decoration: line-through;
        }

        ul li::before {
            content: '';
            position: absolute;
            border-color: rgba(255, 255, 255, 0.9);
            border-style: solid;
            border-width: 0 2px 2px 0;
            top: 10px;
            left: 16px;
            transform: rotate(45deg);
            height: 15px;
            width: 7px;
        }
        .header {
            background-color: #0039A0;
            padding: 30px 40px;
            color: white;
            text-align: center;
        }

        .header:after {
            content: "";
            display: table;
            clear: both;
        }

        input {
            margin: 0;
            border: none;
            border-radius: 0;
            width: 75%;
            padding: 10px;
            float: left;
            font-size: 16px;
        }

        .addBtn {
            padding: 10px;
            width: 25%;
            background: #d9d9d9;
            color: #555;
            float: left;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 0;
        }

        .addBtn:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>
<div id="myDIV" class="header">
    <h2>My To Do List</h2>
    <label>
        <input type="text" id="myInput" placeholder="Title...">
    </label>
    <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">
</ul>
<script>
    var myNodelist = document.getElementsByTagName("LI");
    var i;
    for (i = 0; i < myNodelist.length; i++) {
        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        myNodelist[i].appendChild(span);
    }

    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function () {
            var div = this.parentElement;
            div.style.display = "none";
        }
    }

    var list = document.querySelector('ul');
    list.addEventListener('click', function (ev) {
        if (ev.target.tagName === 'LI') {
            ev.target.classList.toggle('checked');
        }
    }, false);

    function newElement() {
        var li = document.createElement("li");
        var inputValue = document.getElementById("myInput").value;
        var t = document.createTextNode(inputValue);
        li.appendChild(t);
        if (inputValue === '') {
            alert("You must write something!");
        } else {
            document.getElementById("myUL").appendChild(li);
        }
        document.getElementById("myInput").value = "";

        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        li.appendChild(span);

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function () {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }
    }
</script>
</body>
</html>
