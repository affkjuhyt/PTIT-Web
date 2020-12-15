<p class="login-box-msg">Đăng kí tài khoản</p>
<form id="form-register" method="post" action="">
    <div class="form-group">
        <label for="username">Tài khoản <span>*</span></label>
        <input type="text" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : ''?>" id="username" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu <span>*</span></label>
        <input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : ''?>" id="password" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="password-confirm">Nhập lại mật khẩu <span>*</span></label>
        <input type="password" name="password_confirm" value="" id="password-confirm" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="fullname">Tên đầy đủ <span>*</span></label>
        <input type="text" name="fullname" value="<?= isset($_POST['fullname']) ? $_POST['fullname'] : ''?>" id="fullname" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="phone">SĐT</label>
        <input type="text" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : ''?>" id="phone-number" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" name="address" value="<?= isset($_POST['address']) ? $_POST['address'] : ''?>" id="address" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''?>" id="email" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="jobs">Công việc</label>
        <input type="text" name="jobs" value="<?= isset($_POST['jobs']) ? $_POST['jobs'] : ''?>" id="jobs" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Đăng ký" class="btn btn-primary"/>
        <p style="margin-top: 10px">
            Đã có tài khoản, <a href="index.php?controller=login&action=login">Đăng nhập</a> ngay
        </p>
    </div>
</form>