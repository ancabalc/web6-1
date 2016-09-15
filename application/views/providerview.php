<!doctype html>
<html>
<head>
<title>Provider Page</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<h1>Provider</h1>

<div class="prov-container"></div>
    <div class="top-info">
        <div class="photo"></div>
<?php echo $error;?>

<?php echo form_open_multipart('provider/upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="Upload" />

</form>
        </div>
        <div class="details">
            <p class="prov-info">
                Nume:<br>
                Oras:<br>
                E-mail:                
            </p>
        </div>
    </div>
    <div class="bot-info">
        
            <form method="POST">
                <textarea class rows="4" cols="50" placeholder="Describe your activity"></textarea>
                <br>
                <input type="submit">
            </form>
        
    </div>
</div>

</body>
</html>