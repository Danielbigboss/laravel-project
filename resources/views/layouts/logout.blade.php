
 <div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Sign Out</h5>
                 <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="container-fluid">
                     <h5 class="text-center">Are you sure you want logout <br> {{ auth()->user()->name }}</h5>
                 </div>
             </div>
             <div class="modal-footer">

                 <form class="logoutuser w-100">
                     <button class="btn btn-danger w-100">Confirmed Action</button>
                 </form>
             </div>
         </div>
     </div>
 </div>

 {{-- <script>
     $('#exampleModal').on('show.bs.modal', event => {
         var button = $(event.relatedTarget);
         var modal = $(this);
         // Use above variables to manipulate the DOM

     });
 </script> --}}

 <script>
     $(document).on('submit', '.logoutuser', function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/logoutuser",
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (res) {
                if (res.status === 200) {
                    location.href = '/login'
                }
            }
        });
    })
 </script>
