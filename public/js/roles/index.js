(function(){
    initializeComponent();
    function initializeComponent(){
        Role.toList().then(function(data){
            Role.renderTable($('#ltable tbody'));
        });

        let req = {
            type: 'local',
            path: 'image/',
            name: 'logo'
        }
        Directory.makeDir(req);

        $('#modalRole').modal({
            backdrop: false,
            show: false
        });

        $('body').on('click', '#btnNew', function(){
            $('#modalRole').modal('show');
        });

        $('body').on('click', '#btnSave', function(){
            var req = {
                Name: $('#name').val()
            };
            Role.saveChange(req).then(function(){
                Role.toList().then(function(data){
                    Role.renderTable($('#ltable tbody'));
                    $('#modalRole').modal('hide');
                });
            });
        });
    }
})();
