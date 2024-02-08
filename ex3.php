<?php 
$title = "Exercise 3: Variable, Strings & Operators";?>
<?php include 'header.php'?>

<h2>Exercise 3: Variable, Strings & Operators</h2>
<h3>Create a simple HTML form to collect the user’s Firstname and Lastname. 
    Use the echo statement to print “Hello [Firstname] [Lastname], 
    You are welcome to my site.”  inside an  h3 . </h3>

<form method="post" name="user_reg_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"> <br><br>
    Email: <input type="email" name="email"> <br><br>
    DOB: <input type="date" name="dob"> <br><br>
    Select color: <input type="color" name="color"> <br><br>
    <input type="submit" value="submit">  <br><br>
</form>

<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $dob = isset($_POST["dob"]) ? $_POST["dob"] : '';
    $color = isset($_POST["color"]) ? $_POST["color"] : '';

    echo "<h3>Hello $name, your email ID is: $email and date of birth is: $dob. You have selected $color color</h3>";
}
?>

<h3>HTML Table with Bootstrap Styling</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Bibek</td>
            <td>Pandey</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Madan</td>
            <td>Sharma</td>
        </tr>
    </tbody>
</table>


<h3>String Variables</h3>
<?php
$str1 = "Hello";
$str2 = "World";
$joinedString = $str1 . ' ' . $str2;
echo "Joined String: $joinedString<br>";
echo "Length of the String: " . strlen($joinedString);
?>


<h3>Number Addition</h3>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;
echo "Sum of the numbers: $sum";
?>


<h3>Browser Detection</h3>
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "User Agent: $userAgent";
?>
<?php include 'footer.php'; ?>



