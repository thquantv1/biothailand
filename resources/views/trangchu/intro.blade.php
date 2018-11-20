<section class="intro">
	<div class="container bg-light">
		<div class="row">
			<div class="col-sm-12 col-lg-8">
                <h1 class="tencongty text-uppercase">{{  $cauhinh->valueof("tencty_daydu")  }}</h1>
                {!! $cauhinh->valueof("gioithieucty") !!}
                <a class='btn btn-primary btn-xl text-uppercase' href="{{ route('tongquan') }}">Xem thêm</a>
            </div>
			<div class="col-sm-12 col-lg-4">
				<img src="img/product/IMG_0708.JPG" class="img-fluid w-100"/>
			</div>
		</div>
	</div>
</section>

<section class="slogan" id="slogan">
    <div class="container">
        <hr class="slogan-line" style="width: 25%;">
        <div class="slogan-text">
            {!! $cauhinh->valueof("slogan") !!}
        </div>
        <hr class="slogan-line" style="width: 25%;">
    </div>
</section>
