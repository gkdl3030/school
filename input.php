<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>학교관리페이지</title>
</head>
<body>
<form action="inputok.php" method="post">
<div>
이름<input type="text" name="mname"><br>
</div>
<div>
전화번호<input type="text" name="mtel"><br>
</div>
<div>
주소
<select name="mjuso">
    <option value="서울특별시">서울특별시</option>
    <option value="경기도">경기도</option>
    <option value="강원도">강원도</option>
    <option value="충청북도">충청북도</option>
    <option value="전라북도">전라북도</option>
    <option value="전라남도">전라남도</option>
    <option value="경상북도">경상북도</option>
    <option value="경상남도">경상남도</option>
  </select>
  
</div>
<input type="submit">
</form>
</body>
</html> 