<?php
  include '../../connection.php';
  $kategori = $_mysqli->query("SELECT * FROM kategori");
 ?>
<div class="container">
  <h2>Category</h2>
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
                    <th>ID Categories</th>
                    <th>Categories Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row=$kategori->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $row['idkategori'] ?></td>
                      <td><?php echo $row['namakategori'] ?></td>
                      <td>
                        <?php $id = $row['idkategori'] ?>
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
        url:'recipe/addcategory.php',
        data:$('#formTambah').serialize(),
        success:function(data){
          $('#data-form').html(data);
        }
      })
    }
    function hapus(idyu) {
      $.ajax({
        type:'post',
        url:'recipe/query/category/deletecategoryquery.php',
        data:{
          id:idyu,
        },
        success:function(data){
          alert(data);
          openContent('recipe/showcategory');
        }
      });
    }
    function updateForm(idyu) {
      $.ajax({
          type:'post',
          url:'recipe/updatecategory.php',
          data:{
            id:idyu,
          },
          success:function(data){
            $('#data-form').html(data);
          }

      })
    }
  </script>
