<?php
include("./dbcon.php");

$name = $_POST["mname"];
$tel = $_POST["mtel"];
$juso = $_POST["mjuso"];

$sql = "INSERT INTO member (mname, mtel, mjuso) VALUES ('$name', '$tel', '$juso')";

// echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "데이터가 저장되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<div>
<a href="./input.php">학교입력</a>
<a href="./list.php">학교입력목록</a>
</div>
</div>