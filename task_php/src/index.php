<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <br><br>
        <form action="email.php" method="post">
            <label for="Name">Name :</label><br>
            <input type="text" name="name" class="form-control required" placeholder="Enter Your Name" required><br>
            <label for="phone">Phone Number :</label><br>
            <input type="text" name="number" class="form-control required" placeholder="Enter Your Mobile Number" required><br>
            <label for="Name">Email :</label><br>
            <input type="email" name="email" class="form-control required" placeholder="Enter Your email" required><br>
            <label for="Name">Subject :</label><br>
            <input type="text" name="subject" class="form-control required" placeholder="Enter Your Subject" required><br>
            <label for="Name">Message :</label><br>
            <textarea name="msg"  cols="30" rows="10" class="form-control required" placeholder="Enter Your Message" required></textarea><br>
            <input type="submit" class="btn btn-primary">
           
        </form>
    </div>
</body>

</html>