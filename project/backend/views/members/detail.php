<?php
require_once 'helpers/Helper.php';
?>
<h2>Chi tiết khách hàng</h2>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $member['id'] ?></td>
    </tr>
    <tr>
        <th>Tên tài khoản</th>
        <td><?php echo $member['username'] ?></td>
    </tr>
    <tr>
        <th>Tên đầy đủ</th>
        <td><?php echo $member['fullname'] ?></td>
    </tr>
    <tr>
        <th>SĐT</th>
        <td><?php echo $member['phone_number'] ?></td>
    </tr>
    <tr>
        <th>Địa chỉ</th>
        <td><?php echo $member['address'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $member['email'] ?></td>
    </tr>
    <tr>
        <th>Ảnh đại diện</th>
        <td>
            <?php if (!empty($member['avatar'])): ?>
                <img height="80" src="assets/uploads/<?php echo $manager['avatar'] ?>"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Tạo lúc</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($member['created_at'])) ?></td>
    </tr>
    <tr>
        <th>Cập nhật lúc</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($member['updated_at'])) ?></td>
    </tr>
</table>

<?php
$disabled = '';
if(isset($_SESSION['member'])){
    if($_SESSION['member']['username'] != $member['username']) {
        $disabled = 'disabled="true"';
    }
}
?>
<a href="index.php?controller=member&action=update&id=<?= $member['id']?>" class="btn btn-info" <?= $disabled?>>Cập nhật</a>
<a href="index.php?controller=member&action=index" class="btn btn-default">Quay lại</a>