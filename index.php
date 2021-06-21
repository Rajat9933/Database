<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="database.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Base</title>
</head>
<body>
    <h2 style="text-align: center"; id="header">Form</h2><br>
 <div class="flex">
    
         <form action="connect.php" method="post">
    <label>Name</label>
     <input type="text" name="fullName" placeholder="Name" required><br><br>
     <label>Email</label>
     <input type="email" name="email" placeholder="Email" required><br><br>
     <label>Contact</label>
     <input type="number" name="number" placeholder="Contact Number" required><br><br>
     <input type="submit"><br>
     <label for="male">Male</label>
     <input type="radio" id="male" name="gender" value="m">
     <label for="female">Female</label>
     <input type="radio" id="female" name="gender" value="f">
     <label for="others">Other</label>
     <input type="radio" id="others" name="gender" value="o">
    </form>
 
</div>
</body>
</html>