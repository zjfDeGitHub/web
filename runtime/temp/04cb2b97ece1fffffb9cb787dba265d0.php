<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"C:\phpStudy\PHPTutorial\WWW\tp5\public/../application/admin\view\exceluser\index.htm";i:1542523560;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="http://localhost/tp5/public/static/admin/style/bootstrap.css" rel="stylesheet">
</head>
<body>
<br>
<center><h2>学生表导入/导出页面</h2></center>
<br>
<br>
<p style="color:red">请使用(.xlsx)后缀的excel表格。</p>
<p style="color:red">execl表格默认第一行将被忽略请注意！！！</p>
<br>
<form action="<?php echo url('test/inserExcel'); ?>" enctype="multipart/form-data" method="post">
    <input type="file" name="excel" />
    <input type="submit" value="导入">
</form>
<br>
<p style="color:red">请严格按照下面样式建表！！！</p>
<img src="http://localhost/tp5/public/static/admin/Images/excel.png" >
<p>
<button class="btn btn-warning"><a type="button" href="<?php echo url('Exceluser/exportExcel'); ?>">导出</a></button>
    <button class="btn btn-warning"><a type="button" href="<?php echo url('/admin/index'); ?>">返回</a></button>

</body>
</html>