<?php
 $test = ($_POST['test']);
 $dasdas = "add to file";
 $handle = fopen('test.log', 'a');
 fwrite($handle, $dasdas);
 fclose($handle);
 



>
