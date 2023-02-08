<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
    // define variables and set to empty values
    $text1 = $text2="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text1 = test_input($_POST["text1"]);
    $text2 = test_input($_POST["text2"]);

    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
text1: <input type="text" name="text1">
<br><br>
text2: <input type="text" name="text2">
<br><br>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $text1;
echo "<br>";
echo $text2;
echo "<br>";

?>

</body>
</html>