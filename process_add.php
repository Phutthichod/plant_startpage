<?php
    include("./connectdb.php");
    $p_species=$_POST['p_species'];
    $p_genus=$_POST['p_genus'];
    $p_alias=$_POST['p_alias'];
    $p_color=$_POST['p_color'];
    $p_icon=$_POST['p_icon'];
    $p_description=$_POST['p_description'];
    if($p_icon == ""){
        $p_icon="default5.jpg";
    }

    
        $sql="INSERT INTO plant (p_id,p_species,p_genus,p_alias,p_color,p_icon,p_description)
            VALUES ('','$p_species','$p_genus','$p_alias','$p_color','$p_icon','$p_description')";
    
        
 
    // $fileupload = $_REQUEST['']; //รับค่าไฟล์จากฟอร์ม		
    // $date = date("d-m-Y"); //กำหนดวันที่และเวลา
    // //เพิ่มไฟล์
    // $upload=$_FILES['p_icon'];
    // if($upload <> '') {   //not select file
    // //โฟลเดอร์ที่จะ upload file เข้าไป 
    // $path="fileupload/";  
     
    // //เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
    //     $remove_these = array(' ','`','"','\'','\\','/','_');
    //     $newname = str_replace($remove_these, '', $_FILES['p_icon']['name']);
     
    //     //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    //     $newname = time().'-'.$newname;
    // $path_copy=$path.$newname;
    // $path_link="fileupload/".$newname;
     
    // //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
    // move_uploaded_file($_FILES['p_icon']['tmp_name'],$path_copy);  	
    //     }
    if($con->query($sql)==TRUE){
        echo "<script>";
        echo "alert('New record created successfully');";
        echo "window.location.href='./startPage.php';";
        echo "</script>";
    }else{
        echo "ERROR".$sql."<BR>".$con->error;
    }
?>