<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('(UUID())'));
            $table->string('slug');
            $table->string('title_en');
            $table->string('title_ar')->nullable();
            $table->string('title_sp')->nullable();
            $table->string('title_sw')->nullable();
            $table->string('sub_title_en')->nullable();
            $table->string('sub_title_ar')->nullable();
            $table->string('sub_title_sp')->nullable();
            $table->string('sub_title_sw')->nullable();
            $table->text('description_en');
            $table->text('description_ar')->nullable();
            $table->text('description_sp')->nullable();
            $table->text('description_sw')->nullable();
            $table->string('url')->nullable();
            $table->date('start_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->float('total_price')->nullable();
            $table->float('total_paid')->nullable();
            $table->float('total_left')->nullable();
            $table->float('total_cost')->nullable();
            $table->integer('sales_commission')->nullable();
            $table->foreignUuid('category_id')->constrained('project_categories')->onDelete('CASCADE');
            $table->foreignUuid('client_id')->constrained('clients')->onDelete('CASCADE');
            $table->enum('status', ['new', 'processing', 'stage', 'delivered', 'cancelled'])->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
