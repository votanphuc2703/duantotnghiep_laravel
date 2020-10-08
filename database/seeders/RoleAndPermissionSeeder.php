<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'View']);
        Permission::create(['name' => 'Review Movie']);// Chua xac thuc nguoi dung
        Permission::create(['name' => 'Booking Ticket']);// Da xac thuc nguoi dung
        Permission::create(['name' => 'Add Normal']); //Them co ban
        Permission::create(['name' => 'Edit Normal']); //Sua co ban
        Permission::create(['name' => 'Delete Normal']); //Xoa co ban
        Permission::create(['name' => 'Post']); //Them,sua xoa bai viet cua 1 admin
        Permission::create(['name' => 'HRM']); //Quan ly nhan su
        Permission::create(['name' => 'Control']); //Kiem soat chinh
        $role=Role::create(['name'=>'Customer No Account']);
        $role->givePermissionTo('View');
        $role=Role::create(['name'=>'Customer Has Not Verified Email']);
        $role->givePermissionTo(['View','Review Movie']);
        $role=Role::create(['name'=>'Customer Has Verified Email']);
        $role->givePermissionTo(['View','Review Movie','Booking Ticket']);
        $role=Role::create(['name'=>'Admin Level 1']);
        $role->givePermissionTo(['View','Review Movie','Booking Ticket','Add Normal','Edit Normal','Delete Normal']);
        $role=Role::create(['name'=>'Admin Level 2']);
        $role->givePermissionTo(['View','Review Movie','Booking Ticket','Add Normal','Edit Normal','Delete Normal','Post']);
        $role=Role::create(['name'=>'HRM']);
        $role->givePermissionTo(['View','Review Movie','Booking Ticket','HRM']);
        $role=Role::create(['name'=>'Super Admin']);
        $role->givePermissionTo(Permission::all());
        
    }
}
