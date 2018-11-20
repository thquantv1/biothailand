<section class="bg-light" id="portfolio">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">sản phẩm</h2>
        <h3 class="section-subheading text-muted">Các sản phẩm tiêu biểu</h3>
        <a class="btn btn-primary" href="{{ route('dssanpham') }}"><i class="fas fa-search-plus"></i>{{" "}}Xem tất cả sản phẩm</a>
      </div>
    </div>
    <div class="row pt-md-5">
      @foreach ($dssanpham as $sp)
       <!--Sản phẩm-->
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" href="{{ route('sanpham',['id'=>$sp->id,'tieude'=>changeTitle($sp->ten)]) }}">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid w-100" src="@if ($sp->hinh==""){{ asset('img/no_image.svg') }}@else{{ asset('upload/sanpham/'.$sp->hinh) }}@endif" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>{{$sp->ten}}</h4>
          <p class="text-muted">{{$sp->loai}}</p>
        </div>
      </div>
      <!--End Sản phẩm-->
      @endforeach
      
      
    </div>
  </div>
</section>