<?php
  include '../../connection.php';
  $id = $_POST['id'];
  $query = $_mysqli->query("SELECT * FROM resep WHERE id = '$id'");
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
                    <label for="idresep" class="col-sm-2 col-form-label">ID Resep</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idresep" placeholder="idresep" name="id" value="<?php echo $data['id'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="judul" placeholder="judul" name="judul" value="<?php echo $data['judul'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="kategori" id="kategori">
                        <?php
                        $query = $_mysqli->query("SELECT * FROM kategori");
                          while ($row = $query->fetch_assoc()) {
                            ?><option value="<?php echo $row['idkategori']?>"><?php echo $row['namakategori'] ?></option>
                            <?php
                          } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Chef</label>
                    <div class="col-sm-10">
                      <input type="text" name="chef" value="<?php echo $data['chef'] ?>" id="chef" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <textarea name="deskripsi" rows="5" cols="80" id="deskripsi" class="form-control"><?php echo $data['deskripsi'] ?></textarea>
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                      <div class="custom-file">
                        <input type="file" id="gambar" name="gambar" value="">
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="alat" class="col-sm-2 col-form-label">Alat</label>
                    <div class="col-sm-10">
                      <textarea name="alat" id="alat" rows="8" cols="80" class="form-control"><?php echo $data['alat'] ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bahan" class="col-sm-2 col-form-label">Bahan</label>
                    <div class="col-sm-10">
                      <textarea name="bahan" id="bahan" class="form-control" rows="8" cols="80"><?php echo $data['bahan'] ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prosedur" class="col-sm-2 col-form-label">Prosedur</label>
                    <div class="col-sm-10">
                      <textarea name="prosedur" rows="8" cols="80" id="prosedur" class="form-control"><?php echo $data['prosedur'] ?></textarea>
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
      var dt = new FormData();

      dt.append('id', $('#idresep').val() );
      dt.append('judul', $('#judul').val() );
      dt.append('chef', $('#chef').val() );
      dt.append('kategori', $('#kategori').val() );
      dt.append('deskripsi', $('#deskripsi').val() );
      // dt.append('gambar', $( '#gambar' )[0].files[0] );
      dt.append('alat', $('#alat').val() );
      dt.append('bahan', $('#bahan').val() );
      dt.append('prosedur', $('#prosedur').val() );
      $.ajax({
        type:'post',
        url:'recipe/query/recipe/updaterecipequery.php',
        data:dt,
        // $('#formTambah').serialize(),
        processData: false,
        contentType: false,
        success:function(data){
          alert(data);
          openContent('recipe/showrecipe');
        }
      })
      e.preventDefault();
    })
  </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../../../../../js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../../../../../js/bootstrap.min.js"></script>
