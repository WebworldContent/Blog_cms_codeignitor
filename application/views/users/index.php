<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>My Article</title>
<!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->
<?php include_once APPPATH.'views/include/top/users.php'?>

</head>
<body>

<!-- PRE LOADER -->

<?php include 'loader.php'?>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.html" class="navbar-brand">Articentricle</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Hello! This is Articentricle</h1>
                    <h4 style="font-size:14px;"><b>"Center"</b> to find <b>"Amazing Article"</b></h4>
                    <a href="#blog" class="smoothScroll btn btn-default">Discover More</a>
               </div>

          </div>
     </div>
</section>

<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
               	<?php foreach($usersdata as $userdata) {?>
                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="">
                                   <img src="<?=base_url()?>uploads/<?=$userdata['image_path']?>" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href=""><?=$userdata['article_name'];?></a></h3>
                         </div>
                         <div class="blog-post-format">
                     
                              <span><a href="#"><i class="fa fa-link"></i><?=$userdata['url'];?></a></span>
                         </div>
                         <div class="blog-post-des">
                              <p><?=$userdata['article_text'];?></p>
                              <a href="" class="btn btn-default">Continue Reading</a>
                         </div>
                    </div>
                 <?php } ?>
               
               </div>

          </div>
     </div>
</section>

<!-- Footer Section -->

<footer style="padding: 10px;">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-md-offset-1 col-sm-12">
                    <h3>Articentricle</h3>
                    <p>Articentricle is center for articles , place where you find all your thought related article.</p>
                    <div class="footer-copyright">
                         <p>Copyright &copy; Coder.Web</p>
                    </div>
               </div>

             

               <div class="col-md-12 col-sm-12">
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
               
          </div>
     </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<?php include_once APPPATH.'views/include/bottom/users.php'?>

</body>
</html>