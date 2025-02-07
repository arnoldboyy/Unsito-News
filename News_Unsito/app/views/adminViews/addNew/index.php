      <?php
  include_once 'app/views/adminViews/header.php';
  include_once 'app/views/adminViews/navbar.php';
?>  
    <section class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-8 card">
          <form action="<?php echo constant('URL').
          'addNew/insert';?>" method="post" class="card-body py-4"
            enctype="multipart/form-data">  
            <h4 class="text-center">Añadir Nueva Noticia</h4>
            
            <div>
              <select class='custom-select' name='sectionPost'>
                <option selected>Seccion</option>
                <option value='cultura'>Cultural</option>
                <option value='egresados'>Egresados </option>
                <option value='efemerides'>Efemérides</option>
                <option value='social'>Social</option>

              </select>
            </div>
            
            <input type="text" class="form-control my-3" 
             name="titlePost" placeholder="Titulo">
            
            <textarea class="form-control my-3" rows="3"
             placeholder="Descripcion" name='descPost'></textarea>
             
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" 
                id="inputGroupFile01" name='imagePost'
                aria-describedby="inputGroupFile"
                accept='image/*' required>
                <label class="custom-file-label" 
                for="inputGroupFile">Elegir Archivo</label>
              </div>
            </div>
            
            <input type="submit" class="btn btn-primary btn-block my-3"
             name="addNotice" value="Añadir Noticia"> 
          </form>
        </div>
      </div>
    </section>
<?php include_once 'app/views/adminViews/footer.php'; ?>
    
    