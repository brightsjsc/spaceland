$(document).ready(function() {
    // --------- Quận/Huyện -----------------------
    $("input[name='district']").keyup(function(){
        get_districts();
    });

    $("input[name='district']").click(function(event){
        $("#search-box").css('display','none');
        get_all_districts();
    });

    function get_districts(){
        var url_get_districts = "{{ url('/ajax/getDistrictOfKeyword') }}";
        var district = $("input[name='district']").val();
        var token = $("input[name='_token']").val();

        $.ajax({
            url: url_get_districts,
            method: 'POST',
            data: {
                district: district,
                _token: token
            },
            success: function(data) {
                $(".search-district").css('display','block');
                $(".ul-result-districts").empty();
                $.each(data, function(key, value){
                    $(".ul-result-districts").append(
                        "<li><a class='district-value'>" + value.name_local + "</a></li>"
                    );
                });

                $(".district-value").click(function(){
                    var district_value = $(this).text();
                    $("input[name='district']").val(district_value);

                    $(".search-district").css('display','none');
                });
            }
        });
    }

    function get_all_districts(){
        var url_get_districts = "/ajax/getDistrictOfKeyword";
        var district = '';
        var token = $("input[name='_token']").val();

        $.ajax({
            url: url_get_districts,
            method: 'POST',
            data: {
                district: district,
                _token: token
            },
            success: function(data) {
                $(".search-district").css('display','block');
                $(".ul-result-districts").empty();
                $.each(data, function(key, value){
                    $(".ul-result-districts").append(
                        "<li><a class='district-value'>" + value.name_local + "</a></li>"
                    );
                });

                $(".district-value").click(function(){
                    var district_value = $(this).text();
                    $("input[name='district']").val(district_value);

                    $(".search-district").css('display','none');
                });
            }
        });
    }
    // --------- End Quận/Huyện -----------------------



    // --------- Diện tích -----------------------
    $("input[name='acreage']").keyup(function(){
        $(".search-acreage").css('display','block');

        $(".acreage-value").click(function(){
            var acreage_value = $(this).text();
            $("input[name='acreage']").val(acreage_value);

            $(".search-acreage").css('display','none');
        });
    });

    $("input[name='acreage']").click(function(event){
        $("#search-box").css('display','none');
        $(".search-acreage").css('display','block');

        $(".acreage-value").click(function(){
            var acreage_value = $(this).text();
            $("input[name='acreage']").val(acreage_value);

            $(".search-acreage").css('display','none');
        });
        event.stopPropagation();
    });

    $(document).click(function(){
        $(".search-acreage").css('display','none');
        $(".search-district").css('display','none');
    });
    // --------- End Diện tích -----------------------

});
