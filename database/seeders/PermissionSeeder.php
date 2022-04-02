<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (\Illuminate\Support\Facades\Schema::hasTable('permissions')) {

//           all permissions
            $parent = Permission::firstOrCreate([
                'name' => 'Ҳаммаси',
                'slug' => 'root',
            ]);

            Permission::firstOrCreate([
                'name' => 'Ҳамма имкониятларни ёқиш',
                'slug' => '*',
                'parent_id' => $parent->id
            ]);
//          end all permissions


//            Users permissions

            $parent = Permission::firstOrCreate([
                'name' => 'Фойдаланувчи',
                'slug' => 'users',
            ]);
            Permission::firstOrCreate([
                'name' => 'Фойдаланувчи жадвали',
                'slug' => 'users.index',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name' => 'Фойдаланувчи яратиш',
                'slug' => 'users.create',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name' => 'Фойдаланувчини ўзгартириш',
                'slug' => 'users.update',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name' => 'Фойдаланувчини кўриш',
                'slug' => 'users.show',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name' => 'Фойдаланувчини ўчириш',
                'slug' => 'users.delete',
                'parent_id' => $parent->id
            ]);
//            end Users permissions
//          Role permissions
            $parent = Permission::firstOrCreate([
                'name'  => 'Роллар',
                'slug'  => 'roles',
            ]);
            Permission::firstOrCreate([
                'name'  => 'Роллар жадвали',
                'slug'  => 'roles.index',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name'  => 'Рол яратиш',
                'slug'  => 'roles.create',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name'  => 'Ролни ўзгартириш',
                'slug'  => 'roles.update',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name'  => 'Ролни кўриш',
                'slug'  => 'roles.show',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name'  => 'Ролни ўчириш',
                'slug'  => 'roles.delete',
                'parent_id' => $parent->id
            ]);
//        end Role permissions

//        News permissions
            $parent = Permission::firstOrCreate([
                'name'  => 'Янгиликлар',
                'slug'  => 'news',
            ]);
            Permission::firstOrCreate([
                'name'  => 'Янгиликлар жадвали',
                'slug'  => 'news.index',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name'  => 'Янгилик яратиш',
                'slug'  => 'news.create',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name'  => 'Янгиликни ўзгартириш',
                'slug'  => 'news.update',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name'  => 'Янгиликни кўриш',
                'slug'  => 'news.show',
                'parent_id' => $parent->id
            ]);
            Permission::firstOrCreate([
                'name'  => 'Янгиликни ўчириш',
                'slug'  => 'news.delete',
                'parent_id' => $parent->id
            ]);
//        end News permissions
        }
    }
}
