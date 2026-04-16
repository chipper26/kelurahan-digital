<?php

class AdminController {

    public function index() {
        $data['title'] = "Dashboard Admin";

        require_once "../app/views/admin/dashboard.php";
    }

}