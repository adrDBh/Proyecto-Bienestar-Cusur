<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\Role;

class CreateRoles extends Migration
{

    public function up()
    {
        // Could also be...
        # Role::create([
        # 'foo' => 'bar'
        # ])->save();

        // Administrator
        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'Administrador';
        $admin->description = 'Usuario con el rol \'Administrativo\'';
        $admin->save();


        // Nurse
        $nurse = new Role();
        $nurse->name = 'nurse';
        $nurse->display_name = 'Enfermero/a';
        $nurse->description = 'Usuario con rol de \'Enfermero/a\' ';
        $nurse->save();

        // SLPCE
        $slpce = new Role();
        $slpce->name = 'slpce';
        $slpce->display_name = 'SLPCE';
        $slpce->description = 'Usuario con rol de \'Seguridad laboral protección civil y emergencias\'';
        $slpce->save();

        // Medic
        $medic = new Role();
        $medic->name = 'medic';
        $medic->display_name = 'Médico';
        $medic->description = 'Usuario con rol de \'Médico\'';
        $medic->save();

        // Nutriologist
        $nutrio = new Role();
        $nutrio->name = 'nutriologist';
        $nutrio->display_name = 'Nutriólogo/a';
        $nutrio->description = 'Usuario con rol de \'Nutriólogo/a\'';
        $nutrio->save();

        // Laboratorist
        $labs = new Role();
        $labs->name = 'laboratorist';
        $labs->display_name = 'Laboratorista';
        $labs->description = 'Usuario con rol de \'Laboratorista\'';
        $labs->save();

        // Registered
        $registered = new Role();
        $registered->name = 'registered';
        $registered->display_name = 'Registrado (Sin rol)';
        $registered->description = 'Usuario sin ningún rol activo';
        $registered->save();
    }


    public function down()
    {
        // I bet there is a more appropriate way to do this..
        // But this is just a temporal work-around..
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Eloquent::reguard();
    }
}
