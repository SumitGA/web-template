<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<!--

  News-Reporter responsive template by Whatevercodes
  http://www.whatevercodes.com | Alin
  Free for personal and commercial use under the GNU General Public License (whatevercodes.com/license).
  
  You are not permitted to upload this template directly in your site for download.
  But you can refer people's to download this template from http://www.whatevercodes.com

-->
  <head>
    <title>Dainiki Khabar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--<div id="google_translate_element">
            </div>
            <script type="text/javascript">
            $.cookie("googtrans", "en/np/");
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <script type="text/javascript" 
                src="http://www.google.com/jsapi"></script> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="font/bebas/stylesheet.css">
    <link href="style.css" rel="stylesheet" media="screen"> 
    <link href="responsive.css" rel="stylesheet" media="screen">    
    <link href="css/jquery.bxslider.css" rel="stylesheet" media="screen"> 

<script type="text/javascript">
 // Initialize version 1.0 of Google AJAX API
 google.load("language", "1");

 function translate(lang) {
   var source = document.getElementById("article").innerHTML;
   var len = content.length;

   // Google Language API accepts 500 characters per request 
   var words = 500;

   // This is for English pages, you can change the
   // sourcelang variable for other languages
   var sourcelang = "en";
   document.getElementById("translation").innerHTML = "";

   for(i=0; i<=(len/words); i++) {
     google.language.translate (source.substr(i*words, words), 
                 "en", lang, function (result) {
     if (!result.error) {
     document.getElementById("translation").innerHTML
           = document.getElementById("translation").innerHTML 
           + result.translation;
    } }); }  
  
  // Hide the text written in the original language
  document.getElementById("article").style.display = 'none';
  return false;
 }

 // Switch to the original language

 function original() {
  document.getElementById("translation").style.display='none';
  document.getElementById("article").style.display = 'block';   
  return false;
 }
</script>
    
 
  </head>