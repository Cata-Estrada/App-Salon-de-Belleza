<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellido')->after('name');
            $table->string('telefono')->nullable();
            $table->boolean('admin')->default(0);
            $table->boolean('confirmado')->default(0);
            $table->string('token', 60)->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'apellido',
                'telefono',
                'admin',
                'confirmado',
                'token'
            ]);
        });
    }
};