<?php
/**
 * Created by PhpStorm.
 * User: kalebclark
 * Date: 9/1/15
 * Time: 6:00 AM
 */

namespace KalebClark\RestLogger;

use Closure;
use \App;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use KalebClark\RestLogger\RestLoggerModel;

class RestLogger {

    public function handle($request, Closure $next)
    {
        $log = new RestLoggerModel();


        $log->ip_address = $request->ip();
        $log->method     = $request->method();
        $log->root       = $request->root();
        $log->url        = $request->url();
        $log->full_url   = $request->fullUrl();
        $log->path       = $request->path();
        $log->is_ajax    = $request->ajax();
        $log->is_secure  = $request->secure();
        //$log->has_file   = $request->hasFile();
        //$log->has_cookie = $request->hasCookie();
        $log->has_json    = $request->isJson();

        $log->save();

        return $next($request);
    }

}