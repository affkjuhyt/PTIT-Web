<h2>Cập nhật quản lí</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username">Tài khoản</label>
        <input type="text" name="username" id="username"
               value="<?php echo isset($_POST['username']) ? $_POST['username'] : $member['username'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu <span style="color: red;">*</span></label>
        <input type="password" placeholder="Vui lòng nhập lại password cũ hoặc password bạn mong muốn" name="password" id="password"
               value=""
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="fullname">Tên đầy đủ</label>
        <input type="text" name="fullname" id="fullname"
               value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : $member['fullname'] ?>"
               class="form-control"/>
    </div>

    <div class="form-group">
        <label for="phone">SĐT</label>
        <input type="text" name="phone" id="phone"
               value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : $member['phone_number'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email"
               value="<?php echo isset($_POST['email']) ? $_POST['email'] : $member['email'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" name="address" id="address"
               value="<?php echo isset($_POST['address']) ? $_POST['address'] : $member['address'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="avatar">Avatar</label>
        <input type="file" name="avatar" id="avatar" class="form-control"/>
        <?php if (!empty($member['avatar'])): ?>
            <img height="80" src="assets/uploads/<?php echo $manager['avatar'] ?>"/>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=member&action=index" class="btn btn-default">Quay lại</a>
    </div>
</form>