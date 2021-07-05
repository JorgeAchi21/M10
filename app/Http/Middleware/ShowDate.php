<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShowDate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo "Php -> Fecha: " . date("d") . " del " . date("m") . " de " . date("Y") . " - Php -> Hora: " . date("H:i:s");;
        //echo "<br>"; 
        echo " // Laravel helper -> Fecha: " . today() . " - Laravel helper-> Hora: " . now();
        echo "<br>";
        //echo '<h5>' . date("d/m/y") . '</h5>';  Carboon
        return $next($request);
    }
}
