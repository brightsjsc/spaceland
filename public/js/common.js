class Common {
    classItemSearch() {
        return [
            '.search-product-cate',
            '.search-district',
            '.search-projects',
            '.search-acreage'
        ]
    }
    constructor(){
        this.ajax               = this.ajax.bind(this);
        this.hiddenAllSearch    = this.hiddenAllSearch.bind(this);
    }
    ajax(url, params, succFunc) {
        $.ajax({
            url : url,
            type : 'post',
            dataType : 'json',
            data : params,
            success : function(result){
                succFunc(result);
            },
            error : function(error){
                alert('errorFunc: Ajax error! Check console!');
                console.log(error).responseText;
                return false;
            }
        });
    }
    hiddenAllSearch (){
        let allItemSearch = this.classItemSearch();
        $(allItemSearch.join(', ')).hide();
    }
    setCarousel(){
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        });
    }
    setClickChildernSearch (parent, child, input, elmHide){
        $(parent).on('click', child, function(){
            let text = $(this).text();
            $(input).val(text);
            $(elmHide).hide();
        })
    }
    getAllProductCates(product_cate = ''){
        var url = BASE_URL + '/ajax/getProductCateOfKeyword';
        var params = {
            product_cate: product_cate
        };
        this.ajax(url, params, function(result){
            let html = '';
            result.forEach(function(item){
                html += "<li><a class='product-cate-value'>" + item.name + "</a></li>";
            });
            $(".search-product-cate").show();
            $(".ul-result-product-cate").empty().append(html);
        });
    }
    getAllDistricts(district = ''){
        var url = '/ajax/getDistrictOfKeyword';
        var params = {
            district: district
        };
        common.ajax(url, params, function(result){
            let html = '';
            result.forEach(function(item){
                html += "<li><a class='district-value'>" + item.name_local + "</a></li>";
            });
            $(".search-district").show();
            $(".ul-result-districts").empty().append(html);
        })
    }
    getAllProject(projects = ''){
        var url = '/ajax/getProjectOfKeyword';
        var district = $("input[name='district']").val();
        var params = {
            district: district,
            projects: projects,
        };
        common.ajax(url, params, function(result){
            let html = '';
            result.forEach(function(item){
                html += "<li><a class='projects-value'>" + item.name + "</a></li>";
            });
            $(".search-projects").show();
            $(".ul-result-projects").empty().append(html);
        })
    }
    inArray(needle, haystack) {
        var length = haystack.length;
        for(var i = 0; i < length; i++) {
            if(haystack[i] == needle) return true;
        }
        return false;
    }
}
var common = new Common();
