$(document).ready(function(){
    $("#btngerarinput").click(function(){
        
        var input = $("<input/>",{
            type: "text",
            name: "nomes[]",
            required:"required"
        });
        $("#campos ").append(input,"<br>");
    });
    
    $("#btnvalor").click(function(){
        var inputValues = new Array();
        //contador jquey
        $("input[name='nomes[]']").each(function(){
            inputValues.push($(this).val());
        });
        alert(inputValues);
    });
});


