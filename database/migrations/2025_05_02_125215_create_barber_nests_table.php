<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->enum('role', ['admin', 'barber', 'customer']);
    $table->timestamps();
});

Schema::create('branches', function (Blueprint $table) {
$table->id();
    $table->string('name');
    $table->string('address');
    $table->timestamps();
});

Schema::create('services', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description')->nullable();
    $table->integer('price');
    $table->boolean('home_service_available')->default(false);
    $table->timestamps();
});

Schema::create('barbers', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('branch_id')->constrained()->onDelete('cascade');
    $table->string('bio')->nullable();
    $table->timestamps();
});

Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade'); // customer
    $table->foreignId('barber_id')->nullable()->constrained()->onDelete('cascade');
    $table->foreignId('branch_id')->constrained()->onDelete('cascade');
    $table->foreignId('service_id')->constrained()->onDelete('cascade');
    $table->enum('status', ['pending', 'accepted', 'completed', 'cancelled'])->default('pending');
    $table->dateTime('scheduled_at');
    $table->string('payment_method');
    $table->timestamps();
});

Schema::create('transactions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('booking_id')->constrained()->onDelete('cascade');
    $table->enum('status', ['unpaid', 'paid', 'failed'])->default('unpaid');
    $table->integer('total_amount');
    $table->timestamps();
});
    }

    public function down()
    {
    Schema::dropIfExists('transactions');
    Schema::dropIfExists('bookings');
    Schema::dropIfExists('barbers');
    Schema::dropIfExists('services');
    Schema::dropIfExists('branches');
    Schema::dropIfExists('users');
    }
};