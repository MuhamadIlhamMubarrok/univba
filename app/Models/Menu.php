<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
     protected $table = "menu";
     protected $primaryKey = 'menu_id';
     protected $fillable = ['submenu_id', 'menu', 'url', 'urutan'];
    
     /**
     * Get the submenus for the menu.
     */
    public function submenus()
    {
        return $this->hasMany(Menu::class, 'submenu_id', 'menu_id');
    }

    /**
     * Get the parent menu if applicable.
     */
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'submenu_id', 'menu_id');
    }
}

 