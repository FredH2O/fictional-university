<?php 

function greet($name, $color){
    echo "<p> Hi, my name is $name and my fave colour is $color </p>";
}

greet("John", "Red");
greet("Jane", "Black");

?>

<h1> <?php bloginfo("name"); ?> </h1>
<p><?php bloginfo("description")?></p>