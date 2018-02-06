<?php
  include '../../connection.php';
  $query = $_mysqli->query("SELECT id FROM user ORDER BY id DESC LIMIT 1");
  $data = $query->fetch_assoc();
  $last = $data['id'];
  $lastid = (int) substr($last, -5);
  $incre = $lastid+1;
  $newid = substr("0000".$incre, -5);
  $new = "usr".$newid;
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
                      <label for="idresep" class="col-sm-2 col-form-label">ID User</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" placeholder="id" name="id" value="<?php echo $new ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
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
                      <label for="username" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" placeholder="username" name="username">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" placeholder="password" name="password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="username" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="email" name="email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="role" class="col-sm-2 col-form-label">Role</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="role" id="role">
                          <option value="admin">Admin</option>
                          <option value="member">Member</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-success px-4">Save</button>
                        <button type="reset" class="btn btn-secondary px-3">Cancel</button>
                      </div>
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

      dt.append('id', $('#id').val() );
      dt.append('nama', $('#nama').val() );
      dt.append('gambar', $( '#gambar' )[0].files[0] );
      dt.append('username', $('#username').val() );
      dt.append('password', $('#password').val() );
      dt.append('email', $('#email').val() );
      dt.append('role', $('#role').val() );
      $.ajax({
        type:'post',
        url:'recipe/query/user/adduserquery.php',
        //data:$('#formTambah').serialize(),
        data:dt,
        processData: false,
        contentType: false,
        success:function(data){
          alert(data);
          openContent('recipe/showuser');
        }
      })
      e.preventDefault();
    })
  </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../../../../../js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../../../../../js/bootstrap.min.js"></script>
