<?php

namespace App\Lib;

use Illuminate\Support\Facades\Auth;
use Modules\Aplikasi\Models\Tmmodul;
use Illuminate\Support\Facades\DB;

class ModulApp
{

    public $level;
    public $route;


    public static function menu_app($level)
    {
        $query = \DB::table('tmmodul')->select(
            'id',
            'id_parent',
            'nama_menu',
            'icon',
            'link',
            'aktif',
            'urutan',
            'position',
            'level',
            'users_id',
            'created_at',
            'updated_at'
        )
            //->where('level', '$level')
            ->get();
        $menu = array('items' => array(), 'parents' => array());
        foreach ($query as $menus) {
            $menu['items'][$menus->id] = $menus;
            $menu['position'][$menus->position] = $menus->position;
            $menu['parents'][$menus->id_parent][] = $menus->id;
        }
        if ($menu) {
            $result = self::buitlmenu(0, $menu);
            return $result;
        } else {
            return FALSE;
        }
    }

    public static function buitlmenu($parent, $menu)
    {
        $html = "";
        if (isset($menu['parents'][$parent])) {
            if ($parent == '0') {
                if (isset($menu['position']['Bottom']) == "Bottom") {
                    $html .= "<li><a class='nav-link' href='" . Url('/') . "'><i class='fa fa-dashboard'></i><span> Home</span></li>";
                } else {
                    null;
                }
            } else {
                $html .= '<ul class="dropdown-menu">';
            }
            foreach ($menu['parents'][$parent] as $itemId) {
                $icon = ($menu['items'][$itemId]->icon) ? '<i class="' . $menu['items'][$itemId]->icon . '"></i>' : '<i class="fa fa-list"></i>';

                if (!isset($menu['parents'][$itemId])) {
                    if (preg_match("/^http/", strtolower($menu['items'][$itemId]->link))) {
                        $html .= "<li><a class='nav-link ' href='" . strtolower($menu['items'][$itemId]->link) . "'><i class='fa fa-files-o'></i>" . $menu['items'][$itemId]->nama_menu . "</a></li>";
                    } else {
                        if ($menu['items'][$itemId]->id_parent == 0) :
                            $html .= "<li><a class='nav-link' href='" . Url('/') . '' . strtolower($menu['items'][$itemId]->link) . "'>" . $icon . "<span>" . $menu['items'][$itemId]->nama_menu . "</span></a></li>";
                        else :
                            $html .= "<li><a class='nav-link' href='" . Url('/') . '' . strtolower($menu['items'][$itemId]->link) . "' ><i class='fa fa-files-o'></i><span>" . $menu['items'][$itemId]->nama_menu . "</span></a></li>";
                        endif;
                    }
                }
                if (isset($menu['parents'][$itemId])) {
                    if (preg_match("/^http/", strtolower($menu['items'][$itemId]->link))) {
                        $html .= "<li class='nav-item dropdown'><a class='nav-link' href='" . strtolower($menu['items'][$itemId]->link) . "'>" . $icon . "<span>" . $menu['items'][$itemId]->nama_menu . "</span><i class='fa fa-angle-left pull-right'></i></a>";
                    } else {
                        $html .= "<li class='nav-item dropdown'><a class='nav-link' href='" . strtolower($menu['items'][$itemId]->link) . "'>" . $icon . "<span>" . $menu['items'][$itemId]->nama_menu . "</span><i class='fa fa-angle-left pull-right'></i></a>";
                    }
                    $html .= self::buitlmenu($itemId, $menu);
                    $html .= "</li>";
                }
            }
            $html .= "</ul>";
        }
        return $html;
    }
}
