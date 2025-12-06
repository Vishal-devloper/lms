<?php

use App\Models\Category;

// Category using global helper
if(!function_exists('getCategories')){
    function getCategories()
    {
        return Category::with('subcategory')->orderBy('name','asc')->get();
    }
}


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