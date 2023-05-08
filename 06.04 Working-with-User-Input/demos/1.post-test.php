
<?php
//$id = 1;
if (isset($_POST['names']) && !empty($_POST["names"])) {
        $namesArray = $_POST["names"];
        echo count($namesArray) . "<br />"  ;
        foreach($namesArray as $name) {
            echo $name. "<br />";
        }
} else {
    ?>

    <form method="post" action="1.post-test.php">
        <?php 
            $inputs = 5;
            for($i = 0; $i < $inputs; ++$i) {
             ?>  
            <input type="text" name="names[]" />
        <br />
        <?php        
            }
        ?>
        <input type="submit" value="Login" />
        
    </form>

<?php } ?>
