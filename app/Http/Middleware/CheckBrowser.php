<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Log;

class CheckBrowser {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        $agent = new Agent();
        $browser = $agent->browser();
        //dd($browser);
        if (strcasecmp($browser, "IE") == 0) {
            $version = $agent->version($browser);
            if ($version < 11) {
                Log::info("Navegador no soportado: " . $browser . "-" . $version);
                return redirect('https://browsehappy.com/');
            }
        }
        return $next($request);
    }

}
