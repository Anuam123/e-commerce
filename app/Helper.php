<?php

use App\Models\Category;

if (!function_exists('bladeStateGetNameById')) {
    function bladeStateGetNameById($id)
    {
        return Category::idByName($id);
    }
  }
?>
