@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <p><strong>ID</strong>: {{$user->id}}</p>
                        <p><strong>Name</strong>: {{$user->name}}</p>
                        <p><strong>Email</strong>: {{$user->email}}</p>
                        <p><strong>Age</strong>: {{$user->age}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection