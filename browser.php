
<!--                                                            
                                                          This is a fake interface of a browser
                                                                   Created by Leax
                                                                  (Younes Ameziane)

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaxiano we browser</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Benne&display=swap');
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background: rgb(16, 17, 20);
        font-family: 'Benne', serif;
        padding: 220px;
        outline: none;
    }
    h1{
        color: rgb(255, 123, 0);
        text-align: center;
        margin: 0 0 40px;
        font-size: 100px;
    }
    form{
        text-align: center;
    }
    form input[type="text"]{
        width: 70%;
        padding: 15px;
        margin: 0 0 20px;
        border-radius: 30px;
    }
    form input[type="text"]:focus{
        border: 3px solid rgb(255, 123, 0);
    }
    form input[type="submit"]{
        padding: 8px 15px 8px 15px;
        border: 0;
        width: 15%;
        border-radius: 30px;
    }
    form input[type="submit"]:hover{
        background: rgb(255, 123, 0);
        transition: .7s;
    }
</style>
<?php
    if(isset($_POST['submit'])){
        $url = $_POST['url'];
        if(filter_var($url, FILTER_VALIDATE_URL) == true){
            header('location: http://' . $url);
        }else
            header('location: https://www.google.com/search?client=firefox-b-e&q=' . $url);
    }
?>
<body>
    <h1>Leaxiano</h1>
    <form action="" method="post">
        <div class="row">
            <input type="text" name="url" placeholder="Search by Leaxiano browser">
        </div>
        <div class="row">
            <input type="submit" name="submit" value="search">
        </div>
    </form>
</body>
</html>
