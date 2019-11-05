<?php
/**................................................................
 * @package website 1.0
 * @author pomaline moses
 * prime leonard P-M            
 * (olanrewajumoses093@yahoo.com.com)
 * ................................................................
 */


	include'../connect.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM events WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-events.php?success=true");
        }else{
            header("location:all-events.php?failed=true");
        } 
		
?>