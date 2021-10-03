<?php

use Carbon\Carbon;
use Laravolt\Avatar\Avatar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


/**
 * Cambiar Formato Fechas
 *
 * @param mixed $date
 * @param mixed $date_format
 * @return string
 */
if (!function_exists('changeDateFormate')) {
    function changeDateFormate($date, $date_format)
    {
        return Carbon::parse($date)->format($date_format);
    }
}
/**
 * Obtener Primer Dia Mes
 *
 * @param string $format
 * @return string
 */

if (!function_exists('starMonth')) {
    function starMonth($format = 'Y-m-d')
    {
        $s = Carbon::now()->startOfMonth();

        return $s->format($format);
    }
}

/**
 * Obtener Fecha Formteada
 *
 * @param string $format
 * @return string
 */

if (!function_exists('fechaFormat')) {
    function fechaFormat($date)
    {

        return Carbon::parse($date)->formatLocalized('%d de %B %Y ');
    }
}
if (!function_exists('ramdomBadge')) {
    function ramdomBadge()
    {
        $badges = collect(['outline-badge-danger', 'outline-badge-success', 'outline-badge-primary', 'outline-badge-warning', 'outline-badge-info']);
        return $badges->random();
    }
}
if (!function_exists('fechaDiaMes')) {
    function fechaDiaMes($date)
    {

        return Carbon::parse($date)->formatLocalized('%d, %B %Y ');
    }
}
if (!function_exists('active')) {
    function active($url)
    {
        return  Request::is($url) ? ' active' : '';
    }
}
if (!function_exists('submenu')) {
    function submenu($rutas)
    {
        foreach ($rutas as $key => $ruta) {
            if ($ruta->url == Request::is($ruta->url)) {
                return ' recent-submenu mini-recent-submenu show';
            }
        }
    }
}
if (!function_exists('getRole')) {
    function getRole()
    {
        return  auth()->user()->roles[0]->description;
    }
}
if (!function_exists('activeAll')) {
    function activeAll($rutas)
    {
        foreach ($rutas as $key => $ruta) {
            if ($ruta->url == Request::is($ruta->url)) {
                return ' active';
            }
        }
    }
}

if (!function_exists('showAll')) {
    function showAll($rutas)
    {
        foreach ($rutas as $key => $ruta) {
            if ($ruta->url == Request::is($ruta->url)) {
                return ' show';
            }
        }
    }
}
if (!function_exists('expanded')) {
    function expanded($rutas)
    {
        foreach ($rutas as $key => $ruta) {
            if ($ruta->url == Request::is($ruta->url)) {
                return 'true';
            } else {
                $data = 'false';
            }
        }
    }
}
if (!function_exists('simpleStatus')) {
    function simpleStatus($estado)
    {
        switch ($estado) {
            case 'activo':
                echo 'text-capitalize badge-success';
                break;
            default:
                echo "text-capitalize badge-danger";
        }
        // return $data;
    }
}
if (!function_exists('names')) {
    function names()
    {
        return   Auth::user()->names;
    }
}
if (!function_exists('lastAccess')) {
    function lastAccess()
    {
        return Carbon::parse(Auth::user()->access_at)->diffForHumans();
    }
}
