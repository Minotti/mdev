<?php

namespace App\Application\Site\Http\Controllers;

use App\Core\Http\Controllers\Controller;

class BaseController extends Controller {
    protected $viewNamespace = 'site::';
}