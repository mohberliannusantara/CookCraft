<?php
  include '../../connection.php';
  $resep = $_mysqli->query("SELECT * FROM resep r LEFT JOIN kategori k ON r.idkategori = k.idkategori");
 ?>
<div class="container">
  <h2>Recipe</h2>
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
                  <th>Name Recipe</th>
                  <th>Picture</th>
                  <th>Tanggal Upload</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row=$resep->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $row['judul'] ?></td>
                    <td><img  height="50px" width="80px" src="../img/recipe/<?php echo $row['gambar'] ?>" alt=""></td>
                    <td><?php echo $row['tglupload'] ?></td>
                    <td><?php echo $row['namakategori'] ?></td>
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

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" onclick="hapus('<?php //echo $id ?>')"  class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div> -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#DataTable').DataTable();
    } );
  function addForm() {
      $.ajax({
        type:'post',
        url:'recipe/addrecipe.php',
        data:$('#formTambah').serialize(),
        success:function(data){
          $('#data-form').html(data);
        }
      })
    }
  function hapus(idyu) {
    $.ajax({
      type:'post',
      url:'recipe/query/recipe/deleterecipequery.php',
      data:{
        id:idyu,
      },
      success:function(data){
        alert(data);
        openContent('recipe/showrecipe');
      }
    });
  }
  function updateForm(idyu) {
    $.ajax({
      type:'post',
      url:'recipe/updaterecipe.php',
      data:{
        id:idyu,
      },
      success:function(data){
        $('#data-form').html(data);
      }
    })
  }
  </script>
