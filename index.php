<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Banner-->
<div class="home__banner uk-light uk-section uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/Layer3.png" uk-img>
    <div class="uk-position-cover home__banner__overlay">

    </div>
    <div class="uk-width-1-1 uk-position-relative uk-text-center">
        <div class="uk-container">
            <h1 class="uk-h1 home__banner__title">Dịch vụ tuyển dụng nhân sự thuê Headhunter <br class="uk-visible@m">
                hàng đầu tại Việt Nam</h1>
            <p class="home__banner__desc">Cung cấp nhân sự chất lượng cao cho doanh nghiệp</p>
        </div>
    </div>
</div>
<!--/Banner-->

<!--Tuyển dụng thuê Headhunter là gì?-->
<div class="home__lagi uk-section-small">
    <div class="uk-container">
        <ul class="uk-breadcrumb home__lagi__breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">việc làm</a></li>
            <li><span>headhunter</span></li>
        </ul>
        <div class="uk-margin uk-text-center">
            <h3 class="uk-h3 uk-margin-remove home__visao__title1"><span>Tuyển dụng thuê Headhunter là gì?</span></h3>
        </div>
        <article class="uk-article home__lagi__article">
            <p>Headhunter” là một thuật ngữ gốc tiếng Anh, dịch ra tiếng Việt có nghĩa là thợ săn chất xám.</p>
            <p>Headhunter là cụm từ chỉ những người làm trong nhóm ngành nhân sự chuyên đi săn chất xám, nhân tài theo các đơn đặt hàng từ các công ty khách hàng hoặc cho chính công ty của mình.</p>
            <p>Dịch vụ tuyển dụng thuê Headhunter là dịch vụ chuyên dụng mà doanh nghiệp sẽ trả tiền để tuyển dụng nhân viên cho mình,</p>
        </article>
    </div>
</div>
<!--/Tuyển dụng thuê Headhunter là gì?-->

<!--Vì sao bạn nên lựa chọn dịch vụ tuyển dụng thuê tại vieclam123.vn-->
<div class="home__visao uk-background-01 uk-section-small">
    <div class="uk-container">
        <div class="uk-margin uk-text-center">
            <h3 class="uk-h3 uk-margin-remove home__visao__title1"><span>Vì sao bạn nên lựa chọn dịch vụ tuyển dụng thuê tại vieclam123.vn</span></h3>
        </div>
        <div class="uk-child-width-1-1" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/job-search.png',
                    'title' => 'Ứng viên chất lượng cao hơn:',
                    'desc' => 'Vieclam123.vn có hệ thống hơn 30.000 hồ sơ ứng viên chất lượng cao sẽ giúp doanh nghiệp tìm được nguồn nhân sự có chất lượng cao.',
                ),
                array(
                    'src' => 'images/money-bag.png',
                    'title' => 'Tiết kiệm chi phí:',
                    'desc' => 'Chi phí ban đầu của dịch vụ Headhunter có thể cao nhưng nếu bạn tính các chi phí cho nhân sự, tiếp thị, phỏng vấn,... thì chúng rất tiết kiệm.',
                ),
                array(
                    'src' => 'images/fast-time.png',
                    'title' => 'Thời gian tuyển dụng nhanh hơn:',
                    'desc' => 'Thông thường thời gian tuyển dụng những vị trí nhân sự cấp cao sẽ tốn rất nhiều thời gian. Nhưng với dịch vụ Headhunter chuyên nghiệp của vieclam123.vn sẽ giúp bạn có được danh sách ứng viên tiềm năng nhanh hơn.',
                ),
                array(
                    'src' => 'images/decision-marker.png',
                    'title' => 'Có cơ hội thử trước khi đưa ra quyết định:',
                    'desc' => 'Sau khi hết thử việc, nếu ứng viên không đáp ứng được nhu cầu thì doanh nghiệp sẽ phải tiếp tục tuyển dụng tiếp. Nhưng với dịch vụ Headhunter thì vieclam123.vn sẽ tìm người mới thay thế nếu ứng viên nghỉ đột ngột hay không đáp ứng chất lượng.',
                ),
                array(
                    'src' => 'images/success.png',
                    'title' => 'Cạnh tranh nhân sự với đối thủ:',
                    'desc' => 'Khi doanh nghiệp tìm được một ứng viên cấp cao trong ngành thì đồng nghĩa với việc đối thủ của bạn sẽ mất đi một nhân tài. Ngoài ra với dịch vụ Headhunter của vieclam123.vn sẽ giúp bạn hạn chế ứng viên bị “săn trộm”',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
                    <div class="<?= ($k%2 == 0 ) ? 'uk-flex-last@m' : '' ?>">
                        <div class="uk-text-center">
                            <img src="<?= $v['src'] ?>" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="uk-text-center">
                            <div class="uk-margin uk-text-center">
                                <h3 class="uk-h3 uk-margin-remove home__visao__title2"><span><?= $v['title'] ?></span></h3>
                            </div>
                            <p class="home__visao__desc"><?= $v['desc'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--/Vì sao bạn nên lựa chọn dịch vụ tuyển dụng thuê tại vieclam123.vn-->

<!--Quy trình dịch vụ tuyển dụng thuê của vieclam123.vn-->
<div class="home__quytrinh uk-section-small">
    <div class="uk-container">
        <div class="uk-margin uk-text-center">
            <h3 class="uk-h3 uk-margin-remove home__visao__title1"><span>Quy trình dịch vụ tuyển dụng thuê của vieclam123.vn</span></h3>
        </div>
        <div class="uk-margin uk-text-center">
            <img src="images/Quy-trinh.png" alt="">
        </div>
        <article class="uk-article home__quytrinh__article">
            <p>Để đáp ứng tốt nhất nhu cầu tuyển dụng của các đơn vị khách hàng có nhu cầu, Vieclam123.vn cung cấp dịch vụ tuyển dụng nhân sự thuê (Headhunter) với quy trình các bước như sau:</p>
            <p>Bước 1: Tiếp nhận đơn đặt hàng tuyển dụng thuê từ đơn vị khách hàng</p>
            <p>Bước 2: Xử lý thông tin theo yêu cầu của khách hàng</p>
            <p>Bước 3: Lọc hồ sơ ứng viên và phỏng vấn sơ bộ</p>
            <p>Bước 4: Gửi thông tin ứng viên cho khách hàng, trao đổi thông tin công việc và yêu cầu đơn vị khách hàng sắp xếp thời gian phỏng vấn</p>
            <p>Bước 5: Hẹn lịch phỏng vấn trực tiếp và yêu cầu ứng viên xác nhận lịch phỏng vấn tại đơn vị khách hàng</p>
            <p>Bước 6: Theo dõi quá trình tuyển dụng và phỏng vấn</p>
            <p>Bước 7: Theo dõi, chăm sóc ứng viên</p>
            <p>Bước 8: Giữ liên hệ với nhà tuyển dụng</p>
        </article>
    </div>
</div>
<!--/Quy trình dịch vụ tuyển dụng thuê của vieclam123.vn-->

<?php require "template-parts/layouts/footer.php"; ?>