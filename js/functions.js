
var getSquare = function(x){
    $.ajax({
        type: "GET",
        url: "../controllers/mathController.php",
        data:{x: x}, //name is a $_GET variable name here,
                            // and 'youwant' is its value to be passed 
        success: function(data){
            alert(data);
        }
    })
    //$.get("../controllers/mathController.php", {"x": x}, function (data){console.log(data);});
};

$(document).ready(function(){

});