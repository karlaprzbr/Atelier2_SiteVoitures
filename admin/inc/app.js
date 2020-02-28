//app var
var app = {};

(function($){
    "use strict";

    /*************************
     Predefined Variables
    *************************/

    var $window = $(window),
        $document = $(document);

    // Segmenter ses différentes app en fonction de leur type d'intervention sur le DOM

    app.event = function () {
        $("#select").change(function(){
            $.ajax({
                url: "inc/function.php",
                type: "get",
                data: {
                    id_car: $(this).children("option:selected").val()
                },
                success: function(data) {
                    $("#area").html(data);
                }
            });
        });
    }

    //Document ready functions
    $document.ready(function () {
        app.event();
    });

})(jQuery);