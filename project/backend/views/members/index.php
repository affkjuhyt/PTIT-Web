<form method="GET" action="">
    <div class="form-group">
        <label for="username">Nhập tài khoản</label>
        <input type="text" name="username" id="username"
               value="<?php echo isset($_GET['username']) ? $_GET['username'] : '' ?>" class="form-control"/>
        <input type="hidden" name="controller" value="member"/>
        <input type="hidden" name="action" value="index"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Tìm kiếm" name="search" class="btn btn-primary"/>
        <a href="index.php?controller=member" class="btn btn-default">Back</a>
    </div>
</form>

<h2>Danh sách khách hàng</h2>
<?php
$disabled_member = '';
if(isset($_SESSION['member'])){
    if($_SESSION['member']['level'] == 1){
        $disabled_member = 'disabled="true"';
    }
}
?>
<a href="index.php?controller=member&action=create" class="btn btn-success mb-3" <?= $disabled_member?>>
    <i class="fa fa-plus"></i> Thêm mới
</a>
<table class="table table-bordered user-list-table">
    <tr>
        <th>ID</th>
        <th>Tài khoản</th>
        <th>Tên đầy đủ</th>
        <th>SĐT</th>
        <th>Địa chỉ</th>
        <th>email</th>
        <th>avatar</th>
        <th>Tạo lúc</th>
        <th></th>
    </tr>
    <?php if (!empty($members)): ?>
        <?php foreach ($members as $member): ?>
            <tr>
                <td><?php echo $member['id'] ?></td>
                <td><?php echo $member['username'] ?></td>
                <td><?php echo $member['fullname'] ?></td>
                <td><?php echo $member['phone_number'] ?></td>
                <td><?php echo $member['address'] ?></td>
                <td><?php echo $member['email'] ?></td>
                <td>
                    <?php if (!empty($member['avatar'])): ?>
                        <img height="80" src="assets/uploads/<?php echo $member['avatar'] ?>"/>
                    <?php endif; ?>
                </td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($member['created_at'])) ?></td>
                <?php
                $disabled = '';
                if(isset($_SESSION['member'])){
                    if($_SESSION['member']['username'] != $member['username']) {
                        if ($_SESSION['member']['level'] <= $member['level']) {
                            $disabled = 'hidden';
                        }
                    }
                }
                ?>
                <td class="action">
                    <?php
                    $url_detail = "index.php?controller=member&action=detail&id=" . $member['id'];
                    $url_update = "index.php?controller=member&action=update&id=" . $member['id'];
                    $url_delete = "index.php?controller=member&action=delete&id=" . $member['id'];
                    ?>
                    <a title="Chi tiết" href="<?php echo $url_detail ?>"><i class="fa fa-eye"></i></a> &nbsp;&nbsp;
                    <a class="<?= $disabled?>" title="Update" href="<?php echo $url_update ?>" <?= $disabled_member?>><i class="fa fa-pencil-alt"></i></a> &nbsp;&nbsp;
                    <a class="<?= $disabled?>" title="Xóa" href="<?php echo $url_delete ?>" <?= $disabled_member?> onclick="return confirm('Bạn có chắc chắn xóa người này?')"><i
                                class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
    <?php endif; ?>
</table>
<?php echo $pages; ?>