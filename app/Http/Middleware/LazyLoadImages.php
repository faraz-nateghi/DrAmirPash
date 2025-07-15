<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LazyLoadImages
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($response instanceof \Illuminate\Http\Response && str_contains($response->headers->get('Content-Type'), 'text/html')) {
            $content = $response->getContent();

            // اضافه کردن loading="lazy" به تمام <img>ها
            $content = preg_replace_callback(
                '/<img([^>]+)>/i',
                function ($matches) {
                    $imgTag = $matches[0];

                    if (stripos($imgTag, 'loading=') === false) {
                        return str_replace('<img', '<img loading="lazy" decoding="async"', $imgTag);
                    }

                    return $imgTag;
                },
                $content
            );

            $response->setContent($content);
        }

        return $response;
    }
}
