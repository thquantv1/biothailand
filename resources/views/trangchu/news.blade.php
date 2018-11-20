<section id="news-card">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Tin tức</h2>
        <h3 class="section-subheading text-muted">Các tin mới</h3>
        <a class="btn btn-primary" href="{{ route('dstintuc') }}"><i class="fas fa-search-plus"></i>{{" "}}Xem tất cả
        </a>
      </div>
    </div>
    <div class="row text-center">
      @foreach ($dstintuc as $tt)
        <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="@if ($tt->picture==""){{ asset('img/no_image.svg') }}@else{{ asset('upload/news/'.$tt->picture) }}@endif" alt="">
          <div class="card-body">
            <h4 class="card-title">{{$tt->title}}</h4>
            <p class="card-text">{{str_limit($tt->summary, $limit = 80, $end = '...')}}</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('tintuc',['id'=>$tt->id,'tieude'=>changeTitle($tt->title)]) }}" class="btn btn-primary">Xem tiếp...</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
