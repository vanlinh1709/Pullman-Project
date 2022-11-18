<?php get_header('', 'Đăng nhập') ?>
<!--begin::Main-->
    <!-- login register wrapper start -->
    <div class="login-register-wrapper section-padding">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row justify-content-center ">
                    <!-- Login Content Start -->
                    <div class="col-lg-6 ">
                        <div class="login-reg-form-wrap">
                            <h4>Đăng nhập</h4>
                            <form action="" method="post">
                                <div class="single-input-item">
                                    <input type="email" name="username" placeholder="Nhập email" required />
                                </div>
                                <div class="single-input-item">
                                    <input type="password" name="password" placeholder="Nhập mật khẩu của bạn" required />
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <div class="remember-meta">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                <label class="custom-control-label" for="rememberMe">Nhớ tôi</label>
                                            </div>
                                        </div>
                                        <a href="#" class="forget-pwd">Quên mật khẩu?</a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="btn btn-sqr">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
<!--end::Main-->
<?php get_footer('') ?>