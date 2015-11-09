$(document).ready(function(){
    
    $("#btnadicionar").click(function(){
        
        var label = $("<label/>",{
            type: "text",
            for: "nomes[]",
            value:"nome"
            
        });
        
        var input = $("<input/>",{
            type: "text",
            name: "nomes[]",
            required:"required"
        });
        $("#campos ").append(input,"<br>");
    });
});