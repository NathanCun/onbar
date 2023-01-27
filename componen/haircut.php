<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800&display=swap" rel="stylesheet" />
    <style>
        *, body {
            margin: 0;
            padding: 0;
            font-family: 'montserrat';
        }
      html,
      body {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: "montserrat";
      }
    </style>
    <title>Haircut</title>
</head>
<body>
    <div>
        <div style="display: flex; border-bottom: solid 1px lightgray; position: fixed; padding: 20px 0; width: 100%; justify-content: center; background-color: white; top: 0;">
            <a href="../main/bar.php?home" style="color:black;"><i class="fi fi-rr-arrow-small-left" style="position: fixed; left: 5%;font-size: 1.5em;"></i></a>
            <p>Book Appointment</p>
        </div>
        <div style="display: flex; border-bottom: solid 1px lightgray; position: fixed; padding: 20px 0; width: 100%; justify-content: center; background-color: white; bottom: 0;">
            <a href="./appointment.php" style="width: 84%;"><button style="width: 100%; background-color: #172c5c; padding: 12px 0; color: white; border: none; border-radius: 10px;">Next</button></a>
        </div>
        <div style="height: 40px;"></div>
        <div style="padding: 60px 8%;">
            <p style="font-size: 1.2em; text-align: center; font-weight: 600;">What service would you like to book?</p>
            <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-top: 40px;">
                <div style="width: 70%;">
                    <p>Haircut for Men</p>
                    <p  style="font-size: 0.8em; color: gray; margin-top: 4px;">45 Mins of focus work in creating the best you.</p>
                </div>
                <input type="checkbox" style="width: 24px; height: 24px; margin-top: 4px;" class="checkbox" onclick="cb('cb_1')" id="cb_1">
            </div>
            <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-top: 28px;">
                <div style="width: 70%;">
                    <p>Haircut for Men</p>
                    <p  style="font-size: 0.8em; color: gray; margin-top: 4px;">45 Mins of focus work in creating the best you.</p>
                </div>
                <input type="checkbox" style="width: 24px; height: 24px; margin-top: 4px;" class="checkbox" onclick="cb('cb_2')" id="cb_2">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        
        function cb(class_name) {
            $(".checkbox").prop('checked', false); //uncheck semua checkbox
            document.getElementById(class_name).checked="true"; //centang checkbox yang di click
        }
    </script>
</body>
</html>