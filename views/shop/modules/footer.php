<div class="container-fluid footer pt-5">

        <!-- --thongtin-- -->
        <!-- <div class="container info mt-5">

            <div class="row mt-5 mb-5">
                <div class="col-3 info-col">
                    <div class="h6">
                        GỌI MUA HÀNG(8:30 - 17:00)
                    </div>
                    <a href="tel:0974046550">

                        <i class="fas fa-phone-alt"></i>
                        1900 100KÓ
                    </a>

                    <div class="info-foot">Tất cả các ngày trong tuần</div>
                </div>
                <div class="col-3 info-col">
                    <div class="h6">GỌI MUA HÀNG(8:30 - 17:00) </div>

                    <a href="tel:0395342134">
                        <i class="fas fa-phone-alt"></i>
                        1900 100KÓ
                    </a>

                    <div class="info-foot">Tất cả các ngày trong tuần</div>
                </div>

                <div class="col-3">
                    <div class="h6">ĐĂNG KÍ NHẬN THÔNG TIN MỚI</div>
                    <form action="" class="form-inline">
                        <input type="text" class="form-control" style="width: 60%">
                        <a href="" class=" btn btn-outline-dark">Đăng kí</a>
                    </form>
                </div>
                <div class="col-3 info-social">
                    <div class="h6">THEO DÕI CHÚNG TÔI</div>
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div> -->
        <!-- ---- -->
        <!-- --footer-- -->

                    <div class="col-3 link-support">
                        <div class="h6">VỀ CHÚNG TÔI</div>
                        <div class="text">UTT 70DCTT23</div>
                    </div>
                    <div class="col-3">
                    <div class="weather">
                 <!-- <img src="<?php echo URL; ?>imgs/Temps-icon.png" ""> -->
                 <?php $city = 'hanoi';
                  $api_key = '92e9e5e2001a3c83d989b84ad7808039';
                  $api_url ="https://api.openweathermap.org/data/2.5/weather?q=".$city."&appid=".$api_key;
                  $dataweather = json_decode(file_get_contents($api_url),true);
                  $tem = $dataweather['main']['temp'];
                  $tem_C = $tem - 273.15;
                  $humidity =$dataweather['main']['humidity'];
                  echo "THoi tiet tai ".$city;
                  echo "<br>";
                  echo "Nhiệt độ : " .$tem_C. "ºC";
                  echo "<br>";
                  echo"Độ ẩm : ".$humidity."%"; ?>
                
                </div>
                        <div class="fb-page" data-href="https://www.facebook.com/vpn2101" data-tabs="timeline"
                            data-width="360" data-height="200" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/vpn2101/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/vpn2101/">Mọt +</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---- -->
    </div>