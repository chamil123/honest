<?php
error_reporting(E_ERROR || E_WARNING);
$member_class=$_REQUEST['member_class'];
require_once '../database/connection.php';
include './Model/MemberModel.php';

$member = new Member();
$result=$member->getMemberByClass($member_class);

?>
    <select  name="member_type" id="member_type" class="form-control required">
        <option value="">-------------Plese select member-----------</option> 
            <?php
            while ($row= mysqli_fetch_array($result)){?>
               <option value="<?php echo $row['member_class_id']?>"><?php echo $row['member_class_name']?></option> 
           <?php }
            ?>

    </select>
