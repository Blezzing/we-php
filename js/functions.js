
var getSquare = function(x){
    $.ajax({
        type: "GET",
        url: "controllers/mathController.php",
        data:{x: x},
        success: function(data){
            alert(data);
        }
    })
};

$(document).ready(function(){
    $("#btn-get-square").on("click", function () {
        getSquare($('#squareText').val());
    });
});