<?php
include("./dbcon.php");

$no = $_POST["mno"];
$name = $_POST["mname"];
$tel = $_POST["mtel"];
$juso = $_POST["juso"];


$sql = "UPDATE member SET mname='$name', mtel='$tel', mjuso='$juso' WHERE mno=".$no;

if (mysqli_query($conn, $sql)) {
  echo "정보가 수정되었습니다.";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
<div>
<a href="./input.php">학교정보입력</a>
<a href="./list.php">학교목록</a>
</div>