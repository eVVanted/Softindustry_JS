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
            getForm('/site/add','POST',{id:$('a.active').data('id')});

        });

        $('.glyphicon-remove').click(function(){
            console.log('delete');
        });

        $('.glyphicon-pencil').click(function(){
            console.log('update');
            getUpdateForm('/site/update','POST',{id:$(this).data('id')},$(this).data('id'));
        });

    }

    function showForm(form){
        $('#add-city').html(form);
        console.log('form');

        $('#btn-cancel').click(function(){
            getCities('/site/view','POST',{id:$('a.active').data('id')});

        });
        $('#btn-submit').click(function(){
            var data = $('form').serialize();
            $.ajax({
                url: '/site/create',
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

        $('#btn-cancel').click(function(){
            getCities('/site/view','POST',{id:$('a.active').data('id')});

        });
        $('#btn-submit').click(function(){
            var data = $('form').serialize();
            $.ajax({
                url: '/site/create',
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


});