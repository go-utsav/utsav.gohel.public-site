<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Type
        $dataType = $this->dataType('slug', 'testimonials');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'testimonials',
                'display_name_singular' => 'Testimonial',
                'display_name_plural'   => 'Testimonials',
                'icon'                  => 'voyager-bubble',
                'model_name'            => 'App\\Models\\Testimonial',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'          => 0,
                'details'              => json_encode([
                    'order_column'         => 'display_order',
                    'order_display_column' => 'created_at',
                    'order_direction'      => 'desc',
                    'default_search_key'   => 'client_name',
                ]),
            ])->save();
        }

        // Add Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Testimonials',
            'url'     => '',
            'route'   => 'voyager.testimonials.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bubble',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 99,
            ])->save();
        }

        // Permissions
        Permission::generateFor('testimonials');
    }

    /**
     * [dataType description].
     *
     * @param $field
     * @param $for
     *
     * @return mixed
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
} 