<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\TestTrait;


class TraitsController extends Controller
{
    use TestTrait;
    
    public function index()
    {   
        $name = $this->getName();
        return $name;
    }
}
