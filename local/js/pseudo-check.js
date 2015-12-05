$(document).ready( function() {
	//Псеудочекбокс
    $(document).on("click", ".pseudo-check", function () {
        var check="n";
        if($(this).find(".pseudo-check__real").prop("checked"))
            var check="y";
        
        if(check=="n") {
            $(this).addClass("check");
            $(this).find(".pseudo-check__real").prop("checked","true");
        }
        if(check=="y") {
            $(this).removeClass("check");
            $(this).find(".pseudo-check__real").prop("checked","");
        }
    });
});