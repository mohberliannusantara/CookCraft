<script type="text/javascript">
      
      // Menu Adminya
      document.getElementById("home").addEventListener("click",home);
      document.getElementById("user").addEventListener("click",user);
      document.getElementById("resep").addEventListener("click",resep);
      document.getElementById("kategori").addEventListener("click",kategori);

      function home(){
        document.getElementById("homev").style.display="";
        document.getElementById("userv").style.display="none";
        document.getElementById("resepv").style.display="none";
        document.getElementById("kategoriv").style.display="none";
      }
      function user(){
        document.getElementById("homev").style.display="none";
        document.getElementById("userv").style.display="";
        document.getElementById("resepv").style.display="none";
        document.getElementById("kategoriv").style.display="none";
      }
      function resep(){
        document.getElementById("homev").style.display="none";
        document.getElementById("userv").style.display="none";
        document.getElementById("resepv").style.display="";
        document.getElementById("kategoriv").style.display="none";
      }
      function kategori(){
        document.getElementById("homev").style.display="none";
        document.getElementById("userv").style.display="none";
        document.getElementById("resepv").style.display="none";
        document.getElementById("kategoriv").style.display="";
      }
      //End Menu Admin

      

    </script>
    <!-- Bootstrap core JavaScript -->

    <script src="<?php echo base_url() ?>assets/admin/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/admin/js/jquery.easing.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/admin/js/resume.min.js"></script>
    <script type="text/javascript" src='<?php echo base_url() ?>assets/admin/js/admin.js'></script>
  </body>
</html>
