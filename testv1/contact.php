<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>James Buchanan | Contact</title>

    <script src="js/modernizr.js"></script>

    <!--[if (gt IE 8) | (IEMobile)]><!-->
    <link rel="stylesheet" href="css/step4.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--<![endif]-->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
	<style type="text/css"> 
.error { 
    display: block; 
    color: red; 
    font-style: italic; 
} 
#message { 
    display:none; 
    font-size:15px; 
    font-weight:bold; 
    color:#333333; 
    }
    
    form {
	display: block;
	margin-top: 20em;
	}


</style> 
</head>
<body>

<div id="outer-wrap">
<div id="inner-wrap">

    <header id="top" role="banner">
        <div class="block">
            <h1 class="block-title">James Buchanan</h1>
            <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
        </div>
    </header>

    <nav id="nav" role="navigation">
        <div class="block">
            <h2 class="block-title">Chapters</h2>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
            	<li>
                    <a href="about.html">About</a>
                </li>
             <li class="is-active">
                    <a href="contact.html">Contact</a> 
                </li>
            </ul>
            <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
        </div>
    </nav>

    <footer role="contentinfo">
        <div class="block prose contact-max-width">
        
<h1>Contact</h1>
<!--
<input type="text" class="speech-bubble form-input" placeholder="Name"/>
<input type="text" class="speech-bubble form-input" placeholder="Email"/>
<textarea class="speech-bubble form-input" placeholder="Comments"></textarea>
<button type="submit" class="btn btn-primary btn-large btn-block">Send</button>
-->


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
     <input name="name_r" type="text" class="required speech-bubble form-input" id="name_r" placeholder="Name" /> 
     <input name="email_r" type="text" class="required email speech-bubble form-input" size="30" plsceholder="Email" /> 
     <textarea name="comments_r" cols="25" rows="5" class="required speech-bubble form-input" placeholder="Comments"></textarea> 
     <input name="Submit" id="submit" type="submit" class="submit_go btn btn-primary btn-large btn-block" value="Submit" /> 
      
</form>
<div id="message">Your message has been sent.<br /><br /></div> 
<?php  

//validate 
if ($_POST) { 
//send confirmation email (or insert into database, etc...) 
    echo 'Sent'; die;  
    mail($to,$subject,$comments,$headers); 
} 
// 

?> 

 <ul class="intro">
	<li><i class="icon-phone"> </i> 0274608712</li>
	<li><a href="#"><i class="icon-envelope"> </i> james.nzdesign@gmail.com</a></li>
</ul>    

         <a href="http://www.linkedin.com/pub/james-buchanan/40/271/b35"><i class="icon-linkedin-sign icon-padding"> </i></a>
  <!--<a href="#"><i class="icon-twitter"> </i></a>-->
  <a href="https://www.facebook.com/james.buchanan.397"><i class="icon-facebook icon-padding"> </i></a>
            <span class="pull-right copyright">&copy; James Buchanan</span>
        </div>
    </footer>

</div>
<!--/#inner-wrap-->
</div>
<!--/#outer-wrap-->

<script src="js/main.js"></script>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script> 
<script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script> 

<script> 
$(document).ready(function() {
	$("#form1").validate({
		submitHandler: function() {
			//submit the form
			$.post("<?php echo $_SERVER[PHP_SELF]; ?>", //post
				$("#form1").serialize(), 
				function(data){
				  //if message is sent
				  if (data == 'Sent') {
				    $("#message").fadeIn(); //show confirmation message
				    $("#form1")[0].reset(); //reset fields
				}
				//
			});
			return false; //don't let the page refresh on submit.
		}
	}); //validate the form
});
</script> 

    <script>
      var navigation = responsiveNav("#nav", {
        animate: true,        // Boolean: Use CSS3 transitions, true or false
        transition: 400,      // Integer: Speed of the transition, in milliseconds
        label: "Menu",        // String: Label for the navigation toggle
        insert: "after",      // String: Insert the toggle before or after the navigation
        customToggle: "",     // Selector: Specify the ID of a custom toggle
        openPos: "relative",  // String: Position of the opened nav, relative or static
        jsClass: "js",        // String: 'JS enabled' class which is added to <html> el
        init: function(){},   // Function: Init callback
        open: function(){},   // Function: Open callback
        close: function(){}   // Function: Close callback
      });
    </script>
</body>
</html>