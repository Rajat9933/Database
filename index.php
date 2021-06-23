<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Data Base</title>
</head>
<body>
    <div>
    <h2 style="text-align:center; padding-top:.5%"; id="header">Registration Form</h2><br>
    <div>
    <main>
 <section class="form">
    <form action="connect.php" method="post" style="padding: 20% 0 0 20%";>
    <label><strong>Name</label>
     <input style="height:25px; width:80%; font-size:15px;" type="text" name="fullName" placeholder="Name" required><br><br>
     <label>Email</label>
     <input style="height:25px; width:80%; font-size:15px;" type="email" name="email" placeholder="Email" required><br><br>
     <label>Contact</label>
     <input style="height:25px; width:80%; font-size:15px;" type="number" name="number" placeholder="Contact Number" required><br><br>
     
     <input type="radio" id="male" name="gender" value="m">
     <label for="male">Male</label>
     <input type="radio" id="female" name="gender" value="f">
     <label for="female">Female</label>
     <input type="radio" id="others" name="gender" value="o">
     <label for="others">Other</label><br><br>
     <input type="submit"></strong>
     </section>
     </form>
     </main>
 <div class="circle1"></div>
 <div class="circle2"></div>


</body>
</html>
