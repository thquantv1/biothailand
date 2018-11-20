<nav id="sidebar" >
    <div class="sidebar-header">
        <h3>BIO THAILAND</h3>
    </div>
    <ul class="list-unstyled components">
        <p>Trang quản trị</p>
        <li>
            <a href="#loaisanphamSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-wine-glass-alt"></i>
            Loại Sản Phẩm</a>
            <ul class="collapse list-unstyled" id="loaisanphamSubmenu">
                <li>
                    <a href="{{ route('Catalog_list') }}"><i class="fas fa-list"></i>Danh sách</a>
                </li>
                <li>
                    <a href="{{ route('Catalog_add') }}"><i class="fas fa-plus"></i>Thêm</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#sanphamSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-wine-glass-alt"></i>
            Sản Phẩm</a>
            <ul class="collapse list-unstyled" id="sanphamSubmenu">
                <li>
                    <a href="{{ route('SanPham_list') }}"><i class="fas fa-list"></i>Danh sách</a>
                </li>
                <li>
                    <a href="{{ route('SanPham_add') }}"><i class="fas fa-plus"></i>Thêm</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#staticSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="far fa-file-alt"></i>
            Trang tĩnh</a>
            <ul class="collapse list-unstyled" id="staticSubmenu">
                <li>
                    <a href="{{ route('StaticPage_list') }}"><i class="fas fa-list"></i>Danh sách</a>
                </li>
                <li>
                    <a href="{{ route('StaticPage_add') }}"><i class="fas fa-plus"></i>Thêm</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#newstypeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="far fa-newspaper"></i>
            Loại Tin</a>
            <ul class="collapse list-unstyled" id="newstypeSubmenu">
                <li>
                    <a href="{{ route('NewsType_list') }}"><i class="fas fa-list"></i>Danh sách</a>
                </li>
                <li>
                    <a href="{{ route('NewsType_add') }}"><i class="fas fa-plus"></i>Thêm</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#newsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="far fa-newspaper"></i>
            Tin Tức</a>
            <ul class="collapse list-unstyled" id="newsSubmenu">
                <li>
                    <a href="{{ route('news_list') }}"><i class="fas fa-list"></i>Danh sách</a>
                </li>
                <li>
                    <a href="{{ route('news_add') }}"><i class="fas fa-plus"></i>Thêm</a>
                </li>
            </ul>
        </li>

        <a class="ml-1" href="{{ route('pageconfig') }}"><i class="fas fa-cogs"></i> Cài đặt</a>
        <li>
            <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-users"></i>
            Quản Trị Viên</a>
            <ul class="collapse list-unstyled" id="userSubmenu">
                <li>
                    <a href="{{ route('User_list') }}"><i class="fas fa-list"></i>Danh sách</a>
                </li>
                <li>
                    <a href="{{ route('User_add') }}"><i class="fas fa-plus"></i>Thêm</a>
                </li>
            </ul>
        </li>
        {{-- <li>
            <a href="#settingSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cấu Hình</a>
            <ul class="collapse list-unstyled" id="settingSubmenu">
                <li>
                    <a href="{{ route('setting_list') }}">Danh sách</a>
                </li>
                <li>
                    <a href="{{ route('setting_add') }}">Thêm</a>
                </li>
            </ul>
        </li> --}}
    </ul>
</nav>
