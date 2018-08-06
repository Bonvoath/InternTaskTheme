(function(){
    var isedit = false;
    var insert = true;
    initializeComponent();
    function initializeComponent(){
        State.toList().then(function(data){
            State.randerTable($('#table tbody'));
        });

        $('#exampleModalCenter').modal({
            backdrop: false,
            show: false
        });

        $('#exampleModalCenter').on('hidden.bs.modal', function (e) {
            $('[name="id"]').val('');
            $('#name').val('');
            isedit = false;
        });


        // btn create new state

        $('body').on('click', '#insert', function () {
           let state = $('#form').serialize();

           if (isedit == false){

               State.saveChange(state , function () {
                   State.toList().then(function (data) {
                       State.randerTable($('#table tbody'));
                       swal("You insert State name successfuly!", {
                           buttons: false,
                           timer: 1500,
                       });
                       //$.notify('You insert State name successful' ,'success');
                       $('#exampleModalCenter').modal('hide');
                   });
               });
           }
           else {
               State.saveUpdate(state, function () {
                   State.toList().then(function (data) {
                       State.randerTable($('#table tbody'));
                       swal("You update State name successfuly!", {
                           buttons: false,
                           timer: 1500,
                       });
                       $('#exampleModalCenter').modal('hide');
                   });
               });
           }
        });

        // get state id
        $('body').on('click', '#getId' , function () {
            isedit = true;
            let tr = $(this).closest('tr');
            let id = tr.attr('data-id');
            State.getById(id, function(data){
                $('[name="id"]').val(data.id);
                $('#name').val(data.name);
                $('#exampleModalCenter').modal('show');
            });
        });
        // delete data

        $('body').on('click', '#tblDel', function (){
            let tr = $(this).closest('tr');
            let Id = tr.attr('data-id');
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this State name!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    State.delete(Id, function (res){
                        tr.remove();
                    });
                }
            });
        });
    }
})();
















