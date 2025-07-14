<?php

class SettingController
{
    public function index()
    {

        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === "POST") {
            return $this->create($_POST);
        }

        include es_view_path('setting/index.php');
    }

    public function create($datas)
    {
        unset($datas['submit']); // remove this key from payload

        // save all setting
        foreach ($datas as $key => $value) {
            $key = "_es_" . $key;

            // if key exists, update them
            if (get_option($key)) {
                update_option($key, $value);
                continue;
            }

            add_option($key, $value); // add option
        }

        // return view
        include es_view_path('setting/index.php');
    }
}