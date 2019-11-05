<?php
/**................................................................
 * @package website v 1.0
 * @author pomaline 
          
 * (olanrewajumoses093@gmail.com)
 * ................................................................
 */
session_start();
session_destroy();
header("location: sign-in.php");
?>