<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Facade;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add other location details here
            $table->timestamps();
        });

        // Insert initial locations
        \App\Models\Location::create(['name' => 'Dhaka']);
        \App\Models\Location::create(['name' => 'Comilla']);
        \App\Models\Location::create(['name' => 'Chittagong']);
        \App\Models\Location::create(['name' => "Cox's Bazaar"]);
    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
