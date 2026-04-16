<?php

class PublicController {

    public function index() {
        $data['title'] = "Landing Page Kelurahan";

        require_once "../app/views/public/home.php";
    }

}