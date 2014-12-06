(function ($) {
    $(document).ready(function() {
       for(i=0; i<10; i++){
           var obj = '#edit-' + i;
           $(document).on("click",obj,function(event){ 
               var num = $('#edit-display').val() + this.value;    
               $('#edit-display').val(num);
               event.preventDefault();
           });
       }
       //Por hacer funcion que reemplace este for
       $('#op-Clr').click(function(){
           $('#edit-display').val('');
           event.preventDefault();
       });
      
    });
}) (jQuery);
