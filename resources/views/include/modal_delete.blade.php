<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Konfirmasi Hapus {{$name}}
            </div>
            <div class="modal-body">
                Apakah anda yakin akan menghapus data <span id="name_delete"></span>?
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                 <form id="form_delete" method="post">
                     @method('DELETE')
                @csrf
                <input class="btn btn-danger" type="submit" value="Delete" />
                </form>
               
            </div>
        </div>
    </div>
</div>
@section('js_include')
   <script> 
 $(function () {
    $('#confirm-delete').on('show.bs.modal', function(e) {
 
    $(this).find('#form_delete').attr('action', $(e.relatedTarget).data('href'));
    $(this).find('#name_delete').text( $(e.relatedTarget).data('name'));
});
 })
     </script>
@stop
  
