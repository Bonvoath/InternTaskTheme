(function(){
    var isedit = false;
    initializeComponent();
    function initializeComponent(){
        User.toList().then(function(){
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
            if(isedit == false){
                User.saveChange(user, function(){
                    User.toList().then(function(){
                        User.renderTable($('#ltable tbody'));
                    });
                    
                });
            }
            else{
                User.updateChange(user, function(){
                    User.toList().then(function(){
                        User.renderTable($('#ltable tbody'));
                    });
                });
            }
            
            $('#exampleModalCenter').modal('hide');   
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
                $('#exampleModalCenter').modal('show');
            });
        });
        
        // delete data
        $('body').on('click', '#tblDel', function (){
            let tr = $(this).closest('tr');
            let id = tr.attr('data-id');
            User.delete(id, function (res){
               tr.remove(); 
            });
        });
    }
})();

