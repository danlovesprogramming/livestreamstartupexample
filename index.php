
<form action="action.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>


Hi <?php echo ucfirst(htmlspecialchars($_POST['name'])); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.


<?php echo "<br /><br />"?>

<?php
echo $_SERVER['REQUEST_URI'];
echo "<br />";

echo $_SERVER['HTTP_USER_AGENT'];

?>
