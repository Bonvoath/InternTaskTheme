(function(){
    initializeComponent();
    function initializeComponent(){
        User.toList().then(function(){
            User.renderTable($('#ltable tbody'));
        });
        // insert user
        $('body').on('click', '#insert', function(){
            let user = $('#form').serialize();
            User.saveChange(user, function(){
                User.toList(function(data){
                    renderTable(data);
                    $('.closeForm').modal('hide');
                }); 
            });
        });

        // save update
        $('body').on('click', '#update', function(){
            let user = $('#form').serialize();
            User.saveChange(user, function(){
                User.toList(function(data){
                    renderTable(data);
                }); 
                $('.closeForm').modal('hide');
            });
        });

        // edit 
        $('body').on('click', '#btnEdit' , function(){
            let tr = $(this).closest('tr');
            let id = tr.attr('data-id');
            User.getById(id, function(data){
                console.log(data);
                let name = data.data.name;
                let email = data.data.email;
                $('#name').val(name);
                $('#email').val(email);
            });
            let user = $('form').serialize();
            User.saveChange(user, function(){
                User.toList(function(data){
                    renderTable(data);
                    
                    $('#exampleModalCenter').modal('hide');
                }); 
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

