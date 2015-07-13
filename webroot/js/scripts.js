$( "input#from_value" ).on('input',function() {
  $.get("convert/"+$( "input#from_value" ).val(), function(data, status){
        $("#result").html(data);
    });
});