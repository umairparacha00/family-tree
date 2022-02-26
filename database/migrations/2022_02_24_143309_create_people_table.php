<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('father_id')
                ->nullable()
                ->constrained('people', 'id')
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('caste')->fulltext();
            $table
                ->longText('bio')
                ->nullable()
                ->fulltext();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
};
