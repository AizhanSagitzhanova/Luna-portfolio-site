<html>
<body>
<?php Form:: open(array('url'=> '/uploadfile', 'files =>'true'));
echo 'Select the file to upload.';
echo Form::file ('image');
echo Form:: submit('Upload File');
echo From:: close();
?>
</body>
</html>
