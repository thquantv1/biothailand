<section class="bg-light" id="team">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Các Thành viên</h2>
          {{--  <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>  --}}
        </div>
      </div>
      <div class="row">
        @foreach ($dsthanhvien as $mem)
          <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="
            @if ($mem->hinh=="")
              {{ asset('img/no_image.svg') }}
              @else
              {{ asset('upload/member/'.$mem->hinh) }}
            @endif

            " alt="">
            <h4>{{$mem->ten}}</h4>
            <p class="text-muted">{{$mem->chucvu}}</p>
            <p class="text-muted">{{$mem->thongtin}}</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="{{$mem->twlink}}">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{$mem->fblink}}">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{$mem->iglink}}">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        @endforeach

      </div>

    </div>
  </section>
