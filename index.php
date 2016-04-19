
<!doctype html>
<html>
    <head><title>Multiple File Upload</title></head>
    <body>
        <p>Hold control and select multiple files to upload max size 2.5Mb</p>
        <form action="submit.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <input type="file" class="form-control" name="imagefile[]" id="imagefile" multiple required>
        <input type="submit" name='submit'>
        </form>
    </body>
</html>