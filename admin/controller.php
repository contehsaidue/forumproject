<?php
    session_start(); // starting a session

   include '../includes/config.php';

  if (isset($_POST['adminlogin'])){
         
    // checking values from database
      $username = $_POST['username'];
      $password = $_POST['password'];
  
  // query to search for student in system database
      
  $sql = "SELECT * FROM tbladmin WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
        // checking query status inside DB
            if(mysqli_num_rows($result) > 0) {
        
            $row = mysqli_fetch_assoc($result);
                  if($row['username'] === $username && $row['password'] === $password){
                   
                    // creating session variables
                    $_SESSION['adminid'] = $row['adminid'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['lname'] = $row['lname'];
                    $_SESSION['photo'] = $row['photo'];

                $_SESSION['status'] = "Welcome back online!";
                $_SESSION['type'] = "success";
                    header('Location:dashboard.php');
                    exit();
                  }
                } else{
                   $_SESSION['status'] = "There was an error in your login attempt!";
                   $_SESSION['type'] = "error";
                   header('Location:../index.php');
               }
                }

                // Query for updating personal records ADMIN
                if(isset($_POST['adminupdate'])){
                    $adminid = $_POST['adminid'];
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                      // Image type 
                      $photoname = $_FILES['photo']['name'];
                      $admin_image_tempname = $_FILES['photo']['tmp_name'];
                  
                    // checking image file type
                    $admin_image_type = strtolower(pathinfo( $photoname , PATHINFO_EXTENSION));
                    // valid file extensions
                    $extensions_arr = array("jpg","jpeg","png");
                
                    $folder = "../assets/members/".$photoname; // storing image path to folder in root directory
                    $folderdb = "assets/members/".$photoname; // storing image path into database
                   
                    if(in_array( $admin_image_type , $extensions_arr)){
                    $sql="UPDATE tbladmin
                            SET username='$username', password = '$password',
                                fname = '$fname',lname = '$lname',
                               photo = '$folderdb'  WHERE adminid = '$adminid'";
                    move_uploaded_file( $admin_image_tempname , $folder);
                
                    if (mysqli_query($conn, $sql)) {
                        $_SESSION['status'] = "You've successfully updated your records!";
                        $_SESSION['type'] = "success";
                        header("Location: admin-profile.php");
                    } else{
                        $_SESSION['status'] = "Record update failed!";
                        $_SESSION['type'] = "error";
                        header("Location: admin-profile.php");
                    }
                }else{
                    $_SESSION['status'] = "Image type not supported - Supported image type (jpg, jpeg, png)!";
                    $_SESSION['type'] = "error";
                    header("Location: admin-profile.php");
                }
                   
          }

// Send email
if(isset($_POST['sendmessage'])){

  $name = strip_tags(htmlspecialchars($_POST['sender']));
  $email = strip_tags(htmlspecialchars($_POST['email']));
  $message = strip_tags(htmlspecialchars($_POST['message']));
  
  // Create the email and send the message
  $to = "forumforcommunityd@gmail.com"; // Add your email address in between the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
  $subject = "Website Contact Form:  $name";
  $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
  $header = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
  $header .= "Reply-To: $email";	
  
  if(mail($to, $subject, $body, $header)){
    $_SESSION['status'] = "Mail successfully sent";
    $_SESSION['type'] = "success";
    header('Location: ../contact.php');
 } else{
    $_SESSION['status'] = "Failed to send mail!";
    $_SESSION['type'] = "error";
    header('Location: ../contact.php');
 }
 


}
                // Query to add course into Database : ADMIN
if (isset($_POST['admincontact'])){
  // capturing input values
  $bg_text = $_POST['bgtext'];
  $bg_image = $_FILES['bgimage']['name'];
  $bg_image_tempname = $_FILES['bgimage']['tmp_name'];
  $email= $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
 
    // checking image file type
    $bg_image_type = strtolower(pathinfo($bg_image, PATHINFO_EXTENSION));
    // valid file extensions
   $extensions_arr = array("jpg","jpeg","png");

   $root_path = "../assets/images/".$bg_image; // storing image path to folder in root directory
   $db_path = "assets/images/".$bg_image; // storing image path into database

   if(in_array($bg_image_type, $extensions_arr)){

  // Insert course string
  $sql = "INSERT INTO tblcontact (bgtext,bgimage,email,address,phone)
           VALUES ('$bg_text','$db_path','$email',' $address','$phone')";
 
     move_uploaded_file($bg_image_tempname , $root_path);

  if (mysqli_query($conn, $sql)) {
   $_SESSION['status'] = "Contact details successfully added";
   $_SESSION['type'] = "success";
   header('Location: dashboard-contact.php');
} else{
   $_SESSION['status'] = "Failed to add contact details!";
   $_SESSION['type'] = "error";
   header('Location: dashboard-contact.php');
}
 }
}

// delete contact action using the $_GET variable : ADMIN
if(isset($_GET['deletecontact'])){
  $id = $_GET['deletecontact'];
  $sql ="DELETE FROM tblcontact WHERE contactid = '$id'";
  if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "Contact successfully removed";
      $_SESSION['type'] = "success";
      header('Location: dashboard-contact.php');
  } else{
      $_SESSION['status'] = "Failed to remove contact!";
      $_SESSION['type'] = "error";
      header('Location: dashboard-contact.php');
  }
}

if (isset($_POST['adminabout'])){
  // capturing input values
  $bg_text = $_POST['bgtext'];
  $bg_image = $_FILES['bgimage']['name'];
  $bg_image_tempname = $_FILES['bgimage']['tmp_name'];
  $title = $_POST['title'];
  $text = $_POST['text'];
 
    // checking image file type
    $bg_image_type = strtolower(pathinfo($bg_image, PATHINFO_EXTENSION));
    // valid file extensions
   $extensions_arr = array("jpg","jpeg","png");

   $root_path = "../assets/images/".$bg_image; // storing image path to folder in root directory
   $db_path = "assets/images/".$bg_image; // storing image path into database

   if(in_array($bg_image_type, $extensions_arr)){

  // Insert course string
  $sql = "INSERT INTO tblabout (bgtext,bgimage,title,text)
           VALUES ('$bg_text','$db_path','$title','$text')";
 
     move_uploaded_file($bg_image_tempname , $root_path);

  if (mysqli_query($conn, $sql)) {
   $_SESSION['status'] = "About details successfully added";
   $_SESSION['type'] = "success";
   header('Location: dashboard-about.php');
} else{
   $_SESSION['status'] = "Failed to add about details!";
   $_SESSION['type'] = "error";
   header('Location: dashboard-about.php');
}
 }
}

// delete about action using the $_GET variable : ADMIN
if(isset($_GET['deleteabout'])){
  $id = $_GET['deleteabout'];
  $sql ="DELETE FROM tblabout WHERE aboutid = '$id'";
  if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "About details successfully removed";
      $_SESSION['type'] = "success";
      header('Location: dashboard-about.php');
  } else{
      $_SESSION['status'] = "Failed to remove about details!";
      $_SESSION['type'] = "error";
      header('Location: dashboard-about.php');
  }
}


if (isset($_POST['adminimage'])){
  // capturing input values
  $islogan = $_POST['islogan'];
  $image = $_FILES['image']['name'];
  $image_tempname = $_FILES['image']['tmp_name'];
  $itext = $_POST['itext'];
 
    // checking image file type
    $image_type = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    // valid file extensions
   $extensions_arr = array("jpg","jpeg","png");

   $root_path = "../assets/gallery/".$image; // storing image path to folder in root directory
   $db_path = "assets/gallery/".$image; // storing image path into database

   if(in_array($image_type, $extensions_arr)){

  // Insert course string
  $sql = "INSERT INTO tblgallery (imageslogan,imagetext,image)
           VALUES ('$islogan','$itext','$db_path')";
 
     move_uploaded_file($image_tempname , $root_path);

  if (mysqli_query($conn, $sql)) {
   $_SESSION['status'] = "Image successfully added";
   $_SESSION['type'] = "success";
   header('Location: dashboard-gallery.php');
} else{
   $_SESSION['status'] = "Failed to add image!";
   $_SESSION['type'] = "error";
   header('Location: dashboard-gallery.php');
}
 }
}

// delete image action using the $_GET variable : ADMIN
if(isset($_GET['deleteimage'])){
  $id = $_GET['deleteimage'];
  $sql ="DELETE FROM tblgallery WHERE galleryid = '$id'";
  if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "Image successfully removed";
      $_SESSION['type'] = "success";
      header('Location: dashboard-gallery.php');
  } else{
      $_SESSION['status'] = "Failed to remove image!";
      $_SESSION['type'] = "error";
      header('Location: dashboard-gallery.php');
  }
}



if (isset($_POST['adminaddmember'])){
  // capturing input values
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $image = $_FILES['profile']['name'];
  $image_tempname = $_FILES['profile']['tmp_name'];
  $position = $_POST['position'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
 
    // checking image file type
    $image_type = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    // valid file extensions
   $extensions_arr = array("jpg","jpeg","png");

   $root_path = "../assets/members/".$image; // storing image path to folder in root directory
   $db_path = "assets/members/".$image; // storing image path into database

   if(in_array($image_type, $extensions_arr)){

  // Insert course string
  $sql = "INSERT INTO tblmembers (fname,lname,profile,position,email,phone)
           VALUES ('$fname','$lname','$db_path','$position','$email','$phone')";
 
     move_uploaded_file($image_tempname , $root_path);

  if (mysqli_query($conn, $sql)) {
   $_SESSION['status'] = "Member successfully added";
   $_SESSION['type'] = "success";
   header('Location: dashboard-about.php');
} else{
   $_SESSION['status'] = "Failed to add member!";
   $_SESSION['type'] = "error";
   header('Location: dashboard-about.php');
}
 }
}

// delete member details action using the $_GET variable : ADMIN
if(isset($_GET['deletemember'])){
  $id = $_GET['deletemember'];
  $sql ="DELETE FROM tblmembers WHERE memberid = '$id'";
  if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "Member successfully removed";
      $_SESSION['type'] = "success";
      header('Location: dashboard-about.php');
  } else{
      $_SESSION['status'] = "Failed to remove member!";
      $_SESSION['type'] = "error";
      header('Location: dashboard-about.php');
  }
}


// Query to add blog settings into Database : ADMIN
if (isset($_POST['adminblog'])){
  // capturing input values
  $bg_text = $_POST['bgtext'];
  $bg_image = $_FILES['bgimage']['name'];
  $bg_image_tempname = $_FILES['bgimage']['tmp_name'];
  
    // checking image file type
    $bg_image_type = strtolower(pathinfo($bg_image, PATHINFO_EXTENSION));
    // valid file extensions
    $extensions_arr = array("jpg","jpeg","png");

    $root_path = "../assets/images/".$bg_image; // storing image path to folder in root directory
    $db_path = "assets/images/".$bg_image; // storing image path into database

    if(in_array($bg_image_type, $extensions_arr)){

  // Insert course string
  $sql = "INSERT INTO tblblogsettings (bgtext,bgimage)
            VALUES ('$bg_text','$db_path')";
  
      move_uploaded_file($bg_image_tempname , $root_path);

  if (mysqli_query($conn, $sql)) {
    $_SESSION['status'] = "Setting successfully set!";
    $_SESSION['type'] = "success";
    header('Location: dashboard-blog.php');
} else{
    $_SESSION['status'] = "Failed to save settings!";
    $_SESSION['type'] = "error";
    header('Location: dashboard-blog.php');
}
  }
}
                
// delete blog settings action using the $_GET variable : ADMIN
if(isset($_GET['deletesettings'])){
  $id = $_GET['deletesettings'];
  $sql ="DELETE FROM tblblogsettings WHERE blogid = '$id'";
  if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "Settings successfully removed";
      $_SESSION['type'] = "success";
      header('Location: dashboard-blog.php');
  } else{
      $_SESSION['status'] = "Failed to remove settings!";
      $_SESSION['type'] = "error";
      header('Location: dashboard-blog.php');
  }
}


// Query to add homepage settings into Database : ADMIN
if (isset($_POST['adminindex'])){
  // capturing input values
  $bg_text = $_POST['bgtext'];
  $bg_image = $_FILES['bgimage']['name'];
  $bg_image_tempname = $_FILES['bgimage']['tmp_name'];
  
    // checking image file type
    $bg_image_type = strtolower(pathinfo($bg_image, PATHINFO_EXTENSION));
    // valid file extensions
    $extensions_arr = array("jpg","jpeg","png");

    $root_path = "../assets/images/".$bg_image; // storing image path to folder in root directory
    $db_path = "assets/images/".$bg_image; // storing image path into database

    if(in_array($bg_image_type, $extensions_arr)){

  // Insert course string
  $sql = "INSERT INTO tblindexsettings (bgtext,bgimage)
            VALUES ('$bg_text','$db_path')";
  
      move_uploaded_file($bg_image_tempname , $root_path);

  if (mysqli_query($conn, $sql)) {
    $_SESSION['status'] = "Homepage setting successfully set!";
    $_SESSION['type'] = "success";
    header('Location: dashboard-homepage.php');
} else{
    $_SESSION['status'] = "Failed to save homepage settings!";
    $_SESSION['type'] = "error";
    header('Location: dashboard-homepage.php');
}
  }
}
                
// delete contact action using the $_GET variable : ADMIN
if(isset($_GET['deleteindexsettings'])){
  $id = $_GET['deleteindexsettings'];
  $sql ="DELETE FROM tblindexsettings WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "Homepage settings successfully removed";
      $_SESSION['type'] = "success";
      header('Location: dashboard-homepage.php');
  } else{
      $_SESSION['status'] = "Failed to remove homepage settings!";
      $_SESSION['type'] = "error";
      header('Location: dashboard-homepage.php');
  }
}


// Query to add blog settings into Database : ADMIN
if (isset($_POST['adminpost'])){
  // capturing input values
  $author = $_POST['author'];
  $title = $_POST['title'];
  $bg_image = $_FILES['postimage']['name'];
  $bg_image_tempname = $_FILES['postimage']['tmp_name'];
  $post = $_POST['posttext'];
    // checking image file type
    $bg_image_type = strtolower(pathinfo($bg_image, PATHINFO_EXTENSION));
    // valid file extensions
    $extensions_arr = array("jpg","jpeg","png");

    $root_path = "../assets/images/".$bg_image; // storing image path to folder in root directory
    $db_path = "assets/images/".$bg_image; // storing image path into database

    if(in_array($bg_image_type, $extensions_arr)){

  // Insert course string
  $sql = "INSERT INTO tblblog (author,title,postimage,posttext)
            VALUES ('$author','$title','$db_path','$post')";
  
      move_uploaded_file($bg_image_tempname , $root_path);

  if (mysqli_query($conn, $sql)) {
    $_SESSION['status'] = "Post successfully published!";
    $_SESSION['type'] = "success";
    header('Location: dashboard-blog.php');
} else{
    $_SESSION['status'] = "Failed to publish post!";
    $_SESSION['type'] = "error";
    header('Location: dashboard-blog.php');
}
  }else{
    $_SESSION['status'] = "Image type not supported!";
    $_SESSION['type'] = "error";
    header('Location: dashboard-blog.php');
  }
}
  
  // delete post action using the $_GET variable : ADMIN
  if(isset($_GET['deletepost'])){
    $id = $_GET['deletepost'];
    $sql ="DELETE FROM tblblog WHERE postid = '$id'";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "Post successfully removed";
        $_SESSION['type'] = "success";
        header('Location: dashboard-blog.php');
    } else{
        $_SESSION['status'] = "Failed to remove post!";
        $_SESSION['type'] = "error";
        header('Location: dashboard-blog.php');
    }
  }
    ?>