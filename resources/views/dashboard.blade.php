@extends('layouts.layoutCommon')
@section('title', 'Dashboard || QuarkCars')

@section('content')

    <x-pageHeader title="Dashboard" subtitle="Dashboard" />

    <section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard-content">
                        <h2>Welcome to QuarkCars Dashboard</h2>
                        <p>{{ __("You're logged in!") }}</p>
                        <p>Name: {{ Auth::user()->name }}</p>
                        <p>Email: {{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
