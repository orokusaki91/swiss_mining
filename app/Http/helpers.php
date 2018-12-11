<?php

function disableHrefIfActive($lang)
{
    return config()->get('app.locale') == $lang ? 'javascript:void(0)' : route('change-lang', $lang);
}

function giveActiveClass($lang)
{
    return config()->get('app.locale') == $lang ? 'active' : '';
}

function uploadPublicImage($image, $name, string $path)
{
    $name = time() . $name . '.' . $image->getClientOriginalExtension();
    $folder = $path;
    $saveFolder = public_path($folder);
    $image->move($saveFolder, $name);
    $dbPath = $folder . $name;
    return $dbPath;
}