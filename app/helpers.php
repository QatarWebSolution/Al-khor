<?php
function flash($text='A test Notification',$type='info')
{
    session()->flash('text',$text);
    session()->flash('type',$type);

}

/*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
|
| Compare given route with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
function isActiveRoute($route, $output = 'opened')
{
    if (Route::currentRouteName() == $route)
    {
        return $output;
    }
}

function isActiveRouteSite($route, $output = 'uk-active')
{
    if (Route::currentRouteName() == $route)
    {
        return $output;
    }
}
/*
|--------------------------------------------------------------------------
| Detect Active Routes
|--------------------------------------------------------------------------
|
| Compare given routes with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
function areActiveRoutes(Array $routes,$output = 'active opened')
{
    foreach ($routes as $route)
    {
        if (Route::currentRouteName() == $route)
        {
            return $output;
        }
    }
}

function areActiveRoutesSite(Array $routes,$output = 'uk-active uk-parent')
{
    foreach ($routes as $route)
    {
        if (Route::currentRouteName() == $route)
        {
            return $output;
        }
    }
}