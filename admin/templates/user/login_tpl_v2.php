<div class="login-box">
    <div class="loginWrapper" id="main_ad">
        <div class="widget1" id="loginForm">
            <div class="title">
                <div>Đăng nhập</div>
            </div>
            <form id="validate" class="form" method="post">
                <fieldset>
                    <div class="formRow">
                        <label for="login"><i class="fa fa-user" aria-hidden="true"></i> Tài khoản</label>
                        <div class="loginInput"><input type="text" name="username" class="validate[required] login__input" id="username"/></div>
                    </div>
                    
                    <div class="formRow">
                        <label for="pass"><i class="fa fa-lock" aria-hidden="true"></i> Mật khẩu</label>
                        <div class="loginInput"><input type="password" name="password" id="password" class="validate[required] login__input" id="pass"/></div>
                    </div>
                    
                    <div class="loginControl">
                        <!-- <div class="rememberMe"><a href="#" class="forgot-pwd">Bạn quên mật khẩu?</a></div> -->
                        <button type="button" style=" outline:none;" value="Đăng nhập" class="btn-login">Đăng nhập</button>
                        <div class="alert my-alert alert-login d-none text-center p-2 mb-0 mt-2" role="alert"></div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="info_login">
            <div class="logo_login"><img src="assets/images/logo-cong-ty-tltvietnam.png"></div>
            <div class="desc_ad">
                <p>Email hỗ trợ 24/7/365: <strong><a style="color:#fff;" href="mailto:tlt@tltvietnam.vn">tlt@tltvietnam.vn</a></strong></p>
                <p>Bộ phận CSKH: <strong>028.3811.9797</strong></p>
                <p>Website: <a href="http://tltvietnam.vn"><strong>http://tltvietnam.vn</strong></a></p>
                <p>Hỗ trợ khách hàng các ngày trong tuần từ Thứ&nbsp; Hai đến Chủ nhật <em>(từ 8h00 - 15h00 hằng ngày)</em></p>
            </div>
        </div>
        <div class="widget" id="forgotForm" style="display:none;">
            <div class="title"><img src="images/icons/dark/files.png" alt="" class="titleIcon" /><h6>Khôi phục mật khẩu</h6></div>
            <form action="" class="form" method="post" id="validate1">
                <fieldset>
                    <div class="formRow">
                        <label for="login">Bạn hãy nhập email vào ô bên dưới:</label>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label for="pass">Email:</label>
                        <div class="loginInput"><input type="text" id="email" class="validate[required,custom[email]]" name="email"></div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="loginControl">
                        <div class="rememberMe"><a href="#" class="back-login">Quay lại khung đăng nhập</a></div>
                        <input type="submit" value="Gửi" class="dredB sendEmail" style="float:right;" />
                        <div class="clear"></div>
                    </div>
                    <div class="ajaxloader"><img src="images/loader.gif" alt="loader" /></div>
                    <div id="echoMessage">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div id="footer">
        <!-- <div class="wrapper" style="background-color: #32c786; color: #fff">
            Powered by <a href="http://tltvietnam.vn" title="TLT Việt Nam">TLT Việt Nam</a>
        </div> -->
    </div> 
</div>
<div id="particle-canvas"></div>