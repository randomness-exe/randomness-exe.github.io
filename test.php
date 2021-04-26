<?php
 $test = ($_POST['test']);
 $dasdas = "add to file";
 $handle = fopen('save.log', 'a');
 fwrite($handle, $dasdas);
 fclose($handle);
 



>
