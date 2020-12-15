<h2>Thêm mới tài khoản</h2>
<form id="form-create-user" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username">Tên tài khoản <span style="color: red;">*</span></label>
        <input type="text" name="username" id="username"
               value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="fullname">Tên đầy đủ <span style="color: red;">*</span></label>
        <input type="text" name="fullname" id="fullname"
               value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '' ?>"
               class="form-control"/>
    </div>
    <?php
    $disabled_admin = '';
    if(isset($_SESSION['manager'])){
        if($_SESSION['manager']['level'] == 2){
            $disabled_admin = 'disabled="true"';
        }
    }
    ?>
    <div class="form-group">
        <label for="level">Phân quyền quản lí <span style="color: red;">*</span></label>
        <select name="level" id="level">
            <option value="0">--Cấp bậc--</option>
            <option value="1">Thành viên</option>
            <option value="2" <?= $disabled_admin?>>Admin</option>
            <option value="3" <?= $disabled_admin?>>Super Admin</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="create" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=manager&action=index" class="btn btn-default">Quay lại</a>
    </div>
</form>