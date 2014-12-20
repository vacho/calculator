(function ($) {
    var nuevo = true;
    $(document).ready(function() {

        /*
        * Aqui se escribe cada numero que haga click
        */
        for(i=0; i<10; i++){
            var obj = '#edit-' + i;
            $(document).on("click",obj,function(event){ 
                if(nuevo)
                    var num = $('#edit-display').val() + this.value;
                else{
                    var num = this.value;
                    nuevo = true;
                }
                $('#edit-display').val(num);
                event.preventDefault();
            });
        }
        /*
        * Es el punto para decimales.
        */
        $('#op-pto').click(function(event){
            if(nuevo)
            var num = $('#edit-display').val() + '.';
        else {
            num = '.';
            nuevo = true;
        }
            $('#edit-display').val(num);
            event.preventDefault();
        });
       
        /*
        * 'AC' Limpia toda nuestra pantalla
        */
        $('#op-AC').click(function(event){
            $('#edit-display').val('');
            event.preventDefault();
        });
    
        /*
        * '+' La operacion de suma.
        */
        $('#op-plus').click(function(event){
            $('#edit-display').val($('#edit-display').val() + '+') ;
            nuevo = true;
            event.preventDefault();
        });
       
        /*
        * '-' La operacion de resta.
        */
        $('#op-minus').click(function(event){
            $('#edit-display').val($('#edit-display').val() + '-') ;
            nuevo = true;
            event.preventDefault();
        });
       
        /*
        * '*' La operacion de multiplicacion.
        */
        $('#op-mul').click(function(event){
            $('#edit-display').val($('#edit-display').val() + '*') ;
            nuevo = true;
            event.preventDefault();
        });
       
        /*
        * '/' La operacion de division.
        */
        $('#op-div').click(function(event){
            $('#edit-display').val($('#edit-display').val() + '/') ;
            nuevo = true;
            event.preventDefault();
        });
    
        /*
        * '=' La operacion de igual. Devuelve el resultado de una operacion
        */
        $('#op-equ').click(function(event){
        var respuesta = eval($('#edit-display').val());
            $('#edit-display').val(respuesta);
            nuevo = false;
            event.preventDefault();
        });
        
        /*
        * 'CLR' Borra un numero a la vez, usualmente solo el ultimo.
        */
        $('#op-Clr').click(function(event){
            var num = $('#edit-display').val();
            var newvalor='';
            for(i=0; i<num.length - 1; i++)
                newvalor += num[i];
            $('#edit-display').val(newvalor);
            event.preventDefault();
        });
    });
})(jQuery);
