<?php

namespace App\Http\Middleware;

use App\Models\MobileMenuItem;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MobileMenuItems
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $menuItems = MobileMenuItem::query()
            ->where('publish', 1)
            ->orderBy('order')
            ->get();

        $mainMenu = $menuItems
            ->where('parent_id', -1)
            ->values()
            ->map(function ($parent) use ($menuItems) {
                $parent->children = $menuItems
                    ->where('parent_id', $parent->id)
                    ->sortBy('order')
                    ->values();
                return $parent;
            });

        $request->MobileMenuItem = $mainMenu;
        view()->share('MobileMenuItem', $mainMenu);
        return $next($request);
    }
}
