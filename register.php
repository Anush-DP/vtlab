<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Virtual Lab</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/Semantic/semantic.min.css">
        <script src="css/Semantic/semantic.min.js"></script>
        <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/home.css">
        <link rel="icon" href="images\dscelogo.png">
        <title>Virtual Labs Register</title>
</head>
<body>
        <h1 class="ui header" style="text-align:center" id = "head">
                <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
            <a href="index.php">Virtual Labs</a>
          </h1>
          <div id="toTop"><i class="chevron up icon"></i></div>
            <div>
            <div class="ui  light grey inverted secondary huge menu">
            <a class="header item" href="index.php">
              Home
            </a>
           <a class="item">
              About Us
            </a> 
             <!-- <a class="item">
              Item
            </a>
            <a class="item">
              Item
            </a> -->
          </div>
    <div class="ui container" id="#logcont">
            <h2 class="ui header" style="font-size:35px; margin-left:10px;">
                    Registration Form
                  </h2>
        <form class="ui form" action="titles.php" method="POST">
            <div class="field">
              <label>USN</label>
              <input type="text" name="usn" placeholder="USN number">
            </div>
            <div class="field">
              <label>Name</label>
              <input type="text" name="name" placeholder="Name">
            </div>
            <div class="field">
            <label>Semester</label>
            <select class="ui dropdown" name="sem">
                    <option class="item" value="I">I</option>
                    <option class="item" value="II">II</option>
                    <option class="item" value="III">III</option>
                    <option class="item" value="IV">IV</option>
                    <option class="item" value="V">V</option>
            </select>
            </div>
            <div class="field">
                    <label>Mobile number</label>
                    <input type="number" name="mbno" placeholder="Mobile number">
            </div>
            <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email">
            </div>
            <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password">
            </div>
            <input type="hidden" name="session_type" value="register">
            <button class="ui button" type="submit">Submit</button>
          </form>
    </div>
</body>