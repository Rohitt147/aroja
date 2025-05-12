<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id')->nullable(); // user who created the company
            $table->string('code')->unique();
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('mobile');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('gstin');
            $table->string('pan');
            $table->string('cin')->nullable();
            $table->decimal('fuel_charge', 5, 2)->nullable();
            $table->string('logo')->nullable(); // path to uploaded file
            // $table->boolean('toggle')->default(true); // active by default
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->string('admin_user')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
