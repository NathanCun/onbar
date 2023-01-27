<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800&display=swap" rel="stylesheet"/>
    <title>Document</title>
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
</head>
<body>
  <div style="height: 100%; display: flex; justify-content: center;">
    <div style="display: flex; border-bottom: solid 1px lightgray; position: fixed; padding: 20px 0; width: 100%; justify-content: center; background-color: white; top: 0;">
      <a href="../main/bar.php?profile"><i class="fi fi-rr-arrow-small-left" style="position: fixed; left: 5%;font-size: 1.5em; color: black;"></i></a>
      <p>Change Security Code</p>
  </div>
    <form action="./cscode2.php" method="post" style="width: 84%; height: 100%">
      <div style="height: 100%; width: 100%; display: flex; align-items: center; flex-direction: column; justify-content: center">
        <div style="background-color: black;"></div>
        <label style="width: 80%; text-align: center; margin-top: 0; font-size: 0.8em;">Masukkan Security Code Anda Sekarang ini.</label>
        <input type="password" style="border: none; border-bottom: solid 1px black; width: 100px; height: 60px; font-size: 3em; text-align: center;" required>
        <div style="display: flex; padding: 20px 0; width: 100%; justify-content: center;">
          <input type="submit" value="Submit" style="width: 100%; background-color: #172c5c; padding: 12px 0; color: white; border: none; border-radius: 10px;">
        </div>
    </div>
    </form>
</div>
</body>
</html>