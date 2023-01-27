<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800&display=swap"
      rel="stylesheet"
    />
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
    <title>Login</title>
  </head>
  <body>
  <div style="
    width: 100%;
    height: 100%;
    background-color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;">
      <img src="../src/2.png" alt="logo" style="width: 50%" />
      <p style="margin: 0; color: #172c5c; font-size: 1.5em; font-weight: 600;">Login</p>
      <p style="margin: 0; color: #172c5c; font-size: 0.8em;">Welcome back !</p>
      <form action="./confirmotp.php" method="post" style="width: 84%">
        <div style="display: flex; min-width: 250px; width: 100%; justify-content: space-between; align-items: center;">
          <label style="color: #172c5c; font-size: 1.2em;">+ 62</label>
          <input type="text" id="noTelpon" name="noTelpon" style="
            background-color: white;
            border-radius: 10px;
            border: solid 1px #172c5c;
            width: 80%;
            height: 44px;" required/>
        </div>
        <div style="display: flex; padding: 20px 0; width: 100%; justify-content: center;">
          <input type="submit" value="Login" style="width: 100%; background-color: #172c5c; padding: 12px 0; color: white; border: none; border-radius: 10px;">
        </div>
      </form>
        
    </div>
  </body>
</html>