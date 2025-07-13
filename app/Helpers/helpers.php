<?php

function es_plugin_asset($path): string
{
    return "";
    // return ESPLUGIN_ASSETS . $path;
}

function es_app_path($path): string
{
    return ES_PLUGIN_APP_PATH . $path;
}

function es_path($path): string
{
    return ES_PLUGIN_PATH . $path;
}

