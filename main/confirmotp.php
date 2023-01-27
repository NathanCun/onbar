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
          overflow: hidden;
        }
        html, body {
            height: 100%;
        }
      </style>
    <title>Confirm OTP</title>
</head>
<body>
    <div style="height: 100%; display: flex; justify-content: center;">
        <div style="display: flex; border-bottom: solid 1px lightgray; position: fixed; padding: 20px 0; width: 100%; justify-content: center;">
            <a href="createaccount.php"><i class="fi fi-rr-arrow-small-left" style="position: fixed; left: 5%;font-size: 1.5em; color: black"></i></a>
            <p>Confirm OTP Code</p>
        </div>
        <form action="bar.php?home" method="post" style="width: 84%; height: 100%">
        <div style="height: 100%; width: 100%; display: flex; align-items: center; flex-direction: column; justify-content: center">
            <div style="background-color: black;"></div>
            <p style="font-size: 1.5em;margin-bottom: 4px;">+62 82165624559</p>
            <p style="width: 80%; text-align: center; margin-top: 0; font-size: 0.8em;">Enter the 5-digit OTP code that has been sent from SMS to complete your account registration</p>
            <div style="display: flex; width: 220px; justify-content: space-between;">
                <input style="border: none; border-bottom: solid 1px black; width: 40px; height: 60px; font-size: 3em; text-align: center;" required>
                <input style="border: none; border-bottom: solid 1px black; width: 40px; height: 60px; font-size: 3em; text-align: center;" required>
                <input style="border: none; border-bottom: solid 1px black; width: 40px; height: 60px; font-size: 3em; text-align: center;" required>
                <input style="border: none; border-bottom: solid 1px black; width: 40px; height: 60px; font-size: 3em; text-align: center;" required>
            </div>
            <p style="font-size: 0.8em;">Haven't got the confirmation code yet? <a href="">Resend</a></p>
            <div style="display: flex; padding: 20px 0; width: 100%; justify-content: center;">
                <input type="submit" value="Submit" style="width: 100%; background-color: #172c5c; padding: 12px 0; color: white; border: none; border-radius: 10px;">
            </div>
        </div>
    </form>
    </div>
</body>
</html>