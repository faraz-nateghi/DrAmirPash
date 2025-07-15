<?php

namespace App\Http\Middleware;

use App\Models\MenuItem;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MainMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $menuItems = MenuItem::query()->where('publish', 1)->get();

        $mainMenu = collect();

        foreach ($menuItems as $menuItem) {
            if ($menuItem->parent_id == -1) {
                $menuItem->children = $menuItems->where('parent_id', $menuItem->id);
                $mainMenu->push($menuItem);
            }
        }

        $request->mainMenu = $mainMenu;

        return $next($request);
    }
}
