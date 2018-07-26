(function(){
    var isedit = false;
    initializeComponent();
    function initializeComponent(){
        User.toList().then(function(){
            User.renderTable($('#ltable tbody'));
        });
        // insert user
        
        $('body').on('click', '#insert', function(){
            let user = $('#form').serialize();
            if(isedit == false){
                
                User.saveChange(user, function(){
                    User.toList().then(function(){
                        User.renderTable($('#ltable tbody'));
                    });
                    $('#exampleModalCenter').modal('hide'); 
                });
            }
            else{
                User.updateChange(user, function(){
                    User.toList().then(function(){
                        User.renderTable($('#ltable tbody'));
                    });
                    $('#exampleModalCenter').modal('hide'); 
                });
            }     
        });

        // edit 
        $('body').on('click', '#btnEdit' , function(){
            isedit = true;
            let tr = $(this).closest('tr');
            let id = tr.attr('data-id');
            User.getById(id, function(data){
                console.log(data);
                let name = data.data.name;
                let email = data.data.email;
                $('#name').val(name);
                $('#email').val(email);
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

