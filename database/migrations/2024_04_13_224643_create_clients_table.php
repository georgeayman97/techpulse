<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('(UUID())'));
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->string('country_name');
            $table->foreignUuid('country_id')->constrained('countries')->onDelete('CASCADE');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('domain_of_work')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_size')->nullable();
            $table->string('company_email')->nullable();
            $table->boolean('status')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
