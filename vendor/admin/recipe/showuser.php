<?php
  include '../../connection.php';
  $resep = $_mysqli->query("SELECT * FROM user");
 ?>
<div class="container">
  <h2>User</h2>
    <div class="row">
      <div class="col">
        <div class="col-md-3">
        </div>
        <div class="" id="data-form">
          <button type="button" name="button" class="btn btn-success" onclick="addForm()">+ Tambah</button>
          <div class="card mt-3">
            <div class="card-body">
              <table class="table table-bordered" id="DataTable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row=$resep->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $row['username'] ?></td>
                      <td><?php echo $row['password'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['role'] ?></td>
                      <td>
                        <?php $id = $row['id'] ?>
                        <a href="#" onclick="updateForm('<?php echo $id ?>')" class="btn btn-info">Change</a>
                        <a href="#" onclick="hapus('<?php echo $id ?>')" class="btn btn-danger">Remove</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#DataTable').DataTable();
    } );
  function addForm() {
      $.ajax({
        type:'post',
        url:'recipe/adduser.php',
        data:$('#formTambah').serialize(),
        success:function(data){
          $('#data-form').html(data);
        }
      })
    }
    function hapus(idyu) {
      $.ajax({
        type:'post',
        url:'recipe/query/user/deleteuserquery.php',
        data:{
          id:idyu,
        },
        success:function(data){
          alert(data);
          openContent('recipe/showuser');
        }
      });
    }
    function updateForm(idyu) {
      $.ajax({
        type:'post',
        url:'recipe/updateuser.php',
        data:{
          id:idyu,
        },
        success:function(data){
          $('#data-form').html(data);
        }
      })
    }
  </script>
