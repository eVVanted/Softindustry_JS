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

        $('#btn-add-city').click(function(){
            // getForm();
            getForm('/site/create','GET',{id:$('a.active').data('id')});

        });

        $('.glyphicon-remove').click(function(){
            console.log('delete');
            deleteCity({id:$(this).data('id')});
        });

        $('.glyphicon-pencil').click(function(){
            console.log('update');
            getUpdateForm('/site/update','GET',{id:$(this).data('id')},$(this).data('id'));
        });

    }

    function showForm(form){
        $('#add-city').html(form);
        console.log('form');

        $('div.city-form').find(".city-cancel").click(function(){
            getCities('/site/view','POST',{id:$('a.active').data('id')});

        });
        $('div.city-form').find(".city-submit").click(function(){
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
    }

    function showUpdateForm(form, id){
        $('#'+id).html(form);
        console.log('form');

        $('div.city-update').find(".city-cancel").click(function(){
            getCities('/site/view','POST',{id:$('a.active').data('id')});

        });
        $('div.city-update').find(".city-submit").click(function(){
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
    }

    function getForm(url,type,data){
        getCities('/site/view','POST',{id:$('a.active').data('id')});
        $.ajax({
            url: url,
            type: type,
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

    function getUpdateForm(url,type,data,id){
        getCities('/site/view','POST',{id:$('a.active').data('id')});
        $.ajax({
            url: url,
            type: type,
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

    function getCities(url,type,data){
        $.ajax({
            url: url,
            type: type,
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