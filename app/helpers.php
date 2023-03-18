<?php

use Illuminate\Support\Str;

define('DV', 'Y-m-d');
define('TV', 'H:i');
define('DF', 'd/m/Y');
define('TF', 'g:i A');

if (!function_exists('str')) {
    function str($value) {
        return Str::of($value);
    }
}

if (!function_exists('days')) {
    function days() {
        return collect([
            'Lunes',
            'Martes',
            'Miércoles',
            'Jueves',
            'Viernes',
            'Sábado',
            'Domingo',
        ]);
    }
}

if (!function_exists('genders')) {
    function genders() {
        return collect(['Masculino', 'Femenino']);
    }
}

if (!function_exists('grades')) {
    function grades() {
        return collect(['Primaria', 'Bachillerato', 'TSU', 'Superior']);
    }
}

if (!function_exists('ciTypes')) {
    function ciTypes() {
        return collect(['V', 'E']);
    }
}

if (!function_exists('operationTypes')) {
    function operationTypes() {
        return collect(['Ingreso', 'Desincorporación']);
    }
}

if (!function_exists('payStatuses')) {
    function payStatuses() {
        return collect(['Pendiente', 'Confirmado', 'Rechazado']);
    }
}

if (!function_exists('clubStatuses')) {
    function clubStatuses() {
        return collect(['Activo', 'Inactivo']);
    }
}

if (!function_exists('payTypes')) {
    function payTypes() {
        return collect([
            'Pago Móvil',
            'Transferencia',
            'Efectivo ($)',
            'Efectivo (Bs.D.)',
        ]);
    }
}

if (!function_exists('payCategories')) {
    function payCategories() {
        return collect([
            'Pago completo',
            'Reservación',
            'Cuota restante',
        ]);
    }
}

if (!function_exists('modes')) {
    function modes() {
        return collect([
            'Un solo pago',
            'Reservación',
        ]);
    }
}

if (!function_exists('accountTypes')) {
    function accountTypes() {
        return collect([
            'Corriente',
            'Ahorro',
        ]);
    }
}

if (!function_exists('roles')) {
    function roles($withAdmin = false) {
        $roles = collect([
            'Administrador',
            'Instructor',
            'Estudiante',
        ]);

        if ($withAdmin) {
            return $roles;
        }

        return $roles->skip(1);
    }
}

if (!function_exists('phases')) {
    function phases() {
        return collect([
            'Inscripciones',
            'En curso',
            'Finalizado',
        ]);
    }
}

if (!function_exists('spanishDate')) {
    function spanishDate($date) {
        $months = [
            '01' => 'enero', '02' => 'febrero',
            '03' => 'marzo', '04' => 'abril',
            '05' => 'mayo', '06' => 'junio',
            '07' => 'julio', '08' => 'agosto',
            '09' => 'septiembre', '10' => 'octubre',
            '11' => 'noviembre', '12' => 'diciembre'
        ];

        $day = $date->format('d');
        $month = $months[$date->format('m')];
        $year = $date->format('Y');

        return "{$day} de {$month} del {$year}";
    }
}

if (!function_exists('base64')) {
    function base64($path) {
        return base64_encode(file_get_contents(public_path($path)));
    }
}

if (!function_exists('randomNumericString')) {
    function randomNumericString($length) {
        return (string) rand((int) pow(10, $length - 1), (int) pow(10, $length)-1);
    }
}

if (!function_exists('strToBool')) {
    function strToBool($string) {
        if ($string === 'true') return true;
        if ($string === 'false') return false;
        return $string;
    }
}

if (!function_exists('backWithoutQuery')) {
    /** 
     * Create a new redirect response to the previous location without query string parameters.
     * 
     * @return \Illuminate\Http\RedirectResponse
    */
    function backWithoutQuery($status = 302, $headers = []) {
        $back = explode('?', url()->previous())[0];
        return redirect($back, $status, $headers);
    }
}