 <!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark nav-custom-bg fixed-top py-0" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand js-scroll-trigger text-uppercase" href="#page-top">
        <img src="{{  $cauhinh->get('logo')->value }}" alt="Trà Sữa Huy">
         {{  $cauhinh->get('tencty')->value}}
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Nhượng Quyền</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Sản Phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Về Chúng Tôi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Các Thành Viên</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Liên Hệ</a>
          </li>
        </ul>
      </div>
    </div>
</nav>