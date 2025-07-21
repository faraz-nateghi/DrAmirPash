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
        $menuItems = MenuItem::query()
            ->where('publish', 1)
            ->orderBy('order')
            ->get();
        $mainMenu = $this->buildMenuTree($menuItems, -1);

        $request->mainMenu = $mainMenu;

        return $next($request);
    }

    private function buildMenuTree($items, $parentId)
    {
        $children = $items->filter(fn ($item) => $item->parent_id == $parentId)
            ->sortBy('order')
            ->values();

        foreach ($children as $child) {
            $child->children = $this->buildMenuTree($items, $child->id);
        }

        return $children;
    }

}
