<?php

class WargaController {

    public function index() {
        $data['title'] = "Halaman Warga";

        require_once "../app/views/warga/home.php";
    }

}