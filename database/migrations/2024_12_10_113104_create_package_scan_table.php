<?php

use App\Models\Package;
use App\Models\Scan;
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
        Schema::create('package_scan', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Package::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Scan::class)->constrained()->onDelete('cascade');
            $table->string('package_version');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scan_vulnerability');
    }
};
