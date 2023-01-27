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
    </style>
    <title>Document</title>
</head>
<body>
    <div style="padding: 8%;">
        <p style="font-size: 1.5em; font-weight: 600;">Profile</p>
        <!-- Profile -->
        <div style="display: flex; margin-top:28px;">
            <img src="../src/2.png" style="border-radius: 100%; width: 15%;">
            <div style="display: flex; margin-left: 4%; width: 81%; justify-content: space-between; align-items: center;">
                <div>
                    <p style="font-size: 1.2em; font-weight: 600;">Max</p>
                    <p style="color: gray; font-size: 0.8em;">+62 8133841948</p>
                </div>
                <a href="../componen/changeprofile.php" style="color: #00754B; text-decoration: none;"><p style="font-size: 0.8em;">Change</p></a>
            </div>
        </div>
        <!-- Account -->
        <p style="margin-top: 28px; font-weight: 600;">Account</p>
        
        <div style="display: flex; margin-top: 16px;">
            <i class="fi fi-rr-book-bookmark"   style="width: 10%; font-size: 1.4em;"></i>
            <div style="border-bottom: solid 1px lightgray; width: 90%; height: 32px;">
                <a href="./bar.php?booking" style="display: flex; width: 100%; justify-content: space-between; text-decoration: none; color: black;">
                    <p>My Bookings</p>
                    <i class="fi fi-rr-angle-small-right" style="font-size: 1.2em;"></i>
                </a>
            </div>
        </div>

        <div style="display: flex; margin-top: 24px;">
            <i class="fi fi-rr-badge-percent" style="width: 10%; font-size: 1.4em;"></i>
            <div style="border-bottom: solid 1px lightgray; width: 90%; height: 32px;">
                <a href="./bar.php?inbox" style="display: flex; width: 100%; justify-content: space-between; text-decoration: none; color: black;">
                    <p>Promos</p>
                    <i class="fi fi-rr-angle-small-right" style="font-size: 1.2em;"></i>
                </a>
            </div>
        </div>

        <!-- Security -->
        <p style="margin-top: 28px; font-weight: 600;">Security</p>
        
        <div style="display: flex; margin-top: 16px;">
            <i class="fi fi-rr-lock" style="width: 10%; font-size: 1.4em;"></i>
            <div style="border-bottom: solid 1px lightgray; width: 90%; height: 32px;">
                <a href="../componen/cscode.php" style="display: flex; width: 100%; justify-content: space-between; text-decoration: none; color: black;">
                    <p>Change Security Code</p>
                    <i class="fi fi-rr-angle-small-right" style="font-size: 1.2em;"></i>
                </a>
            </div>
        </div>

        <!-- About -->
        <p style="margin-top: 28px; font-weight: 600;">About</p>

        <div style="display: flex; margin-top: 16px;">
            <i class="fi fi-rr-assept-document" style="width: 10%; font-size: 1.4em;"></i>
            <div style="border-bottom: solid 1px lightgray; width: 90%; height: 32px;">
                <a href="" style="display: flex; width: 100%; justify-content: space-between; text-decoration: none; color: black;">
                    <p>Terms & Condition</p>
                    <i class="fi fi-rr-angle-small-right" style="font-size: 1.2em;"></i>
                </a>
            </div>
        </div>

</body>
</html>