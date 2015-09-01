<?php

namespace KalebClark\RestLogger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use KalebClark\RestLogger\RestLoggerModel;

class RestLoggerController extends Controller {


    public function __construct()
    {
        // Instantiate
    }

    public function index()
    {
        return "Hi";
    }
}
