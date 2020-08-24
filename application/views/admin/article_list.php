<?php 
defined('BASEPATH') OR exit('no direct access');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style=" -webkit-font-smoothing: antialiased;
  background-color: #3d484a;
  background-image: linear-gradient(to top left, #371659, #d3425b);
  background-size: auto, cover;
  background-attachment: fixed;">

<div class="container">
  <div class="row">
  	<div class="col-md-3 col-sm-6"><h2 style="color: #fff;">Articenter Lists</h2></div>
  	<div class="col-md-6 col-sm-3" >
  		<?php if($this->session->flashdata('deleted')) { ?>
			<div class="alert alert-success" role="alert" style="background-color: 	#98FB98;color: #444;padding: 
			10px;text-align: left;margin-top: 20px;">
			  <?php echo $this->session->flashdata('deleted'); ?>
			</div>
			<?php } ?>
			<?php if($this->session->flashdata('not_deleted')) { ?>
			<div class="alert alert-success" role="alert" style="background-color: 	#FF0000;color: #444;padding: 
			10px;text-align: left;margin-top: 20px;">
			  <?php echo $this->session->flashdata('not_deleted'); ?>
			</div>
		<?php } ?>
		<?php if($this->session->flashdata('success_update')) { ?>
			<div class="alert alert-success" role="alert" style="background-color: 	#98FB98;color: #444;padding: 
			10px;text-align: left;margin-top: 20px;">
			  <?php echo $this->session->flashdata('success_update'); ?>
			</div>
			<?php } ?>
			<?php if($this->session->flashdata('unsuccess_update')) { ?>
			<div class="alert alert-success" role="alert" style="background-color: 	#FF0000;color: #444;padding: 
			10px;text-align: left;margin-top: 20px;">
			  <?php echo $this->session->flashdata('unsuccess_update'); ?>
			</div>
		<?php } ?>
		<?php if($this->session->flashdata('inserted')) { ?>
			<div class="alert alert-success" role="alert" style="background-color: 	#98FB98;color: #444;padding: 
			10px;text-align: left;margin-top: 20px;">
			  <?php echo $this->session->flashdata('inserted'); ?>
			</div>
			<?php } ?>
			<?php if($this->session->flashdata('upload_error')) { ?>
			<div class="alert alert-success" role="alert" style="background-color: 	#FF0000;color: #444;padding: 
			10px;text-align: left;margin-top: 20px;">
			  <?php echo $this->session->flashdata('upload_error'); ?>
			</div>
		<?php } ?>
  	</div>
  	<div class="col-md-3 col-sm-3">
  		
          <a href="<?php base_url()?>logout">
           <h3>Logout</h3>
          </a>

          
  	</div>
  </div>
  <p style="color: #fff;">Here are Article Lists...</p> <a href="<?=base_url()?>admin/add_article" ><button class="btn btn-success btn-md">Add Article</button></a>           
  <table class="table  table-bordered">
    <thead>
      <tr style="color:#fff;">
        <th>Id</th>
        <th>Article Name</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody style="color: #fff;">

    <?php
    	$count = 0;
    	//print_r($arti_name);
    	 foreach($arti_name as $arti_names) {
    	 	$count = $count +1;
    	 	?>
      <tr>
        <td><?php echo $count;?></td>
        <td><?=$arti_names['article_name']?></td>
        <td>
        	<?php $article_id = $arti_names['id'];
        	?>
        	<a href="<?php base_url()?>edit_article/<?=$article_id;?>"><button class="btn btn-info btn-md">Edit</button></a> 
        	<a href="<?php base_url()?>delete_article/<?=$article_id;?>"><button class="btn btn-danger btn-md">Delete</button></a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
	  	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>


</body>
</html>
