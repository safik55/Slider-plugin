<?php
if(isset($_POST['submit_image']))
{
    $images_array=array();
     foreach($_FILES['images']['name'] as $key=>$val){
    
     $uploadfile=$_FILES["images"]["tmp_name"][$key];
     $folder="images/";
     $target_file = $folder.$_FILES['images']['name'][$key];
     if(move_uploaded_file($_FILES["images"]["tmp_name"][$key], "$folder".$_FILES["images"]["name"][$key])){
         $images_array[] = $target_file;
     }
    }
}
if(!empty($images_array)){ 
    foreach($images_array as $src){ ?>
        <ul>
            <li >
                <img src="<?php echo $src; ?>">
            </li>
        </ul>
<?php }
}
?>


<?php
/* if(isset($_POST['submit_image']))
{
for($i=0;$i<count($_FILES["upload_file"]["name"]);$i++)
{
 $uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
 $folder="images/";
 move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "$folder".$_FILES["upload_file"]["name"][$i]);
}
exit();
} */
?>