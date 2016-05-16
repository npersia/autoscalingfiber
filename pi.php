<?php
$pi = 4; $top = 4; $bot = 3; $minus = TRUE;
$accuracy = 9999999999999999999999999999999;

for($i = 0; $i < $accuracy; $i++)
{
  $pi += ( $minus ? -($top/$bot) : ($top/$bot) );
  $minus = ( $minus ? FALSE : TRUE);
  $bot += 2;
}
echo "Pi ~=: " . $pi;


?>
