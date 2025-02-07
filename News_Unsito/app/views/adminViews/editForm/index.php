<?php
  include_once 'app/views/adminViews/header.php';
  
  include_once 'app/models/adminModels/selectModel.php';
  $id= $_GET['ID'];
  $model= new SelectModel();
  $sql= $model->selectWhere($id);
  $rows= $model->getData($sql);
  if(!empty($rows)){
    foreach($rows as $row){
?>  
    <section class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-8 card">
          <form action="<?php echo constant('URL').
          'newsList/update?ID='.$id;?>" method="post" 
           class="card-body py-4"
           enctype="multipart/form-data">  
            <h4 class="text-center">Añadir nueva noticia</h4>
            
            <p>ID: <?php echo $row['ID'];?></p>
            
            <div>
              <select class='custom-select' name='sectionPost'>
                <option selected>
                  <?php echo $row['SECTION'];?>
                </option>
                <option value='social'>Social</option>
                <option value='egresados'>Egresados</option>
                <option value='cultura'>Cultura</option>
                <option value='efemerides'>Efemérides</option>
              </select>
            </div>
            
            <input type="text" class="form-control my-3" 
             name="titlePost" placeholder="Title"
             value='<?php echo $row['TITLE'];?>'>
            
            <textarea class="form-control my-3" rows="3"
             placeholder="Description" name='descPost'><?php echo $row['DESCRIPTION'];?></textarea>
            
            <input type="submit" name="editNotice" value="Actualizar"
            class="btn btn-success btn-block my-3">
            </form>
        </div>
      </div>
    </section>
<?php 
    }
  }
  include_once 'app/views/adminViews/footer.php'; 
  
?>
    
    