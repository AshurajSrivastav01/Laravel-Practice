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
        Schema::table('customer', function (Blueprint $table) {
            $table->string('address1')->after('password');
            $table->string('address2')->nullable()->after('password');
            $table->string('city')->after('password');
            $table->string('pincode')->after('password');
            $table->string('state')->after('password');
            $table->string('country')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer', function (Blueprint $table) {
            //
        });
    }
};
