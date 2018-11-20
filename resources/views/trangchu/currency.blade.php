<section id="news-card">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tỷ giá ngoại tệ</h2>
        </div>
      </div>
      <div class="row text-center"></div>
        @php
          $url = "https://www.vietcombank.com.vn/exchangerates/ExrateXML.aspx";
          $xml = file_get_contents($url);
          $data = simplexml_load_string($xml);
          $thoi_gian_cap_nhat = $data->DateTime;
          echo '<p>Cập nhật: '.$thoi_gian_cap_nhat.' - Nguồn dữ liệu tỷ giá Vietcombank.com.vn</p>';
          $ty_gia = $data->Exrate;
          echo '<div class="col-12 row">';
          foreach($ty_gia as $ngoai_te) {
              $curs = array('JPY', 'AUD',  'CAD',  'HKD',  'EUR',  'USD',  'SGD',  'THB',  'GBP',  'INR');
                if(in_array($ngoai_te['CurrencyCode'],$curs))
             {
                echo '<div class="col-lg-3 col-md-6 mb-2 "><div class="card">';
                $ma = $ngoai_te['CurrencyCode'];
                $ten = $ngoai_te['CurrencyName'];
                $gia_mua = $ngoai_te['Buy'];
                $gia_chuyen_khoan = $ngoai_te['Transfer'];
                $gia_ban = $ngoai_te['Sell'];

                echo '<b>' . $ten. ' (' . $ma . ')</b>';
                echo '<b style="color:green">Mua: '.$gia_mua.'</b>';
                echo '<b style="color:red">Bán: '.$gia_ban.'</b>';
                echo '</div></div>';
             }
              }
              echo '</div>';
        @endphp

      </div>
    </div>
  </section>

