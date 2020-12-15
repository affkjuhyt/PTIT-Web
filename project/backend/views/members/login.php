<p class="login-box-msg">Đăng nhập</p>
<form method="post" action="">
    <div class="form-group">
        <label for="username">Tài khoản</label>
        <input type="text" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : ''?>" id="username" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" value="" id="password" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary"/>
        <p style="margin-top: 10px;">
            Chưa có tài khoản, <a href="index.php?controller=login&action=register">Đăng ký</a> ngay
        </p>
    </div>
</form>