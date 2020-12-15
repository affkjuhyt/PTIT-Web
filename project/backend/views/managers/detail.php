<?php
require_once 'helpers/Helper.php';
?>
<h2>Chi tiết quản lí</h2>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $manager['id'] ?></td>
    </tr>
    <tr>
        <th>Tên tài khoản</th>
        <td><?php echo $manager['username'] ?></td>
    </tr>
    <tr>
        <th>Tên đầy đủ</th>
        <td><?php echo $manager['fullname'] ?></td>
    </tr>
    <?php
    $manager_level = $manager['level'];
    $manager_level_label = '';
    switch ($manager_level){
        case 1:
            $manager_level_label = 'Member';
            break;
        case 2:
            $manager_level_label = 'Admin';
            break;
        case 3:
            $manager_level_label = 'Super Admin';
            break;
        default:
            $manager_level_label = '';
            break;
    }
    ?>
    <tr>
        <th>Cấp bậc</th>
        <td><?php echo $manager_level_label ?></td>
    </tr>
    <tr>
        <th>SĐT</th>
        <td><?php echo $manager['phone_number'] ?></td>
    </tr>
    <tr>
        <th>Địa chỉ</th>
        <td><?php echo $manager['address'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $manager['email'] ?></td>
    </tr>
    <tr>
        <th>Ảnh đại diện</th>
        <td>
            <?php if (!empty($manager['avatar'])): ?>
                <img height="80" src="assets/uploads/<?php echo $manager['avatar'] ?>"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Công việc</th>
        <td><?php echo $manager['jobs'] ?></td>
    </tr>
    <tr>
        <th>Tạo lúc</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($manager['created_at'])) ?></td>
    </tr>
    <tr>
        <th>Cập nhật lúc</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($manager['updated_at'])) ?></td>
    </tr>
</table>
<?php
$disabled = '';
if(isset($_SESSION['manager'])){
    if($_SESSION['manager']['username'] != $manager['username']) {
        if ($_SESSION['manager']['level'] <= $manager['level']) {
            $disabled = 'disabled="true"';
        }
    }
}
?>
<a href="index.php?controller=manager&action=update&id=<?= $manager['id']?>" class="btn btn-info" <?= $disabled?>>Cập nhật</a>
<a href="index.php?controller=manager&action=index" class="btn btn-default">Quay lại</a>