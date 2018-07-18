(function(){
    initializeComponent();
    function initializeComponent(){
        Role.toList().then(function(data){
            Role.renderTable($('#ltable tbody'));
        });
    }
})();