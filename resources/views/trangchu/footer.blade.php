<section class="main-footer">
        <div class="container">
            <div class="row">
                    <div class="col-md-5">
                        <h4 style="color:#D8BE56">{{$cauhinh->valueof('tencty_daydu')}}</h4>
                        <span class="fa fa-address-book fa-fw" >&nbsp;</span>&nbsp; {{$cauhinh->valueof('diachicty')}}<br/>
                        <span class="fa fa-fw fa-percent" >&nbsp;</span>&nbsp; {{$cauhinh->valueof('mst')}}<br/>
                        <span class="fa fa-arrow-circle-right fa-fw" >&nbsp;</span>&nbsp; {{$cauhinh->valueof('diachivp')}}<br/>
                        <span class="fa fa-building fa-fw" >&nbsp;</span>&nbsp;{{$cauhinh->valueof('diachi_nhamay')}}<br/>
                        <span class="fa fa-fw fa-phone" >&nbsp;</span>&nbsp;{{$cauhinh->valueof('sdt')}} - <u>FAX :</u> {{$cauhinh->valueof('fax')}}
                    </div>
                    <div class="col-md-3">
                            <h4 style="color:#D8BE56">Cộng đồng</h4>
                            <p class="copyright"><a href="https://facebook.com/biothailandvn">Facebook</a></p>
                            <p class="copyright"><a href="https://twitter.com/biothailandvn">Twitter</a></p>
                        </div>
                    <div class="col-md-4">
                        <h4 style="color:#D8BE56">Bản đồ</h4>
                        {!!$cauhinh->valueof('gmap')!!}
                    </div>
                </div>
        </div>
</section>
<hr class="footer-line line"/>
<footer class="bottom-footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Bản quyền &copy; Bio Thailand 2018</span>
        </div>
        <div class="col-md-4">
            <span class="copyright">Thiết kế bởi Công nghệ số ASC</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Chính sách bảo mật</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Điều khoản sử dụng</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
