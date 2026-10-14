<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<style>
    body{
        background-color: teal;
    }
    .bar{
        display: flex;
        background-color: black;
        color: blue;
        padding: 8px;
    }
    .bar ul{
        display: flex;
        gap: 4%
        position right;
        padding-left: 10%;
        padding-top: 10%;

    } 
    ul li a{
        text-decoration-line: none;
        color: white;
        font-size: 20px;
    }
    ul li{
        list-style-type: none;
    }
    .main{
    height: 70vh;
    }
    img{
        width: 100%;
        height: 70vh;
    }
    .foot{
        background-color: rgb(99, 100, 99);
        padding: 10px;
        text-align: center;
        color: red;
    }
    h1{
        padding-left: 20%;
    }
</style>
<body>
    <div class="bar">
        <h1>ethiocoder acadamy</h1>
        <ul>
            <li><a href="index.php" style="padding-left: 15px; padding-right: 15px;">Home</a></li>
              <li><a href="Aboutus.php" style="padding-left: 15px; padding-right: 15px;">Aboutus</a></li>
                <li><a href="Contact.php" style="padding-left: 15px; padding-right: 15px;">Contact</a></li>
                  <li><a href="Sign up.php" style="background-color:aquamarine;padding-left: 15px;padding-right: 15px;padding-top: 15px;padding: 7px;">Sign up</a></li>
                    <li><a href="Login.php" style="background-color: aquamarine;padding: 7px;padding-left: 15px;padding-right: 15px;padding-top: 15px;">Login</a></li>
        </ul>

    </div>
    <div class="main">
        <img src="belaynew.jgpa" alt="">

    </div>
    <div class="foot">
   <h1>ethiocoder acadamy</h1>
    </div>
    
</body>
</html>