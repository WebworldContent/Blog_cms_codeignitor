<?php
defined('BASEPATH') OR exit('no direct access');
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Archivo+Narrow:700,400'>
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Alegreya:400italic,400'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Sacramento'>




    <style type="text/css">
    	* {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  min-height: 100%;
  margin: 0;
  font: 14px/1.4 "Alegreya", serif;
  color: #dbdbdb;
  padding: 10px;
  -webkit-font-smoothing: antialiased;
  background-color: #3d484a;
  background-image: linear-gradient(to top left, #371659, #d3425b);
  background-size: auto, cover;
  background-attachment: fixed;
}

[class*="span-"] {
  padding: 10px;
}

a {
  color: #29D9D8;
  text-decoration: none;
}

header {
  min-height: 100px;
}

.logo > * {
  display: inline;
}
.logo h1 {
  font-family: "Sacramento";
  font-size: 4em;
  font-weight: normal;
  color: #f5f7c6;
}
.logo h2 {
  position: relative;
  top: -0.8em;
  font-family: "Archivo Narrow", helvetica, sans-serif;
  font-size: 1.8em;
  font-weight: normal;
  color: #fff;
  text-transform: uppercase;
  vertical-align: super;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
nav ul li {
  display: inline;
  font-size: 0px;
}
nav ul li a {
  display: inline-block;
  font-size: 14px;
}

.breadcrumb-nav {
  padding: 10px 20px;
  background: rgba(0, 0, 0, 0.45);
  border-radius: 5px;
  background-clip: padding-box;
}

.session-nav {
  text-align: right;
}
.session-nav ul li a {
  margin-right: 1px;
  padding: 8px 14px;
  font-size: 14px;
  color: #fff;
  background: rgba(0, 0, 0, 0.35);
}
.session-nav ul li:first-child a {
  border-radius: 5px 0px 0px 5px;
  background-clip: padding-box;
}
.session-nav ul li:last-child a {
  border-radius: 0px 5px 5px 0px;
  background-clip: padding-box;
}

.application-nav {
  overflow: hidden;
  position: absolute;
  left: 0;
  border-radius: 0px 5px 5px 0px;
  background-clip: padding-box;
}
.application-nav a {
  display: block;
  padding: 10px 20px;
  margin-bottom: 1px;
  font-family: "Archivo Narrow", helvetica, sans-serif;
  font-size: 1rem;
  color: rgba(255, 255, 255, 0.7);
  text-transform: uppercase;
  background: rgba(0, 0, 0, 0.5);
}
.application-nav a span {
  margin-right: 4px;
  padding-right: 4px;
}
.application-nav li:last-child a {
  padding-bottom: 10px;
  border-radius: 0px 0px 5px 0px;
  background-clip: padding-box;
}
.application-nav li:first-child a {
  padding-top: 10px;
  border-radius: 0px 5px 0px 0px;
  background-clip: padding-box;
}
@media screen and (max-width: 1260px) {
  .application-nav .text {
    display: none;
  }
}

.panel {
  border-radius: 5px;
  background-clip: padding-box;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.15), 0px 0px 3px rgba(0, 0, 0, 0.5);
}
.panel .panel-header {
  display: block;
  padding: 10px 20px;
  font-family: "Archivo Narrow", helvetica, sans-serif;
  font-size: 1.5em;
  font-weight: normal;
  text-transform: uppercase;
  text-shadow: 0px 0px 15px #000;
  line-height: 1.2;
  letter-spacing: -0.03em;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 50%, rgba(0, 0, 0, 0) 52%), linear-gradient(to bottom, #29364a 50%, rgba(0, 0, 0, 0) 52%) left top;
  background-size: auto, 125px 125px;
  box-shadow: inset 0px 1px 2px rgba(255, 255, 255, 0.2);
  border-radius: 5px 5px 0px 0px;
  background-clip: padding-box;
}
.panel .panel-header .hint {
  display: block;
  font-size: 0.8rem;
  font-family: "Alegreya", serif;
  font-weight: lighter;
  color: #a8a8a8;
  color: rgba(255, 255, 255, 0.5);
  text-transform: none;
}
.panel .panel-body {
  padding: 20px;
  background: #dbdbdb;
  border-top: none;
  border-radius: 0px 0px 5px 5px;
  background-clip: padding-box;
}
.panel .panel-body input, .panel .panel-body textarea {
  width: 100%;
  max-width: 100%;
  padding: 10px;
  font-size: 1.1em;
  font-family: sans-serif;
  font-weight: normal;
  line-height: 1.5;
  border: 1px solid #c2c2c2;
}
.panel .panel-body input:focus, .panel .panel-body textarea:focus {
  outline: none;
}

input, textarea {
  margin: 0;
}

.wysiwyg {
  margin-bottom: 5px;
}
.wysiwyg .fa {
  display: inline-block;
  width: 32px;
  padding: 2px;
  font-size: 16px;
  color: rgba(0, 0, 0, 0.8);
  text-align: center;
  border: 1px solid #999;
  border-radius: 5px;
  background-clip: padding-box;
  background: #e1e1e1;
  background: -webkit-linear-gradient(#fff, #e1e1e1);
  cursor: pointer;
}

@media screen and (max-width: 800px) {
  header .logo, header .session-nav {
    float: left;
  }
  header .logo {
    width: 50%;
  }
  header .logo h1 {
    font-size: 2.5em;
  }
  header .logo h2 {
    font-size: 1em;
  }
  header .session-nav {
    width: 50%;
  }

  .application-nav {
    display: none;
  }
}
@media screen and (min-width: 801px) {
  html {
    padding: 20px;
    padding-top: 0;
  }

  .container {
    max-width: 940px;
    margin: 0 auto;
  }

  [class*="span-"] {
    float: left;
  }

  .span-3 {
    width: 25%;
  }

  .span-4 {
    width: 33.33333%;
  }

  .span-6 {
    width: 50%;
  }

  .span-12 {
    width: 100%;
  }

  textarea {
    min-height: 200px;
  }

  .show-menu {
    display: none;
  }

  .account-settings a {
    border-radius: 5px 0px 0px 5px;
    background-clip: padding-box;
  }

  .session-nav {
    position: relative;
    top: 30px;
  }
}
@media screen and (max-width: 1100px) and (min-width: 801px) {
  html {
    padding-left: 80px;
  }
}





.italics {
	 font-style: italic;
}
.underline {
	text-decoration: underline;
}

.strick {
	text-decoration: line-through;
}


 input[type=submit] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 400px;

}
.marg {

	margin-left: 20px;

}
    </style>

  
</head>

<body>

    <div class="container">

    <header style="min-height: 80px;">
     
        <nav class="session-nav span-12">
          <ul>
            <li class="show-menu">
              <a href="">
                <span class="ion-navicon-round"></span>
              </a>
            </li>
            <li class="account-settings">
              <a href="">
                <span class="ion-person"></span>
              </a>
            </li>
            <li class="logout">
              <a href="<?php base_url()?>logout">
                <span class="ion-power"></span>
              </a>
            </li>
          </ul>
        </nav>

    </header>

  </div>


  <nav class="application-nav">
    <div class="container">
      <ul>
        <li class=""><a href="<?php base_url()?>article_list"><span class="ion-home"></span><span class="text">Atricle List</span></a></li>
        <li class=""><a href=""><span class="ion-document-text"></span><span class="text">Pages</span></a></li>
        <li class=""><a href=""><span class="ion-android-share-alt"></span><span class="text">Navigation</span></a></li>
        <li class=""><a href=""><span class="ion-person-stalker"></span><span class="text">Users</span></a></li>

        <li class=""><a href=""><span class="ion-gear-b"></span><span class="text">Website Settings</span></a></li>
      </ul>
    </div>
  </nav>


  <section id="main-content">
    <div class="container">

	
 
     <!--  <div class="span-12">
        <nav class="breadcrumb-nav">
          <a href="#">Dashboard</a> &raquo;
          <a href="#">Pages</a> &raquo;
          About Us
        </nav>
      </div> -->
     <?= form_open_multipart('admin/article_value',['class'=>'article_form','id'=>'article_id']);?>
     	<?php $user_id = $this->session->userdata('id')?>
     	<input type="hidden" name="user_id" value="<?php echo $user_id?>">

     	<div class="span-12"><input type="file" name="userfile"></div>

      <div class="span-6">
        <div class="panel">
          <label class="panel-header" for="page-title">
            Article Title
            <span class="hint">The Title of the Article.</span>
          </label>
          <div class="panel-body">
            <input id="page-title" type="text" placeholder="Article Title" name="article_title" />
          </div>
        </div>
      </div>

      <div class="span-6">
        <div class="panel">
          <label class="panel-header" for="page-url">
            URL
            <span class="hint">http://www.example.com/about</span>
          </label>
          <div class="panel-body">
            <input id="page-url" type="text" placeholder="url" name="article_url" />
          </div>
        </div>
      </div>

      <div class="span-12">
        <div class="panel">
          <label class="panel-header" for="page-main-content">
            Main Content
            <span class="hint">What is your article about ?</span>
          </label>
          <div class="panel-body">
            <div class="wysiwyg">
              <span class="fa fa-bold"></span>
              <span class="fa fa-italic"></span>
              <span class="fa fa-underline"></span>
              <span class="fa fa-strikethrough"></span>
              <span class="fa fa-image"></span>
            </div>
            <textarea id="page-main-content" name="article_text"></textarea>
          </div>
        </div>
      </div>
    
      <div class="span-12" style="text-align: center;"><input type="submit" name="submit"></div>
 </form>
    </div>
  </section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script>
    	$(function(){

  var overlay = $('<div></div>');
      overlay.css({
        background: 'rgba(0,0,0,0.5)',
        '-webkit-background-size': 'cover',
        position: 'fixed',
        top: 0,
        left: 0,
        right: 0,
        bottom: 0,
        'z-index': 999,
        'pointer-events': 'none'
      });

  var input = $('.panel input, .panel textarea');

  input.focusin(function(){
    $('body').prepend(overlay)
    var panel = $(this).parents('.panel');
    panel.css({
      'z-index': 1000,
      position: 'relative'
    })
  });

  input.focusout(function(){
    var panel = $(this).parents('.panel');
    panel.css({
      position: 'static'
    })
    overlay.detach();
  });
  
  
  // esc releases focus from inputs
  $(document).keyup(function(e){
    if(e.keyCode === 27){
      input.blur();
    };
  });

})


$(document).ready(function(){
	$(".fa-bold").click(function(){
		$('#page-main-content').css('font-weight','bold');
	});

	$(".fa-italic").click(function(){
		$('#page-main-content').toggleClass('italics');
	});
	$(".fa-underline").click(function(){
		$('#page-main-content').toggleClass('underline');
	});
	$(".fa-strikethrough").click(function(){
		$('#page-main-content').toggleClass('strick');
	});
});
  
    </script>




</body>

</html>
