<?php
    require_once(__DIR__ . "/../model/config.php"); // now config is linked to nav and we can use the variable
?>
<nav>
    <ul>
        <li>
            <a href="<?php echo $path . "post.php" ?>">Blog Post Form</a> <!-- this leads us to post.php when clicked; 
                                           the backslash means look into the web root-->
        </li>
    </ul>
</nav>