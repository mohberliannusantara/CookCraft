<?php
  include '../../connection.php';
  $query = $_mysqli->query("SELECT idkategori FROM kategori ORDER BY idkategori DESC LIMIT 1");
  $data = $query->fetch_assoc();
  $last = $data['idkategori'];
  $lastid = (int) substr($last, -5);
  $incre = $lastid+1;
  $newid = substr("0000".$incre, -5);
  $new = "ct".$newid;
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
                    <label for="idresep" class="col-sm-2 col-form-label">ID Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idkategori" placeholder="idkategori" name="id" value="<?php echo $new ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="namakategori" placeholder="namakategori" name="namakategori">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prosedur" class="col-sm-2 col-form-label"></label>
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
        url:'recipe/query/category/addcategoryquery.php',
        data:$('#formTambah').serialize(),
        success:function(data){
          alert(data);
          openContent('recipe/showcategory');
        }
      })
      e.preventDefault();
    })
  </script>
  <script type="text/javascript"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../../../../../js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../../../../../js/bootstrap.min.js"></script>
