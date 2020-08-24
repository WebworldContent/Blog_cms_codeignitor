<!DOCTYPE html>
<html>
<title>file</title>
<body>

<form action="<?=base_url()?>admin/upload" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>