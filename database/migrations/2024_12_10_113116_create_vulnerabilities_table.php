<?php

use App\Models\Package;
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
            $table->foreignIdFor(Package::class)->constrained()->onDelete('cascade');
            $table->string('introduced_version');
            $table->string('fixed_version');
            $table->text('details');
            $table->integer('severity'); // 1 = low, 2 = moderate, 3 = high, 4 = critical
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
