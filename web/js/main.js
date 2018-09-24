$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        getCities({id:id});

    });

    getCities({id:$('a.active').data('id')});

    $('body').on('click', '#btn-add-city', function(){
        getForm({id:$('a.active').data('id')});
    });

    $('body').on('click', '.glyphicon-remove',function(){
        deleteCity({id:$(this).data('id')});
    });

    $('body').on('click', '.glyphicon-pencil',function(){
        getUpdateForm({id:$(this).data('id')},$(this).data('id'));
    });

    $('body').on('click', '.city-cancel',function(){
        getCities({id:$('a.active').data('id')});

    });

    $('body').on('click', '.city-submit',function(){
        var url = $('form').prop('action');
        var data = $('form').serialize();
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(res){
                showCities(res);
            },
            error: function(){
                alert('Error!');
            }
        });

    });

    function showCities(cities){
        $('#cities').html(cities);
    }

    function showForm(form){
        $('#add-city').html(form);
    }

    function showUpdateForm(form, id){
        $('#'+id).html(form);
    }

    function getForm(data){
        getCities({id:$('a.active').data('id')});
        $.ajax({
            url: '/site/create',
            type: 'GET',
            data: data,
            success: function(res){
                if(!res) alert('Ошибка');
                showForm(res);
            },
            error: function(){
                alert('Error');
            }
        });
    }

    function getUpdateForm(data,id){
        getCities({id:$('a.active').data('id')});
        $.ajax({
            url: '/site/update',
            type: 'GET',
            data: data,
            success: function(res){
                if(!res) alert('Ошибка');
                showUpdateForm(res,id);
            },
            error: function(){
                alert('Error');
            }
        });
    }

    function getCities(data){
        $.ajax({
            url: '/site/view',
            type: 'POST',
            data: data,
            success: function(res){
                if(!res) alert('Ошибка');
                showCities(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    }

    function deleteCity(data){
        $.ajax({
            url: '/site/delete',
            type: 'POST',
            data: data,
            success: function(res){
                showCities(res);
            },
            error: function(){
                alert('Error!');
            }
        });

    }


});