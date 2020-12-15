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
    <div class="form-group">
        <input type="submit" name="create" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=member&action=index" class="btn btn-default">Quay lại</a>
    </div>
</form>