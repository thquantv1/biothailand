<section id="contact" style="">

  <div class="container" id="form-lien-he" >
    <div class="row mb-4">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Vui lòng để lại thông tin</h2>
        <h3 class="section-subheading text-danger " id="thongbao"></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST" action="{{ route('sendMail') }}">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" placeholder="Tên của bạn *" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" placeholder="Địa chỉ mail *" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Số điện thoại *" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" placeholder="Nội dung cần tư vấn *" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Gửi tin</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
