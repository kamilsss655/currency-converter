$( "input#from_value" ).change(function() {
  $.get("convert/"+$( "input#from_value" ).val(), function(data, status){
        $("#result").html(data);
    });
});