<!doctype html>
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
<style></style>

</head>

<body onload="_l='t';">
  <!-- FB SOCIAL PLUGIN  -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <ul class="navigation">
    
    <li class="nav-item"><a href="Engineering/">Engineering Exams</a></li>
    <li class="nav-item"><a href="Medical/">Medical Exams</a></li>
    <li class="nav-item"><a href="http://www.upsc.gov.in/questionpaper/index.htm">UPSC Exams</a></li>
    <li class="nav-item"><a href="SSC Exams/">SSC Exams</a></li>
    <li class="nav-item"><a href="Bank Competitive Exams/">Bank Competitive Exams</a></li>
    <li class="nav-item"><a href="Defence Exams/">Defence Exams</a></li>
    <li class="nav-item"><a href="CAT/">CAT</a></li>
    <li class="nav-item"><a href="GATE/">GATE</a></li>
    <li class="nav-item"><a href="olympiad.htm">Olympiads</a></li>
    <li class="nav-item"><a href="univ/">University papers</a></li>
    <li class="nav-item"><a href="exam.htm">Upcoming exams</a></li>
    <li class="nav-item"><a href="exam.htm">Books</a></li>
</ul>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>

<div class="site-wrap">

    <a href="http://www.khichpich.com/"><img class="header" src="1.png" alt="wallpaperheading"></a>
    <a href="upload.php"><img class="float" src="img/upload.jpg"></a>
</br>
<center><b><strong>Recent Submissions</strong></font></b><br>
  <p>&nbsp;</p>
<p>&nbsp;</p>

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
<!-- Disquss -->
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'khichpich'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</center>
<p>&nbsp;</p>
<p>&nbsp;</p>



    <div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/khichpich/" data-width="1020" data-numposts="5" data-colorscheme="light"></div> 
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

  </body></html>