<div class="page-header" filter-color="black">
    <div class="banner-home-slide">
        <div class="home-search">
            <div class="filter-cate">
                @include('layouts.formModal.formFilterCateModal')
            </div>
        </div>

        <div class="home-search-m d-none">
            <div class="search-button">
                <button type="submit" class="btn btn-home-search" id="btnSearch" data-toggle="modal" data-target="#modalFilterCate">Tìm kiếm bất động sản cho bạn</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalFilterCate" tabindex="-1" role="dialog" aria-labelledby="modalFilterCate" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                @include('layouts.formModal.formFilterCateModal', ['isMobile' => true])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Tìm kiếm</button>
            </div>
        </div>
    </div>
</div>
