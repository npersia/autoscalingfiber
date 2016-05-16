<!doctype html>
<html> 
<?php 

$i = 1;
while ($i <= 999999999999999999) {
    $i++;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */


    shell_exec('php pi.php &');

}



?> 
</html> 
