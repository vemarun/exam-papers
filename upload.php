<?php require_once "phpuploader/include_phpuploader.php" ?>
    <html>
    <head>
        <title>KhichPich - Exam Question papers and solutions</title>
        <link href="styles.css" rel="stylesheet">
        <link href="flexslider.css" rel="stylesheet">
         <link href="css/animate.css" rel="stylesheet">
                <!bootstrap>
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="assets/js/jquery.filedrop.js"></script>
   <script src="js/upload.js"></script>

<style></style>

</head>

<body onload="_l='t';">

  <ul class="navigation">
    
    <li class="nav-item"><a href="Engineering/">Engineering Exams</a></li>
    <li class="nav-item"><a href="Medical/">Medical Exams</a></li>
    <li class="nav-item"><a href="http://www.upsc.gov.in/questionpaper/index.htm">UPSC Exams</a></li>
    <li class="nav-item"><a href="SSC Exams/">SSC Exams</a></li>
    <li class="nav-item"><a href="Bank Competitive Exams/">Bank Competitive Exams</a></li>
    <li class="nav-item"><a href="Defence Exams/">Defence Exams</a></li>
    <li class="nav-item"><a href="CAT/">CAT</a></li>
    <li class="nav-item"><a href="GATE/">GATE</a></li>
    <li class="nav-item"><a href="http://www.khichpich.com/olympiad.htm">olympiad</a></li>
    <li class="nav-item"><a href="univ/">University papers</a></li>
    <li class="nav-item"><a href="exams.htm">Upcoming exams</a></li>
    <li class="nav-item"><a href="books.htm">Books</a></li>
</ul>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
<!-- site wrap -->
<div class="site-wrap">
	<a href="http://www.khichpich.com"><img class="header" src="1.png" alt="wallpaperheading"></a>
   <a href="upload.php"><img class="float" src="img/upload.jpg"></a>
     
<?php require_once "phpuploader/include_phpuploader.php" ?>
<br><br><br>       
        <form id="form1" method="POST" align="center">    
            <?php    
                // Create Uploader object.    
                $uploader=new PhpUploader();    
                // Set a unique name to Uploader    
                $uploader->Name="myuploader";     

                $uploader->UploadCursor ="Hand";    

                $uploader->UploadingMsg="Uploading..";    
                // Specify the maximum allowed size of the file using MaxSizeKB property    
                $uploader->MaxSizeKB=10240;  

                $uploader->FileTooLargeMsg="{0} cannot be uploaded!\n\nMagazines and books not allowed .Allowed maximum file size is : {2}."; 

                $uploader->AllowedFileExtensions="pdf,epub";

                $uploader->FileTypeNotSupportMsg="This file extension is not allowed! File extensions allowed: '{0}'";    

                $uploader->SaveDirectory="uploads"; 
                // Render Uploader    
                $uploader->Render();    
            ?>    
        </form> 


<?php    
//Gets the GUID of the file based on uploader name    
$fileguid=@$_POST["myuploader"];    
if($fileguid)    
{    
    //get the uploaded file based on GUID    
    $mvcfile=$uploader->GetUploadedFile($fileguid);    
    if($mvcfile)    
    {    
        //Gets the name of the file.    
        echo($mvcfile->FileName);    
        //Gets the temp file path.    
        echo($mvcfile->FilePath);    
        //Gets the size of the file.    
        echo($mvcfile->FileSize);     
            
        //Copys the uploaded file to a new location.    
        $mvcfile->CopyTo("/uploads");    
        //Moves the uploaded file to a new location.    
        $mvcfile->MoveTo("/uploads");    
        //Deletes this instance.    
        $mvcfile->Delete();    
    }    
}    
?>

<p>&nbsp;</p>
<p>&nbsp;</p>

<center><b>Recent Submissions:</b><br>

<?php
$dir_open = opendir('uploads/');
   while(false !== ($filename = readdir($dir_open))){
        if($filename != "." && $filename != ".."){
        $link = "<a href='uploads/$filename'> $filename </a><br />";
        echo $link;
    }
}

closedir($dir_open);
?>
</center>

<p>&nbsp;</p>
<p>&nbsp;</p>
<center><b>To upload multiple PDFs<a href="multiupload.php">click here:</a></b>
</center> 

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="footer">
<ul class="footer">
<li class="footer"><a class="footer" href="http://www.khichpich.com/">Home</a></li>
<li class="footer"><a class="footer" href="about.htm">About</a></li>
<li class="footer"><a class="footer" href="contact.htm">Contact</a></li>
<li class="footer"><a class="footer" href="feedback.htm">Feedback</a></li>
<li class="footer"><a class="footer" href="privacy.htm">Privacy</a></li>
<li class="footer"><a class="footer" href="copyright.htm">copyright</a></li>
<li class="footer"><a class="footer" href="disclaimer.htm">Disclaimer</a></li>
<li class="footer"><a class="footer" href="advertise.htm">Advertise</a></li>
</ul>
</div>
</div>
</body>
</html>
