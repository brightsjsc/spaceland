<div class="sidebar" data-color="orange" data-background-color="black">
	<!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
		Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
      <a href="{{ route('admin.dashboard') }}" class="simple-text logo-mini">  </a>
      <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal"> ADMINISTRATOR </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="{{ asset('assets/img/faces/avatar.jpg') }}" />
      </div>
      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username">
          <span>{{ Auth::user()->name }}</span>
        </a>
      </div>
    </div>
    <ul class="nav">
      <?php
        $url_current = explode('/',url()->current());
        isset($url_current[4]) ? $model = $url_current[4] : $model = '';
        isset($url_current[5]) ? $model_child = $url_current[5] : $model_child = '';
      ?>
        <li
        @if( $model == '' && $model_child == '' )
          class="nav-item active"
        @else
          class="nav-item"
        @endif
      >
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="material-icons">home</i>
          <p> Bảng điều khiển </p>
        </a>
      </li>
      <li
      >
        <a class="nav-link" href="{{ route('listcontact') }}" style="color: #fff;">
          <i class="material-icons">perm_contact_calendar</i>
          <p> Liên Hệ </p>
        </a>
      </li>
       <li
        @if ($model == 'product-cate' || $model == 'product')
          class="nav-item active"
        @else
          class="nav-item"
        @endif
      >
        <a class="nav-link" data-toggle="collapse" href="#pagesProduct">
          <i class="material-icons">category</i>
          <p> Bất động sản
            <b class="caret"></b>
          </p>
        </a>
        <div id="pagesProduct"
          @if ($model == 'product-cate' || $model == 'project' || $model == 'product')
              class="collapse show"
          @else
              class="collapse"
          @endif
        >
          <ul class="nav">
            <li
              @if( $model == 'product-cate' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.productCate.index') }}">
                <span class="sidebar-mini"> D </span>
                <span class="sidebar-normal"> Danh mục</span>
              </a>
            </li>

            <li
              @if( $model == 'project' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.project.index') }}">
                <span class="sidebar-mini"> D </span>
                <span class="sidebar-normal"> Dự án</span>
              </a>
            </li>

            <li
              @if( $model == 'product' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.product.index') }}">
                <span class="sidebar-mini"> S </span>
                <span class="sidebar-normal"> Sản phẩm</span>
              </a>
            </li>
          </ul>
        </div>
      </li>



      <li
        @if( $model == 'system' )
          class="nav-item active"
        @else
          class="nav-item"
        @endif
      >
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
          <i class="material-icons">supervisor_account</i>
          <p> Quản lý thành viên
            <b class="caret"></b>
          </p>
        </a>
        <div id="pagesExamples"
          @if( $model == 'system' )
              class="collapse show"
          @else
              class="collapse"
          @endif
        >
          <ul class="nav">
            <li
              @if( $model_child == 'user' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.system.user.index') }}">
                <span class="sidebar-mini"> U </span>
                <span class="sidebar-normal"> Người dùng hệ thống </span>
              </a>
            </li>

            <li
              @if( $model_child == 'role' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.system.role.index') }}">
                <span class="sidebar-mini"> R </span>
                <span class="sidebar-normal"> Nhóm và phân quyền </span>
              </a>
            </li>

            <li
              @if( $model_child == 'permission' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.system.permission.index') }}">
                <span class="sidebar-mini"> Q </span>
                <span class="sidebar-normal"> Quản lý quyền </span>
              </a>
            </li>


          </ul>
        </div>
      </li>


      <li
        @if ($model == 'post-category' || $model == 'post')
          class="nav-item active"
        @else
          class="nav-item"
        @endif
      >
        <a class="nav-link" data-toggle="collapse" href="#pagesPost">
          <i class="material-icons">description</i>
          <p> Bài viết
            <b class="caret"></b>
          </p>
        </a>
        <div id="pagesPost"
          @if ($model == 'post-category' || $model == 'post')
              class="collapse show"
          @else
              class="collapse"
          @endif
        >
          <ul class="nav">
            <li
              @if( $model == 'post-category' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.post_category.index') }}">
                <span class="sidebar-mini"> D </span>
                <span class="sidebar-normal"> Danh mục </span>
              </a>
            </li>

            <li
              @if( $model == 'post' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.post.index') }}">
                <span class="sidebar-mini"> S </span>
                <span class="sidebar-normal"> Danh sách bài viết </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
