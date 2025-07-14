<?php

class SettingController
{
    public function index()
    {
        $options = Option::where('option_name', 'like', '_es_%')->get()->toArray();

        // check is form submiting or not
        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === "POST") {
            return $this->create($_POST);
        }

        // return view
        $es_options = [];

        foreach ($options as $opt) {
            $es_options[$opt['option_name']] = $opt['option_value'];
        }
        include es_view_path('setting/index.php');
    }

    public function create($datas)
    {
        $options = Option::where('option_name', 'like', '_es_%')->get()->toArray();

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

        $es_options = [];

        foreach ($options as $opt) {
            $es_options[$opt['option_name']] = $opt['option_value'];
        }
        include es_view_path('setting/index.php');
    }
}