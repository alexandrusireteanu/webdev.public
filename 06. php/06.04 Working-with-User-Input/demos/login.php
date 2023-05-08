<form method="post" action="login.php">
    <label for="username">Username</label>
    <input type="text" id="username" name="username"/><br />
    <label for="password">Password</label>
    <input type="password" id="password" name="password"/><br />
    <input type="submit" value="Submit"/>
</form>

<div style="text-align:center">
    
<?php
    if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST["username"]) && !empty($_POST["password"])) 
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo "Hello " . $username . "<br />"  ;
        echo "Your password is " . $password . "<br />"  ;
    }
?>
</div>