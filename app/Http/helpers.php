<?php

function disableHrefIfActive($lang)
{
    return config()->get('app.locale') == $lang ? 'javascript:void(0)' : route('change-lang', $lang);
}

function giveActiveClass($lang)
{
    return config()->get('app.locale') == $lang ? 'active' : '';
}