<html>
	<head>
    	<title>FORM TO UPLOAD A FILE</title>
    </head>
    <body>
    	<form action="#" method="POST" enctype="multipart/form-data">
            <p>
            	file: <input type="file" name="uploadedFile" value=""/>
            </p>
            <p>
            	<input type="submit" name="upload" value="upload"/>
            </p>
        </form>
    </body>
</html>

<?php 


if( isset($_POST['upload']) ){
echo "<pre>";
print_r($_FILES);
echo "</pre>";


$fileName = $_FILES['uploadedFile']['name'];
$fileTempName = $_FILES['uploadedFile']['tmp_name'];
$path = "/Desktop/Becode_Projects/";
$newPathAndName = $path . $fileName;
if( move_uploaded_file($fileTempName, $newPathAndName) ){
    echo "The file has been successfully uploaded";
    } else {
    echo "Could not upload the file";
    }
}
 ?>