<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
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
    $table->string('city');
    $table->timestamps();
});

Schema::create('services', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description')->nullable();
    $table->decimal('price');
    $table->integer('duration');
    $table->timestamps();
});



Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained('user')->onDelete('cascade'); // customer
    $table->foreignId('branch_id')->constrained('branches')->onDelete('cascade');
    $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
    $table->foreignId('barber_id')->nullable()->constrained('user')->onDelete('cascade');
    $table->dateTime('scheduled_at');
    $table->enum('service_method',['barbershop','home']);
    $table->text('location');
    $table->enum('status', ['pending', 'accepted', 'completed', 'cancelled'])->default('pending');
    $table->timestamps();
});

Schema::create('transactions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
    $table->decimal('amount');
    $table->string('payment_method');
    $table->enum('payment_status',['pending','paid','failed']);
    $table->enum('status', ['unpaid', 'paid', 'failed'])->default('unpaid');
    $table->timestamp('paid_at');
    $table->timestamps();
});
    }

    public function down()
    {
    Schema::dropIfExists('transactions');
    Schema::dropIfExists('bookings');
    Schema::dropIfExists('services');
    Schema::dropIfExists('branches');
    Schema::dropIfExists('user');
    }
};