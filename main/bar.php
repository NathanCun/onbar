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
          overflow-x: hidden;
          scroll-behavior: smooth;
        }
        html, body{
            height: 100%;
        }
        .icon{
            overflow: visible;
            text-decoration: none;
            color: black;
        }
        #popup{
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            margin: 0 auto;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: white;
        }
        
        input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white;
        }
        
        input:-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: white;
        }
        
        input::-ms-input-placeholder { /* Microsoft Edge */
            color: white;
        }
        
        input::-moz-placeholder { /* Firefox 19+ */
            color: white;
        }
        
        input:-moz-placeholder { /* Firefox 18- */
            color: white;
        }
      </style>
    <title>Home</title>
</head>
<body>
    <?php
    
    if(isset($_GET['home'])){

        include "home.php";
    } elseif (isset($_GET['booking'])) {
        include "booking.php";
    } elseif (isset($_GET['inbox'])) {
        include "inbox.php";
    } elseif (isset($_GET['profile'])) {
        include "profile.php";
    } 
    ?>
    <div style="display: flex; width: 90%; background-color: white; justify-content: space-around; align-items: center; padding: 10px 5%; position: fixed; bottom: 0; left: 0;">
        <a href="?home" class="icon"><div style="align-items: center; display: flex; flex-direction: column; width: 1px; overflow: visible;">
            <i class="fi fi-rr-home"></i>
            <p style="margin: 0; font-size: 0.8em;">Home</p>
        </div></a>
        <div style="height: 30px; width: 1px; background-color: black;"></div>
        <a href="?booking" class="icon"><div style="align-items: center; display: flex; flex-direction: column; width: 1px; overflow: visible;">
            <i class="fi fi-rr-book-bookmark"></i>
            <p style="margin: 0; font-size: 0.8em;">Booking</p>
        </div></a>
        <div style="height: 30px; width: 1px; background-color: black;"></div>
        <a href="?inbox" class="icon"><div style="align-items: center; display: flex; flex-direction: column; width: 1px; overflow: visible;">
            <i class="fi fi-rr-comment-alt"></i>
            <p style="margin: 0; font-size: 0.8em;">Inbox</p>
        </div></a>
        <div style="height: 30px; width: 1px; background-color: black;"></div>
        <a href="?profile" class="icon"><div style="align-items: center; display: flex; flex-direction: column; width: 1px; overflow: visible;">
            <i class="fi fi-rr-user"></i>
            <p style="margin: 0; font-size: 0.8em;">Profile</p>
        </div></a>
    </div>
</body>
</html>


<script type="text/javascript" src="script.js"></script>