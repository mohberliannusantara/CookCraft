<?php
  include '../../connection.php';
  $id = $_POST['id'];
  $query = $_mysqli->query("SELECT * FROM user WHERE id = '$id'");
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
                    <label for="iduser" class="col-sm-2 col-form-label">ID User</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" placeholder="id" name="id" value="<?php echo $data['id'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?php echo $data['nama'] ?>">
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
                      <input type="text" class="form-control" id="username" placeholder="username" name="username" value="<?php echo $data['username'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="password" placeholder="password" name="password" value="<?php echo $data['password'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="role" id="role">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                      </select>
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

      dt.append('id', $('#id').val() );
      dt.append('nama', $('#nama').val() );
      dt.append('gambar', $( '#gambar' )[0].files[0] );
      dt.append('username', $('#username').val() );
      dt.append('password', $('#password').val() );
      dt.append('email', $('#email').val() );
      dt.append('role', $('#role').val() );
      $.ajax({
        type:'post',
        url:'recipe/query/user/updateuserquery.php',
        // data: $('#formTambah').serialize(),
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
