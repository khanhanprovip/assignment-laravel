<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {
        $age = session('age');

        // Không có tuổi hoặc không phải số
        if (!is_numeric($age)) {
            return response('Không được phép truy cập');
        }

        // Nhỏ hơn 18
        if ($age < 18) {
            return response('Không được phép truy cập');
        }

        // >= 18 thì cho tiếp tục
        return $next($request);
    }
}
