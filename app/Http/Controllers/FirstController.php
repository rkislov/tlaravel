<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 15.10.2017
 * Time: 23:35
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{
        public function show($id)
        {
            //echo __METHOD__;
            echo $id;
        }
}