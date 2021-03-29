<?php
declare (strict_types = 1);

namespace app\middleware\home;

class Auth
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        //
        if (empty(session(config("admin.session_admin"))) && !preg_match("/login/", $request->pathinfo())) {
            return redirect(url((string)"/web/login"));
        }

        $response = $next($request);

        return $next($request);

    }
    public function end(\think\Response $response){

    }
}
