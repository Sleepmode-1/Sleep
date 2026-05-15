<!DOCTYPE html>
<html>
<head>
    <title>PHP POST Method Example</title>
</head>
<body>

    <h2>User Information Form</h2>

    <form method="POST" action="">
        Name: <input type="text" name="name"><br><br>

        Course: <input type="text" name="course"><br><br>

        Email: <input type="email" name="email"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['name'];
        $course = $_POST['course'];
        $email = $_POST['email'];

        echo "<h3>Submitted Information</h3>";
        echo "Name: " . $name . "<br>";
        echo "Course: " . $course . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>

</body>
</html>