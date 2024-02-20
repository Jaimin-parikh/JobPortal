<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        label,.submit{
            margin-left: 230px;
            margin-top: 10px;
        }

    </style>
</head>

<body>
    <h2>Complete Your Profile:
        <form action="data.php" method="post" enctype="multipart/form-data">
            <label for="fname" >Fname: <input type="text" name="fname" ></label><br><br>
            <label for="lname" >Lname: </label><input type="text" name="lname" ><br><br>
            <label for="city" >city: </label><input type="text" name="city" ><br><br>
            <label for="state" >state: </label><input type="text" name="state" ><br><br>
            <label for="phoneno" >Phone no: </label><input type="number" name="phoneno" ><br><br>
            <label for="degree" >Degree: </label><input type="text" name="degree" ><br><br>
            <label for="clg" >College/University: </label><input type="text" name="clg" ><br><br>
            <label for="resume" >Upload You're Resume here: </label><input type="file" name="resume" ><br><br>
            <input type="button" value="Submit" class="submit"><br><br>
        </form>
    </h2>
</body>

</html>