<?php
  include '../../connection.php';
  $id = $_POST['id'];
  $query = $_mysqli->query("SELECT * FROM kategori WHERE idkategori = '$id'");
  $data = $query->fetch_array();
 ?>
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card mt-3">
              <div class="card-body">
                <form class="" action="" method="post" id="formTambah">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label"></label>
                  </div>
                  <div class="form-group row">
                    <label for="idkategori" class="col-sm-2 col-form-label">ID Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idkategori" placeholder="idkategori" name="id" value="<?php echo $data['idkategori'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namakategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="namakategori" placeholder="namakategori" name="namakategori" value="<?php echo $data['namakategori'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success px-4">Save</button>
                      <button type="reset" class="btn btn-secondary px-3">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  <script type="text/javascript">
    $('#formTambah').submit(function(e){
      $.ajax({
        type:'post',
        url:'recipe/query/category/updatecategoryquery.php',
        data:$('#formTambah').serialize(),
        success:function(data){
          alert(data);
          openContent('recipe/showcategory');
        }
      })
      e.preventDefault();
    })
  </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../../../../../js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../../../../../js/bootstrap.min.js"></script>
