<?php
 $con = mysqli_connect("localhost","root","","roomkhoji");

 $sql = "SELECT * FROM tbl_comment ORDER BY parent_comment_id asc, comment_id asc";

$result = mysqli_query($con, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($con);
echo json_encode($record_set);
?>