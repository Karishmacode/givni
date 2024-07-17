    <?php 
                    $con = mysqli_connect('localhost','root');
                    mysqli_select_db($con,'givni_in');

                    if(isset($_POST['submit'])){
                        $appname = $_POST['appname'];
                        $appimage = $_FILES['appimage'];
                        $logo = $_FILES['logo'];

                    
                        
                        $app_image = $appimage['name'];
                        $error_image = $appimage['error'];
                        $temp_image = $appimage['tmp_name'];
                        $ext_image = explode('.',$app_image );
                        $check_image = strtolower(end($ext_image));
                        $fileext_image = array('png','jpg','jpeg');

                        if (in_array($check_image,$fileext_image)) {
                            $destination_image = 'upload/'.$app_image;
                            move_uploaded_file($temp_image, $destination_image);

                            $q1 = "INSERT INTO `client_product`(`appname`, `appimage`) VALUES ('$appname','$app_image')";
                            $query = mysqli_query($con,$q1);
                            $displayquery = "select * from client_product";
                            $querydisplay = mysqli_query($con,$displayquery);

                            // $row = mysqli_num_rows($querydisplay);

                            while($result = mysqli_fetch_array($querydisplay)){
                                ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="text" name="appname">
		<input type="file" name="appimage">
		<input type="file" name="logo">
		<input type="submit" name="submit" value="Submit">
	</form>
<?php 
}
}
}
?>
</body>
</html>