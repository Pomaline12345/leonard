<?php 
/**................................................................
 * @package website 1.0
 * @author pomaline moses
 * prime leonard P-M            
 * (olanrewajumoses093@yahoo.com.com)
 * ................................................................
 */


include '../connect.php';
$body = $_POST['body'];

//$query = ORM ::for_table('tbl_about')->create();
//$query->body=$body;
//$query->save();


$query = ORM::for_table('tbl_resources')->find_one(1);

// The following two forms are equivalent
//$query = $body->get('body');
$query ->body = $body;
$query ->save();
if($query->save()){
      header("location:add-program.php?success=true");
        }else{
            header("location:add-program.php?failed=true");
        }


?>
