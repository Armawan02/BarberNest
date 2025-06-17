@extends('master1')
@section('content')
<div class="container py-5">
    <h2 class="mb-4">Dashboard Barber</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Data Booking</h5>
                </div>
                <div class="card-body">
                    @include('barber.booking', ['riwayatBooking' => $riwayatBooking])

                </div>
            </div>
        </div>
    </div>

    @endsection