<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800&display=swap" rel="stylesheet"/>
    <style>
        *,
        body {
          margin: 0;
          padding: 0;
          font-family: "montserrat";
        }

        html, body {
            height: 100%;
        }

        ::-webkit-scrollbar{
            display: none;
        }
        .hours{
            border: 1px solid black;
            width: 68px;
            height: 20px;
            padding: 4px 16px;
            border-radius: 20px;
            margin-right: 28px;
            scroll-behavior: smooth;
            background: white;
        }

        .hours p {
            text-align: center;
            width: 100%;
        }
        .title {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: 600;
        }

        .hs {
            cursor: pointer;
            border: 1px solid black;
            padding: 8px;
            width: 100px;
            margin-right: 28px;
            height: 124px;
            border-radius: 20px;
            background: white;
        }
    </style>
    <title>Appointment</title>
</head>
<body>
    <div style="height: 800px; overflow: scroll;">
        <div style="display: flex; border-bottom: solid 1px lightgray; position: fixed; padding: 20px 0; width: 100%; justify-content: center; background-color: white; top: 0;">
            <a href="./haircut.php"><i class="fi fi-rr-arrow-small-left" style="position: fixed; left: 5%;font-size: 1.5em; color: black;"></i></a>
            <p>Book Appointment</p>
        </div>
        <div style="display: flex; border-bottom: solid 1px lightgray; position: fixed; padding: 20px 0; width: 100%; justify-content: center; background-color: white; bottom: 0;">
            <button style="width: 84%; background-color: #172c5c; padding: 12px 0; color: white; border: none; border-radius: 10px;">Order</button>
        </div>
        <div style="height: 60px;"></div>
        <div style="padding: 0 8%">
            <p class="title">Select Hairstyler</p>
            <div style="width: 110%;display: flex; overflow-x: scroll; margin-top: 12px;">
                <div class="hs" onclick="clickFunction(1)" id="1">
                    <img src="../src/2.png" style="width: 100px; border-radius: 12px;">
                    <p style="width: 100%; text-align: center;">Jiro</p>
                </div>
                <div class="hs" onclick="clickFunction(2)" id="2">
                    <img src="../src/2.png" style="width: 100px; border-radius: 12px;">
                    <p style="width: 100%; text-align: center;">Jiro</p>
                </div>
                <div class="hs" onclick="clickFunction(3)" id="3">
                    <img src="../src/2.png" style="width: 100px; border-radius: 12px;">
                    <p style="width: 100%; text-align: center;">Jiro</p>
                </div>
            </div>
            <p class="title">Select Date</p>
            <div style="width: 100%; height: 300px; background-color: gray; margin-top: 12px;">
                Date
            </div>
            <p class="title">Select Hours</p>
            <div style="width: 110%; display: flex; overflow-x: scroll; margin-top: 12px;">
                <div id="a" onclick="timeFunction('a')" class="hours">
                    <p>09.00</p>
                </div>
                <div id="b" onclick="timeFunction('b')" class="hours">
                    <p>09.20</p>
                </div>
                <div id="c" onclick="timeFunction('c')" class="hours">
                    <p>09.40</p>
                </div>
                <div id="d" onclick="timeFunction('d')" class="hours">
                    <p>10.00</p>
                </div>
                <div id="e" onclick="timeFunction('e')" class="hours">
                    <p>10.20</p>
                </div>
                <div id="f" onclick="timeFunction('f')" class="hours">
                    <p>10.40</p>
                </div>
                <div id="g" onclick="timeFunction('g')" class="hours">
                    <p>11.00</p>
                </div>
                <div id="h" onclick="timeFunction('h')" class="hours">
                    <p>11.20</p>
                </div>
                <div id="i" onclick="timeFunction('i')" class="hours">
                    <p>11.40</p>
                </div>
                <div id="j" onclick="timeFunction('j')" class="hours">
                    <p>12.00</p>
                </div>
                <div id="k" onclick="timeFunction('k')" class="hours">
                    <p>12.20</p>
                </div>
                <div id="l" onclick="timeFunction('l')" class="hours">
                    <p>12.40</p>
                </div>
                <div id="m" onclick="timeFunction('m')" class="hours">
                    <p>13.00</p>
                </div>
                <div id="n" onclick="timeFunction('n')" class="hours">
                    <p>11.40</p>
                </div>
                <div id="o" onclick="timeFunction('o')" class="hours">
                    <p>12.00</p>
                </div>
                <div id="p" onclick="timeFunction('p')" class="hours">
                    <p>12.20</p>
                </div>
                <div id="q" onclick="timeFunction('q')" class="hours">
                    <p>12.40</p>
                </div>
                <div id="r" onclick="timeFunction('r')" class="hours">
                    <p>13.00</p>
                </div>
                <div id="s" onclick="timeFunction('s')" class="hours">
                    <p>11.40</p>
                </div>
                <div id="t" onclick="timeFunction('t')" class="hours">
                    <p>12.00</p>
                </div>
                <div id="u" onclick="timeFunction('u')" class="hours">
                    <p>12.20</p>
                </div>
                <div id="v" onclick="timeFunction('v')" class="hours">
                    <p>12.40</p>
                </div>
                <div id="w" onclick="timeFunction('w')" class="hours">
                    <p>13.00</p>
                </div>
                <div id="x" onclick="timeFunction('x')" class="hours">
                    <p>13.20</p>
                </div>
                <div id="y" onclick="timeFunction('y')" class="hours">
                    <p>13.40</p>
                </div>
                <div id="z" onclick="timeFunction('z')" class="hours">
                    <p>14.00</p>
                </div>
                <div id="aa" onclick="timeFunction('aa')" class="hours">
                    <p>14.40</p>
                </div>
                <div id="ab" onclick="timeFunction('ab')" class="hours">
                    <p>14.00</p>
                </div>
                <div id="ac" onclick="timeFunction('ac')" class="hours">
                    <p>15.00</p>
                </div>
                <div id="ad" onclick="timeFunction('ad')" class="hours">
                    <p>15.20</p>
                </div>
                <div id="ae" onclick="timeFunction('ae')" class="hours">
                    <p>15.40</p>
                </div>
                <div id="af" onclick="timeFunction('af')" class="hours">
                    <p>16.00</p>
                </div>
                <div id="ag" onclick="timeFunction('ag')" class="hours">
                    <p>16.20</p>
                </div>
                <div id="ah" onclick="timeFunction('ah')" class="hours">
                    <p>16.40</p>
                </div>
                <div id="ai" onclick="timeFunction('ai')" class="hours">
                    <p>17.00</p>
                </div>
                <div id="aj" onclick="timeFunction('aj')" class="hours">
                    <p>17.20</p>
                </div>
                <div id="ak" onclick="timeFunction('ak')" class="hours">
                    <p>17.40</p>
                </div>
                <div id="al" onclick="timeFunction('al')" class="hours">
                    <p>18.00</p>
                </div>
            </div>
        </div>
    </div>
    
    <script>

        function clickFunction(class_name) {
            // buat semua element menjadi background putih
            for (let i = 0; i < document.getElementsByClassName("hs").length; i++) {
                document.getElementsByClassName("hs")[i].style.backgroundColor = "white";
                document.getElementsByClassName("hs")[i].style.color = "black";
            }
            // buat element yg dipilih menjadi aktif
            document.getElementById(class_name).style.background= "#172c5c";
            document.getElementById(class_name).style.color= "white";
        }

        function timeFunction(time_name) {
            for (let i = 0; i < document.getElementsByClassName("hours").length; i++) {
                document.getElementsByClassName("hours")[i].style.backgroundColor = "white";
                document.getElementsByClassName("hours")[i].style.color = "black";
            }
            document.getElementById(time_name).style.background= "#172c5c";
            document.getElementById(time_name).style.color= "white";
        }
    </script>
</body>
</html>