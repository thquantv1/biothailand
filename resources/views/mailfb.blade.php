<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="header" style="display: flex;
    border: 1px solid darkgray;
    background-color: #a9db80;
    margin: 0;">
    <img class="header-logo" src="http://biothailand.vn/img/biothailand_logo.png" style="width: 50px;
    height: 50px;" width="50" height="50" />
    <h1 class="header-text" style="vertical-align: -webkit-baseline-middle;
    vertical-align: middle;
    margin-top: auto;
    margin-bottom: auto;">BIO Thailand - website</h1>

</div>
<div class="content" style="background-color: whitesmoke;
    margin: 0;">
    <p style="font-weight: bold;">
        Chúng tôi vừa nhận được một yêu cầu liên hệ từ: {{$name}}
    </p>

    <p style="font-weight: bold;">Địa chỉ Email: <a href="mailto:$email">{{$email}}</a></p>
    <p style="font-weight: bold;">Số Điện Thoại: <a href="tel:$sdt">{{$sdt}}</a></p>
    <p style="font-weight: bold;">Nội Dung:</p>
    <div class="noidung" style="border: 1px solid darkgray;">
        {!!$noidung!!}
    </div>
</div>
</body>
</html>
