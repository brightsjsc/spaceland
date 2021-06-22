window.addEventListener('DOMContentLoaded', (event) => {
    const itemDropDown = [
        {
            parent  : '.ul-result-product-cate',
            child   : '.product-cate-value',
            input   : 'input[name=product_cate]',
            elmHide : '.search-product-cate'
        },
        {
            parent  : '.ul-result-districts',
            child   : '.district-value',
            input   : 'input[name=district]',
            elmHide : '.search-district'
        },
        {
            parent  : '.ul-result-projects',
            child   : '.projects-value',
            input   : 'input[name=projects]',
            elmHide : '.search-projects'
        }
    ]
    //set click dropdown search
    itemDropDown.forEach(function(item){
        common.setClickChildernSearch(
            item.parent,
            item.child,
            item.input,
            item.elmHide
        );
    });

    const allIdWithoutHidden = [
        'acreage',
        'projects',
        'district',
        'product-cate'
    ];

    //set click document
    $(document).click(function(e){
        var target = e.target;
        var idTarget = target.getAttribute('id');
        if(!common.inArray(idTarget, allIdWithoutHidden)){
            common.hiddenAllSearch();
        }
    });

    // --------- Loại BĐS -----------------------
    $("input[name='product_cate']").keyup(function(){
        var product_cate = $("input[name='product_cate']").val();
        common.getAllProductCates(product_cate);
    });

    $("input[name='product_cate']").click(function(){
        common.hiddenAllSearch();
        common.getAllProductCates();
    });
    // --------- End Loại BĐS -----------------------

    // --------- Quận/Huyện -----------------------
    $("input[name='district']").keyup(function(){
        var district = $("input[name='district']").val();
        common.getAllDistricts(district);
    });

    $("input[name='district']").click(function(){
        common.hiddenAllSearch();
        common.getAllDistricts();
    });
    // --------- End Quận/Huyện -----------------------

    // --------- Dự án -----------------------
    $("input[name='projects']").keyup(function(){
        var projects = $("input[name='projects']").val();
        common.getAllProject(projects);
    });

    $("input[name='projects']").click(function(){
        common.hiddenAllSearch();
        common.getAllProject();
    });
    // --------- Dự án -----------------------

    // --------- Diện tích -----------------------
    $("input[name='acreage']").focusin(function(){
        common.hiddenAllSearch();
        $(".search-acreage").show();
    });

    $(".acreage-value").click(function(){
        var acreage_value = $(this).text();
        $("input[name='acreage']").val(acreage_value);
        $(".search-acreage").hide();
    });
    // --------- End Diện tích -----------------------
});
