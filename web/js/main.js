$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");

        getCities('/site/view','POST',{id:id});
    });

    getCities('/site/view','POST',{id:$('a.active').data('id')});

    function showCities(cities){
        $('#cities').html(cities);
    }

    function getCities(url,type,data){
        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(res){
                // console.log(res);
                showCities(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    }

});