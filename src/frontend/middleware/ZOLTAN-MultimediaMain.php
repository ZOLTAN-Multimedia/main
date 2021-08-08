<?php
namespace ZOLTAN-Multimedia\Main\Frontend\Middleware;
use Closure;use Session;use URL;class ZOLTAN-MultimediaMain
{
	public function handle($request, Closure $next){
		return $next($request);
	}
}
