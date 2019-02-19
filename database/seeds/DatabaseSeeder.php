<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use App\User;

class DatabaseSeeder extends Seeder
{

    private $arrayClientes = array(
        array(
            'nombre' => 'Neo',
            'imagen' => 'Imagen personalizada de la felicitación',
            'fecha_nacimiento' => '1972-01-06', 
            'correo' => 'neo@matrix.org'
        ),        
        array(
            'nombre' => 'Morfeo',
            'imagen' => 'Imagen personalizada de la felicitación',
            'fecha_nacimiento' => '1997-03-05', 
            'correo' => 'morfeo@matrix.org'
        )
    );

    private $arrayUsers = array(
        array(
            'name' => 'Neo',
            'password' => '1234',
            'email' => 'neo@matrix.org',
            'email_verified_at' => null
        ),        
        array(
            'name' => 'Morfeo',
            'password' => '5678', 
            'email' => 'morfeo@matrix.org',
            'email_verified_at' => null
        )
    );

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedCatalog();
        $this->command->info('Tabla clientes inicializada con datos!');

        self::seedUsers();
        $this->command->info('Tabla users inicializada con datos!');
    }

    public function seedCatalog(){
        DB::table('clientes')->delete();

        foreach( $this->arrayClientes as $cliente ) {
            $c = new Cliente;
            $c->nombre = $cliente['nombre'];
            $c->imagen = $cliente['imagen'];
            $c->fecha_de_nacimiento = $cliente['fecha_nacimiento'];
            $c->correo = $cliente['correo'];
            $c->save();
          }
    }

    public function seedUsers(){
        DB::table('users')->delete();
        
        foreach( $this->arrayUsers as $user ) {
            $c = new User;
            $c->name = $user['name'];
            $c->password = bcrypt($user['password']);
            $c->email = $user['email'];
            $c->save();
          }
    }

}
