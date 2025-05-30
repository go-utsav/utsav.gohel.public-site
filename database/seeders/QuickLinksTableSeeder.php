<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class QuickLinksTableSeeder extends Seeder
{
    public function run()
    {
        // Data Type
        $dataType = $this->dataType('slug', 'quick_links');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'quick_links',
                'display_name_singular' => 'Quick Link',
                'display_name_plural'   => 'Quick Links',
                'icon'                  => 'voyager-link',
                'model_name'            => 'App\\Models\\QuickLink',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'          => 0,
                'details'              => json_encode([
                    'order_column'         => 'display_order',
                    'order_display_column' => 'created_at',
                    'order_direction'      => 'asc',
                    'default_search_key'   => 'name',
                    'scope'                => null,
                ]),
            ])->save();
        }

        // Add Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Quick Links',
            'url'     => '',
            'route'   => 'voyager.quick_links.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-link',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 98,
            ])->save();
        }

        // Generate Permissions
        Permission::generateFor('quick_links');

        // Get admin role and all quick_links permissions
        $role = Role::where('name', 'admin')->firstOrFail();
        $permissions = Permission::where('table_name', 'quick_links')->get();

        // Assign all quick_links permissions to admin role
        foreach ($permissions as $permission) {
            $role->permissions()->syncWithoutDetaching([$permission->id]);
        }
    }

    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
} 