
<?php
namespace LiuNing\FirstLaravelPackage\Middleware;

use Closure;

class ApiAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	// $status true/false ����������ʱ����� if ������������ laravel Ԥ����ִ�С�
        $status = true;
        if ($status) {
            return 'api�м����֤��ͨ��';
        }
        return $next($request);
    }
}