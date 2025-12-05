<?php

// Set sidebar active

if(!function_exists('setSidebar')){
    function setSidebar(array $routes): ? string
    {
        foreach($routes as $route){
            if(request()->routeIs($route)){
                return "mm-active";
            }
        }
        return null;
    }
}