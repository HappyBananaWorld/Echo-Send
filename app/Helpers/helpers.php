<?php

function es_plugin_asset($path): string
{
    return "";
    // return ESPLUGIN_ASSETS . $path;
}

function es_app_path($path): void
{
    include ES_PLUGIN_APP_PATH . $path;
}

