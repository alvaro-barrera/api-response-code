<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperationResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operation_responses')->insert([
            'status' => 'success',
            'code' => 200,
            'message' => 'Solicitud exitosa',
            'description' => 'La solicitud fue procesada de forma correcta',
        ]);
        DB::table('operation_responses')->insert([
            'status' => 'error',
            'code' => 400,
            'message' => 'Solicitud incorrecta',
            'description' => 'No se puede procesar la solicitud porque tiene un formato incorrecto o es incorrecta.',
        ]);
        DB::table('operation_responses')->insert([
            'status' => 'error',
            'code' => 401,
            'message' => 'Sin autorizar',
            'description' => 'La información de autenticación necesaria falta o no es válida para el recurso.',
        ]);
        DB::table('operation_responses')->insert([
            'status' => 'error',
            'code' => 403,
            'message' => 'Prohibido',
            'description' => 'Se denegó el acceso al recurso solicitado. Es posible que el usuario no tenga permisos suficientes.',
        ]);
        DB::table('operation_responses')->insert([
            'status' => 'error',
            'code' => 404,
            'message' => 'No encontrado',
            'description' => 'El recurso solicitado no existe.',
        ]);
        DB::table('operation_responses')->insert([
            'status' => 'error',
            'code' => 405,
            'message' => 'Reservado',
            'description' => 'El recurso solicitado fue utilizado.',
        ]);
        DB::table('operation_responses')->insert([
            'status' => 'error',
            'code' => 409,
            'message' => 'Validación fallida',
            'description' => 'La solicitud no cumple con el formato válido.',
        ]);
        DB::table('operation_responses')->insert([
            'status' => 'error',
            'code' => 500,
            'message' => 'Error interno del servidor',
            'description' => 'La solicitud no fue procesada con éxito.',
        ]);
    }
}
