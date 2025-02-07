<?php
  include_once "app/views/userViews/header.php";
  include_once "app/views/userViews/navbar.php";
  
  require_once "app/models/userModels/selectModel.php";
  $selectModel= new SelectModel();
  $sql= $selectModel->select();
  $rows= $selectModel->getData($sql);
  
?>
<section class="container mt-5">
  <div>
	  <h3>Noticias Recientes - Home</h3>
	</div><hr>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <?php
      if(!empty($rows)){
        foreach($rows as $row){
      ?>
      <div>
        <h5 class="float-left"><?php echo $row['TITLE'];?></h5>
        <h4 class="float-right"><?php echo $row['SECTION'];?></h4>
        <img src="public/img/<?php echo $row['IMAGE'];?>">
        <p><?php echo $row['DESCRIPTION'];?></p>
        <p><?php echo $row['DATE'];?></p>
        <hr>
      </div>
      <?php 
        } 
      } else {
        echo '<p>No existen noticias</p>';
      } 
      ?>
    </div>
  </div>
</section>

<?php include_once "app/views/userViews/footer.php"; ?>