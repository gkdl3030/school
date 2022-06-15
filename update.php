<?php
include("./dbcon.php");

$no = $_GET["no"];

$sql = "SELECT * FROM member where mno=".$no;
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $nameprt = $row["mname"];
    $telprt = $row["mtel"];
    $jusoprt = $row["mjuso"];

  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>학교관리페이지</title>
</head>
<body>
<form action="updateok.php" method="post">
  <input type="hidden" name = "mno" value="<?php echo $no; ?>">
<div>
이름<input type="text" name="mname" value='<?php echo $nameprt; ?>'>
</div>
<div>
전화번호<input type="text" name="mtel"value='<?php echo $telprt; ?>'>
</div>

주소
<select name="juso">
    <option value="서울특별시"<?php if($jusoprt =="서울특별시") echo "selected";?> >서울특별시</option>
    <option value="경기도"<?php if($jusoprt =="경기도") echo "selected";?> >경기도</option>
    <option value="강원도"<?php if($jusoprt =="강원도") echo "selected";?> >강원도</option>
    <option value="충청북도"<?php if($jusoprt =="충청북도") echo "selected";?> >충청북도</option>
    <option value="전라북도"<?php if($jusoprt =="전라북도") echo "selected";?> >전라북도</option>
    <option value="전라남도"<?php if($jusoprt =="전라남도") echo "selected";?> >전라남도</option>
    <option value="경상북도"<?php if($jusoprt =="경상북도") echo "selected";?> >경상북도</option>
    <option value="경상남도"<?php if($jusoprt =="경상남도") echo "selected";?> >경상남도</option>
  </select>
</div>

</div>
<input type="submit" value="수정">
</form>

</body>
</html> 