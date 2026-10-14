<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<style>
    body{
        background-color: red;

    }
    .bar{
        display: flex;
        background-color: black;
        color: 
        gap: 4%;
        padding: 5px;
    }
    .bar ul{
        display: flex;
        position: center;
        padding-left: 10%;
        padding-top: 10%;
        color: aqua;

    } 
    ul li a{
        text-decoration-line: none;
        color: white;
        font-size: 10px;
    }
    ul li{
        list-style-type: none;
    }
    .main{
    height: 90vh;
    width: 100px;
    }
    #frm{
        margin: auto;
        background-color: white;
        width: 200px;
        margin-top: 10px;
        padding: 4px;
        padding-top: 10px;
        text-align: center;
        font-weight: bold;
    }
    #text{
        height: 40px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px red;
        padding: 4px;
        font-size: 14px;
    }
    #button{
        width: 300px;
        height: 40px;
        border-radius: 4px;
        cursor: pointer;
        border: none;
        background-color: rgb(54, 165, 56);
        color: white;
        font-weight: bold;
    }
    img{
        width: 100%;
        height: 90vh;
    }
    .foot{
        background-color: rgb(99, 100, 99);
        padding: 10px;
        text-align: center;
        color: red;
    }
    h1{
        padding-left: 10%;
        width: 100px;
        height: 10px;
    }
</style>
<body>
    <?php
    include "connection.php";

     if(isset($_POST['register'])){
        $username=$_POST['username'];
         $emial=$_POST['emial'];
         $gender=$_POST['gender'];
          $password=$_POST['password'];
           $rpassword=$_POST['rpassword'];
           $sql="insert into Sign up(username,emial,gender,password,rpassword)valuse('$username',' $emial','$gender','$password','$rpassword',)";
           $result=$conn->query($sql);

           if(result){
            echo "user account seccessfully inserted";
           }else{
            echo "user account not created";
           }
     }


      ?>
    <div class="bar">
        <h1>ethiocoder acadamy</h1>
        <ul>
            <li><a href="index.php" style="padding-left: 15px; padding-right: 15px;">Home</a></li>
              <li><a href="Aboutus.php" style="padding-left: 15px; padding-right: 15px;">Aboutus</a></li>
                <li><a href="Contact.php" style="padding-left: 15px; padding-right: 15px;">Contact</a></li>
                  <li><a href="Sign up.php" style="background-color:aquamarine;padding-left: 15px;padding-right: 15px;padding-top: 15px;padding: 7px;">Sign up</a></li>
                    <li><a href="Login.php" style="background-color: aquamarine;padding: 7px;padding-left: 15px;padding-right: 15px;padding-top: 15px;">Login</a></li>
        </ul>
       <div id="frm">
        <h1 style="font-family: 'Times New Roman', Times, serif;color: rgb(54, 164, 64);">Sign up</h1>
        <br>
        <form action="" method="post">
            <input type="text" id="text" name="username" placeholder="username" required><br><br>
            <input type="email" id="text" name="emial" placeholder="emial" required><br><br>
           <span style="font-weight: normal;">gender</span><br>
           <section name="gender" id="text">
            <option value="" id="gender">male</option>
            <option value="" id="gender">female</option>
            <input type="password" id="text" name="password" placeholder="password" required><br><br>
            <input type="password" id="text" name="password" placeholder="Retype password" required><br><br>
            <input type="submit" id="button" name="register" value="Sign up">

           </section>

        </form>

       </div>
 

    </div>
    <div class="foot">
   <h1>ethiocoder acadamy</h1>
    </div>
    
</body>
</html>