<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <style>
        .php_style {
            color: brown;
            font-size: 8em;
            text-align: center;
            margin-top: 20%;
        }
        </style>
</head>
<body>

<div class="php_style"> 
    <p>Thank You for reaching out <?php echo $_POST['fullname']; ?> </p>
</div>

<?php
              
    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $title=$_POST['title'];
    $message=$_POST['message'];
    $both = "fullname; ". $name . " ," ."email: ". $email . " ,"."title: ". $title." ,". "message: ".$message;
    $fp = fopen('php.md', 'a');
    fwrite($fp, $both);
    fclose($fp);
    
?>

</body>
</html>

