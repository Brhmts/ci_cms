
    
      <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
      <script>tinymce.init({ selector:'textarea' });</script>

    
    <!-- jQuery -->
    <script src='<?php echo asset_url()."bower_components/jquery/dist/jquery.min.js";?>'></script>

    <!-- Bootstrap Core JavaScript -->
    <script src='<?php echo asset_url()."bower_components/bootstrap/dist/js/bootstrap.min.js";?>'></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src='<?php echo asset_url()."bower_components/metisMenu/dist/metisMenu.min.js";?>'></script>

    <!-- Morris Charts JavaScript -->
    <script src='<?php echo asset_url()."bower_components/raphael/raphael-min.js";?>'></script>

    
        <!-- DataTables JavaScript -->
    <script src='<?php echo asset_url()."bower_components/datatables/media/js/jquery.dataTables.min.js";?>'></script>
    <script src='<?php echo asset_url()."bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js";?>'></script>

        

    <!-- Custom Theme JavaScript -->
    <script src='<?php echo asset_url()."dist/js/sb-admin-2.js";?>'></script>
    <!-- UberCMS javascript file -->
    <script src='<?php echo asset_url()."js/main.js";?>'></script>
    
    
    <script>
        function deleteconfirm()
        {
            job=confirm("Are you sure to delete permanently?");
            if(job!=true)
            {
                return false;
            }
        }
</script>

</body>

</html>
