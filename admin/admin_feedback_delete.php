<?php
// Include the database connection file

include("dbcon.php");
// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$sql = "DELETE FROM feedback WHERE rid = $id";

if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Deleted!!");
                    window.location="admin_feedback.php";
                    </script>';
        }
?>
        
