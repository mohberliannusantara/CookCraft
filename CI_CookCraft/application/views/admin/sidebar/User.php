

<!-- <div class="card" id="userv" style="display:none  ">
  <h1>User</h1>
</div> -->

<div class="container" id="userv" style="display:none">

    <div class="row">
      <div class="col">
        <div class="col-md-3">
        </div>
        <div class="" id="data-form">
          <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#Modal_Add">+ Tambah</button>
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
                <tbody id="show_user">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--MODAL Tambah User-->
    
  <form id="formbaru">
    
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			           
          </div>
          
          <div class="modal-body">			              
          
            <div class="form-group col-lg-12">
              <label>Username</label>
              <input type="text" id="username" class="form-control" minlength="3" placeholder="Masukkan Username"required="" >
              <div class="invalid-feedback">Isikan Username</div>
            </div>
            <div class="form-group col-lg-12">
              <label>Password</label>
              <input type="password" id="pass" class="form-control" minlength="8" placeholder="Masukkan Password"required="" >
              <div class="invalid-feedback">Isikan Password</div>
            </div>
            <div class="form-group col-lg-12">
              <label>Email</label>
              <input type="email" id="mail" class="form-control" minlength="10" placeholder="Masukkan Email"required="" >
              <div class="invalid-feedback">Isikan Email</div>
            </div>

            <div class="form-group col-lg-12">
              <label> Image</label>
              <input type="file" class="form-control-file border" name="file" data-toggle="tooltip" title="Fungsi Belum Bisa">
            </div>
            
            <div class="form-group col-lg-6">
              <label>Role</label>
              <select class="form-control" id="role" required="">
                  <option disabled selected>Pilih Role</option>
                  <option value="admin">Admin </option>
                  <option value="user">User </option>
              </select>
            </div>
          
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal">Batal</button>
            <button type="submit" id="btn_push" class="btn btn-primary col-md-3">Tambah</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<!--END MODAL Tambah User-->

<!-- Modal UPDATE -->
<form id="form_update">
  <div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			           
        </div>

        <div class="modal-body">			              
          
          <div class="form-group col-lg-12">
            <label>Username</label>
            <input type="text" id="username2" class="form-control" minlength="3" placeholder="Masukkan Username"required=""  disabled >
            <div class="invalid-feedback">Isikan Username</div>
          </div>
          <div class="form-group col-lg-12">
            <label>Password</label>
            <input type="password" id="password2" class="form-control" minlength="8" placeholder="Masukkan Password"required="" >
            <div class="invalid-feedback">Isikan Password</div>
          </div>
          <div class="form-group col-lg-12">
            <label>Email</label>
            <input type="email" id="mail2" class="form-control" minlength="10" placeholder="Masukkan Email"required="" >
            <div class="invalid-feedback">Isikan Email</div>
          </div>

          <div class="form-group col-lg-12">
            <label> Image</label>
            <input type="file" class="form-control-file border" name="file" data-toggle="tooltip" title="Fungsi Belum Bisa">
          </div>
          
          <div class="form-group col-lg-6">
            <label>Role</label>
            <select class="form-control" id="role2" required="">
                <option disabled selected>Pilih Role</option>
                <option value="admin">Admin </option>
                <option value="user">User </option>
            </select>
          </div>
        
          </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">tutup</button>
		        <button type="submit" id="btn_push" class="btn btn-success col-md-3">Perbarui</button>
        </div>
      </div>
    </div>
  </div>
</form>
  <!-- End Modal Uodate -->

<!--MODAL DELETE-->
<form>
	      <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog" role="document">
	          <div class="modal-content">
	            <div class="modal-header">
	              <h4 class="modal-title">Hapus User</h4>
	              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			           
	            </div>
	            <div class="modal-body">
	              <strong id="namaUser"> Nama User </strong>
	              
	            </div>
	            <div class="modal-footer">
	              <input type="hidden" name="id_user_delete" id="id_user_delete" class="form-control">
	              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
	              <button type="button" type="submit" id="btn_delete" class="btn btn-danger">Yes</button>
	            </div>
	          </div>
	        </div>
	      </div>
	    </form>
	  <!--END MODAL DELETE-->

  <script type="text/javascript">
    $(document).ready(function(){  
      show();    

      $('[data-toggle="tooltip"]').tooltip(); 

      // Fungsi Memanggil Database User ke datatabel
      function show(){
        $.ajax({
          async :false,
          type  : 'ajax',
          url   : '<?php echo base_url();?>index.php/CAdmin/getUser',
          dataType : 'json',
          success : function(data){
            var html = '';
            var i;

            for(i=0; i<data.length; i++){            
              var tr = $('<tr>').append(
                  $('<td>').text(data[i].username),
                  $('<td>').text(data[i].password),
                  $('<td>').text(data[i].nama),
                  $('<td>').text(data[i].role),
                  $('<td>').html('<a href="javascript:void(0);" class="btn btn-info item_edit" data-id="'+data[i].id+'" data-username="'+data[i].username+'"data-password="'+data[i].password+'" data-nama="'+data[i].nama+'" data-role="'+data[i].role+'">Change</a>'+
                    '<a href="javascript:void(0);" class="btn btn-danger item_delete" data-id="'+data[i].id+'"data-username="'+data[i].username+'" data-password="'+data[i].password+'" data-nama="'+data[i].nama+'" data-role="'+data[i].role+'">Remove</a>')
               );
              tr.appendTo('#show_user');
              
              // html += 

              // '<tr>'+
              //   '<td>'+data[i].username+'</td>'+
              //   '<td>'+data[i].password+'</td>'+
              //   '<td>'+data[i].nama+'</td>'+
              //   '<td>'+data[i].role+'</td>'+ 
                
              //   '<td>'+
              //       '<a href="javascript:void(0);" class="btn btn-info" data-id="'+data[i].id+'" data-username="'+data[i].username+'"data-password="'+data[i].password+'" data-nama="'+data[i].nama+'" data-role="'+data[i].role+'">Change</a>'+
              //       '<a href="javascript:void(0);" class="btn btn-danger" data-id="'+data[i].id+'"data-username="'+data[i].username+'" data-password="'+data[i].password+'" data-nama="'+data[i].nama+'" data-role="'+data[i].role+'">Remove</a>'+
              //   '</td>'+
              // '</tr>';    
            }
            // $('#show_user').html(html);    
            $(".table").DataTable({
                "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
            });             
          }
        });
      }

      //JS Menambahka User ke Database
      $('#formbaru').submit(function(e){
          e.preventDefault();
          var username = $('#username').val();
          var password = $('#pass').val();
          var nama = $('#mail').val();
          var role = $('#role').val();
          

          $.ajax({
            type : "POST",
            url  : "<?php echo site_url(); ?>/CAdmin/createUser",
            dataType : "JSON",
            data : {username:username,
                    password:password,
                    nama:nama,
                    role:role},

            success: function(){ 
              $('#Modal_Add').modal('hide'); 
              refresh();
            }
          });
          return false;
        });

        //JS UPDATE
      //get data for update record UPDATEEEE
     
      $('#show_user').on('click','.item_edit',function(){
            //alert($(this).data('username'));
            var username = $(this).data('username');
            var password = $(this).data('password');
            var nama = $(this).data('nama');
            var role = $(this).data('role');

            // alert($(this).data('username'));
            // alert(username);

            $('#modal_update').modal('show');

            document.getElementById("username2").value=username;
            document.getElementById("password2").value=password;
            document.getElementById("mail2").value=nama;
            document.getElementById("role2").value=role;
        
            
        });

        
        //UPDATE record to database
       
          $('#form_update').submit(function(e){
            e.preventDefault(); 

            var username2= $('#username2').val();
            var password2= $('#password2').val();
            var mail2= $('#mail2').val();
            var role2= $('#role2').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/CAdmin/updateUser",
                dataType : "JSON",
                data : { 
                        username2:username2,
                        password2:password2,
                        mail2:mail2,
                        role2:role2},
                success: function(data){                     
                    $('#modal_update').modal('hide'); 
                    refresh();

                }
            });
            return false;
        });
        


      // DELETE USER
        $('#show_user').on('click','.item_delete',function(){
                //  alert("TES");
                //  alert($(this).data('username'));

                //  Mengambil data json dari array
                var id = $(this).data('id');
                var username = $(this).data('username');
                var password = $(this).data('password');
                var nama = $(this).data('nama');
                var role = $(this).data('role');
                 
                $('#Modal_Delete').modal('show');
                document.getElementById("namaUser").innerHTML=" '"+username+"' ";
                
                
                $('[name="id_user_delete"]').val(id);
            });
            //delete record to database
             $('#btn_delete').on('click',function(){
                var id_user_delete = $('#id_user_delete').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/CAdmin/deleteUser",
                    dataType : "JSON",
                    data : {id:id_user_delete},
                    success: function(){
                        $('[name="id_user_delete"]').val("");
                        $('#Modal_Delete').modal('hide');
                        refresh()
                    }
                });
                return false;
            });
            //END DELETE USER

        function refresh() {
          $(".table").DataTable().destroy();
          $('tbody').empty();
          document.getElementById('formbaru').reset();
          document.getElementById('form_update').reset();
      
          show();
        }   

      //
    });
  
  </script>