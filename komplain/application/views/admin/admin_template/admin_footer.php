    <div class="panel-footer">
                        
                    </div>
                </div>
                                
            </div><!--/.col-->
        </div><!--/.row-->
    </div>  <!--/.main-->

    <div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Confirmation</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="iddelete" id="iddelete">
        <p>Are you sure want to delete this data?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-danger btn-ok">Delete</a>
      </div>
      </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chart-data.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/ckeditor/ckeditor.js"></script>
    
    <script>
        $('#calendar').datepicker({
        });

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })

        $(document).ready(function() {
                                              $('#confirm-delete-modal').on('show.bs.modal', function(e) {
                                              console.log('masuk delete');
                                              $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                                              });
                                              });
                                              
    </script>   
</body>

</html>
