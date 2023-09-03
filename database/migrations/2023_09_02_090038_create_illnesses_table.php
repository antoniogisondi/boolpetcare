<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illnesses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug', 80)->nullable();
            $table->string('diagnosis', 80);
            $table->string('treatment', 80);
            $table->text('notes');
            $table->timestamps();
        });

        DB::table('illnesses')->get()->each(function ($record) {
            DB::table('illnesses')
                ->where('id', $record->id)
                ->update(['slug' => Str::slug($record->name)]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('illnesses');
    }
};
