<?php

class About {
    public function index($nama='Manusia', $pekerjaan='Rebahan') {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page() {
        echo 'About/page';
    }
}