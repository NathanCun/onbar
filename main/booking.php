<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800&display=swap" rel="stylesheet"/>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <style>
        *,
        body {
          margin: 0;
          padding: 0;
          font-family: "montserrat";
        }
        html, body{
          height: 100%;
        }
        
      </style>
    <title>Booking</title>
</head>
<body>
    <div style="padding: 8%;">
        <p style="font-size: 1.5em; font-weight: 600;">Booking</p>
        <div style="width: 100%; display: flex; margin-top: 28px;">
            <button style="width: 50%; border: none; color: black; border-bottom: solid 1px black;background-color: white; padding: 8px;" id="first" onclick="upcomingFunction()">Upcoming</button>
            <button style="width: 50%; border: none; color: gray; border-bottom: solid 1px gray;background-color: white; padding: 8px;" id="second" onclick="pastFunction()">Past</button>
        </div>
        <div id="upcoming">
            <div style="background-color: white; border: solid 1px gray; border-radius: 10px; display: flex; padding: 16px 5%; margin-top: 16px;">
                <img src="../src/2.png" width="90px" style="border-radius: 6px;">
                <div style="margin-left: 16px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 1.2em;">Haircuts</p>
                    <p style="color: gray; font-size: 0.8em;">Man</p>
                    <p style="color: gray; font-size: 0.8em;">Salon A</p>
                    <p style="color: gray; font-size: 0.8em;">21 January 2023</p>
                </div>
            </div>
        </div>
        <div id="past" style="display: none;">
            <div style="background-color: white; border: solid 1px gray; border-radius: 10px; display: flex; padding: 16px 5%; margin-top: 16px;">
                <img src="../src/2.png" width="90px" style="border-radius: 6px;">
                <div style="margin-left: 16px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 1.2em;">Haircuts</p>
                    <p style="color: gray; font-size: 0.8em;">Man</p>
                    <p style="color: gray; font-size: 0.8em;">Salon C</p>
                    <p style="color: gray; font-size: 0.8em;">15 January 2023</p>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        const upcoming = document.getElementById('first')
        const past = document.getElementById('second')
        const displayUpcoming = document.getElementById('upcoming');
        const displayPast = document.getElementById('past');

        function upcomingFunction() {
            upcoming.style.color="black";
            upcoming.style.borderBottom="solid 1px black";
            past.style.color="gray";
            past.style.borderBottom="solid 1px gray";
            displayUpcoming.style.display="block";
            displayPast.style.display="none";
        }

        function pastFunction() {
            upcoming.style.color="gray";
            upcoming.style.borderBottom="solid 1px gray";
            past.style.color="black";
            past.style.borderBottom="solid 1px black";
            displayUpcoming.style.display="none";
            displayPast.style.display="block";
        }
    </script>
</body>
</html>