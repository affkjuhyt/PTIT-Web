<?php
require_once "controllers/Controller.php";
require_once "models/Member.php";
require_once "models/Pagination.php";

class MemberController extends Controller {
    public function index(){
        $member_model = new Member();
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $total = $member_model->getTotal();
        $query_additional = '';
        if(isset($_GET['username'])) {
            $query_additional .= "&username=" . $_GET['username'];
        }
        $params = [
            'total' => $total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'member',
            'action' => 'index',
            'page' => $page,
            'query_additional' => $query_additional
        ];
        $pagination = new Pagination($params);
        $pages = $pagination->getPagination();
        $members = $member_model->getAllPagination($params);

        $this->content = $this->view('views/members/index.php', [
            'pages' => $pages,
            'members' => $members
        ]);

        require_once 'views/layouts/main.php';
    }

    public function create(){
        if(isset($_SESSION['manager']) && $_SESSION['manager']['level'] == 1){
            $_SESSION['error'] = 'Member không có quyền thêm manager';
            header("Location: index.php?controller=manager");
            exit();
        }
        if(isset($_POST['create'])){
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $member_model = new Member();
            $member = $member_model->getManagerByUsername($username);

            if(empty($username) || empty($fullname)){
                $this->error = 'Các trường bắt buộc phải nhập';
            } else if(!empty($member)){
                $this->error = 'Username đã tồn tại';
            }

            if(empty($this->error)){
                $member_model->username = $username;
                $member_model->password = password_hash(1, PASSWORD_DEFAULT);
                $member_model->fullname = $fullname;
                $is_create = $member_model->create();

                if($is_create){
                    $_SESSION['success'] = "Thêm member thành công";
                    header("Location: index.php?controller=member");
                    exit();
                } else {
                    $_SESSION['error'] = "Thêm member thất bại";
                }
            }
        }

        $this->content = $this->view('views/members/create.php');
        require_once 'views/layouts/main.php';
    }

    public function update() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=member");
            exit();
        }

        $id = $_GET['id'];
        $member_model = new Member();
        $member = $member_model->getById($id);

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $check_manager_exist = $member_model->getManagerByUsername($username);

            if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->error = 'Email không đúng định dạng';
            } else if (empty($password)) {
                $this->error = 'Password bắt buộc phải nhập';
            } else if(!empty($check_manager_exist) && $username != $member['username']){
                $this->error = 'Username đã tồn tại';
            } else if(!empty($phone) && !is_numeric($phone)){
                $this->error = 'Số điện thoại phải ở dạng số';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $allow_extensions = ['png', 'jpg', 'jpeg', 'gif', 'webp'];
                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);
                if (!in_array($extension, $allow_extensions)) {
                    $this->error = 'Phải upload avatar dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được lớn hơn 2Mb';
                }
            }

            if (empty($this->error)) {
                $filename = $manager['avatar'];
                //xử lý upload ảnh nếu có
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = __DIR__ . '/../assets/uploads';
                    //xóa file ảnh đã update trc đó
                    @unlink($dir_uploads . '/' . $filename);
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }

                    $filename = time() . '-manager-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                //lưu password dưới dạng mã hóa, hiện tại sử dụng cơ chế bcrypt
                $member_model->username = $username;
                $member_model->password = password_hash($password, PASSWORD_DEFAULT);
                $member_model->fullname = $fullname;
                $member_model->phone_number = $phone;
                $member_model->address = $address;
                $member_model->email = $email;
                $member_model->avatar = $filename;
                $is_update = $member_model->update($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update dữ liệu thành công';
                    header("Location: index.php?controller=member");
                    exit();
                } else {
                    $_SESSION['error'] = 'Update dữ liệu thất bại';
                }
            }
        }

        $this->content = $this->view('views/members/update.php', [
            'member' => $member
        ]);

        require_once 'views/layouts/main.php';
    }

    public function delete() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=member');
            exit();
        }

        $id = $_GET['id'];
        if($id == $_SESSION['member']['id']){
            $_SESSION['error'] = 'Bạn không thể xóa chính bạn';
            header("Location: index.php?controller=member");
            exit();
        } else {
            $member_model = new Member();
            $is_delete = $member_model->delete($id);
            if ($is_delete) {
                $_SESSION['success'] = 'Xóa dữ liệu thành công';
                header('Location: index.php?controller=member');
                exit();
            } else {
                $_SESSION['error'] = 'Xóa dữ liệu thất bại';
            }
        }
    }

    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=member");
            exit();
        }
        $id = $_GET['id'];
        $member_model = new Member();
        $member = $member_model->getById($id);

        $this->content = $this->view('views/members/detail.php', [
            'member' => $member
        ]);

        require_once 'views/layouts/main.php';
    }

    public function logout() {
        $_SESSION = [];
        session_destroy();
        $_SESSION['success'] = 'Logout thành công';
        header('Location: index.php?controller=login&action=login');
        exit();
    }
}