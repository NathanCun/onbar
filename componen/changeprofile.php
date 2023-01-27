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
    <title>Document</title>
</head>
<body>
    <div style="display: flex;">
        <div style="width: 8%; padding-top: 8%; display: flex; justify-content: center;">
          <a href="../main/bar.php?profile" style="text-decoration: none; color: black;">
            <i class="fi fi-rr-arrow-small-left" style="font-size: 1.4em;"></i>
          </a>
        </div>
        <div style="width: 84%;padding: 8% 8% 8% 0; display: flex; flex-direction: column;">
            
                <p style="font-size: 1.2em; font-weight: 600; margin-left: 4%;">Change Profile</p>
                <div style="display: flex; flex-direction: column; align-items: center;">
                <img src="../src/2.png" style="border-radius: 100%; width: 15%; margin-top: 28px;">
                <p style="color: #00754B; margin-top: 12px; font-size: 0.8em;">Change Profile Picture</p>
            </div>
            <form action="../main/bar.php?profile" method="post" style="display: flex; flex-direction: column; width: 100%;">
            <label style="margin-top: 24px;">Nama Lengkap</label>
            <input style="border: none; border-bottom: solid 1px lightgray; padding: 3%;" placeholder="Nama" required/>
            <label style="margin-top: 24px;">Nomor HP</label>
            <input style="border: none; border-bottom: solid 1px lightgray; padding: 3%;" placeholder="08XX XXXX XXXX" required/>
            <label style="margin-top: 24px;">Alamat Email</label>
            <input style="border: none; border-bottom: solid 1px lightgray; padding: 3%;" placeholder="contoh@gmail.com" required/>
            <div style="display: flex; border-bottom: solid 1px lightgray; position: fixed; padding: 20px 0; width: 86%; justify-content: center; background-color: white; bottom: 0;">
              <input type="submit" value="Submit" style="width: 100%; background-color: #172c5c; padding: 12px 0; color: white; border: none; border-radius: 10px;">
            </div>
            </form>
        </div>
    </div>
    
</body>
</html>