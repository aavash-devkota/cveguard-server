<?php

use App\Enums\VulnerabilityEcosystem;
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
        Schema::create('vulnerabilities', function (Blueprint $table) {
            $table->id();
            $table->string('cve_id')->nullable();
            $table->string('ghsa_id')->unique();
            $table->enum('ecosystem', array_column(VulnerabilityEcosystem::cases(), 'value'));
            $table->string('name');
            $table->string('introduced_version');
            $table->string('fixed_version');
            $table->text('details');
            $table->timestampTz('published_at');
            $table->timestampTz('modified_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vulnerabilities');
    }
};
