(function(){
    var isedit = false;
    initializeComponent();
    function initializeComponent(){
        var query = {
            search: $('#search').val()
        };
        User.toList(query).then(function(){
            User.renderTable($('#ltable tbody'));
        });
        
        $('#exampleModalCenter').modal({
            backdrop: false,
            show: false
        });

        $('#exampleModalCenter').on('hidden.bs.modal', function (e) {
            $('[name="id"]').val('');
            $('#name').val('');
            $('#email').val('');
            $('#password').val('');
            isedit = false;
          });

        $('body').on('click', '#insert', function(){
            let user = $('#form').serialize();
            console.log(user);
            if(isedit == false){
                User.saveChange(user, function(){
                    User.toList().then(function(){
                        User.renderTable($('#ltable tbody'));
                        swal("You insert user name successfuly!", {
                            buttons: false,
                            timer: 1500
                        });
                        $('#exampleModalCenter').modal('hide');
                    }); 
                });
            }
            else{
                User.updateChange(user, function(){
                    User.toList().then(function(){
                        User.renderTable($('#ltable tbody'));
                        swal("You has been update user name successfuly!", {
                            buttons: false,
                            timer: 1500
                        });
                        $('#exampleModalCenter').modal('hide');
                    });
                });
            }
        });

        // edit 
        $('body').on('click', '#btnEdit' , function(){
            isedit = true;
            let tr = $(this).closest('tr');
            let id = tr.attr('data-id');
            User.getById(id, function(data){
                $('[name="id"]').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('.hidePass').hide();
                $('#exampleModalCenter').modal('show');
            });
        });
        
        // delete data
        $('body').on('click', '#tblDel', function (){
            let tr = $(this).closest('tr');
            let id = tr.attr('data-id');
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this User name!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    User.delete(id, function (res){
                        tr.remove();
                    });
                }
            });

        });
        $('body').on('keyup', '#search', function (){
            var query = {
                search: $('#search').val()
            };
            User.toList(query).then(function(){
                User.renderTable($('#ltable tbody'));
            });

        });
    }
})();

