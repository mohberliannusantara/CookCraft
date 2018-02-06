<?php
  include '../../connection.php';
  $query = $_mysqli->query("SELECT id FROM resep ORDER BY id DESC LIMIT 1");
  $data = $query->fetch_assoc();
  $last = $data['id'];
  $lastid = (int) substr($last, -5);
  $incre = $lastid+1;
  $newid = substr("0000".$incre, -5);
  $new = "rc".$newid;
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
                      <input type="text" class="form-control" id="idresep" placeholder="idresep" name="id" value="<?php echo $new ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="judul" placeholder="judul" name="judul">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="kategori" id="kategori">
                        <?php
                        $query1 = $_mysqli->query("SELECT * FROM kategori");
                          while ($row = $query1->fetch_assoc()) {
                            ?><option value="<?php echo $row['idkategori']?>"><?php echo $row['namakategori'] ?></option>
                            <?php
                          } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Chef</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="chef" placeholder="chef" name="chef">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <textarea name="deskripsi" rows="5" cols="10" id="deskripsi" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                      <div class="custom-file">
                        <input type="file" id="gambar" name="gambar">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alat" class="col-sm-2 col-form-label">Alat</label>
                    <div class="col-sm-10">
                      <textarea name="alat" rows="8" cols="80" id="alat" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bahan" class="col-sm-2 col-form-label">Bahan</label>
                    <div class="col-sm-10">
                      <textarea name="bahan" rows="8" cols="80"  id="bahan" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prosedur" class="col-sm-2 col-form-label">Prosedur</label>
                    <div class="col-sm-10">
                      <textarea name="prosedur" rows="8" cols="80" id="prosedur" class="form-control"></textarea>
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
      dt.append('gambar', $( '#gambar' )[0].files[0] );
      dt.append('alat', $('#alat').val() );
      dt.append('bahan', $('#bahan').val() );
      dt.append('prosedur', $('#prosedur').val() );
      $.ajax({
        type:'post',
        url:'recipe/query/recipe/addrecipequery.php',
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
