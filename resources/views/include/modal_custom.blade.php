<div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="display: inline">
                Konfirmasi <span class="name_action"></span> {{$name}}
            </div>
            <div class="modal-body">
                Apakah anda yakin akan <span class="name_action"></span> data <span id="name_target"></span>?
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                 <form id="form_action" method="post">
             
                @csrf
                <input class="btn btn-primary" type="submit" value="Kirim" />
                </form>
               
            </div>
        </div>
    </div>
</div>


    <script> 
    
    $('#custom-modal').on('show.bs.modal', function(e) {
 
    $(this).find('#form_action').attr('action', $(e.relatedTarget).data('href'));
    $(this).find('#name_target').text( $(e.relatedTarget).data('name'));
    $(this).find('.name_action').text( $(e.relatedTarget).data('action'));
});
     </script>
