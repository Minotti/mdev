<?php
namespace App\Application\Site\Http\Controllers;


class SiteController extends BaseController {
    public function index()
    {
        return $this->view('home');
    }
}