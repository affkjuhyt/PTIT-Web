<?php
require_once "controllers/Controller.php";
require_once "models/Member.php";
require_once "models/Order.php";

class StaticController extends Controller {
    public function index(){

        $member_model = new Member();
        $order_model = new Order();

        $json_order = $order_model->getCustomer();
        $percent = $member_model->getPercentNewUser();
        json_encode($json_order);

        $this->content = $this->view('views/statics/index.php', [
            // 'pages' => $pages,
            // 'members' => $members
            'json_order' => json_encode($json_order),
            'percent' => $percent
        ]);

        require_once 'views/layouts/main.php';
    }
}