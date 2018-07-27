(function(){
    initializeComponent();
    function initializeComponent(){
        State.toList().then(function(data){
            State.randerTable($('#ltable tbody'));
        });
    }
})();
