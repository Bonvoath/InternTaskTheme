var State = {};
    State.toList = function(){
        let self = this;
        return new Promise(function (resolve, reject){
            $.ajax({
                type: 'POST',
                url: 'state/listState',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).done(function(res){
                if(res.isError == false){
                    self.data = res.data;
                    resolve();
                }
                else{
                    reject(res.message);
                }
            });
        });
    }
    // js rander
    State.randerTable = function(table){
        table.html('');
        $.each(this.tables, function(index, state){
            var tr = '<tr data-id="'+state.id+'">'+
                '<td>'+(index+1)+'</td>'+
                '<td>'+state.created_at+'</td>'+
                '<td>'+state.updated_at+'</td>'+
            table.append(tr);
        });
    }
        

