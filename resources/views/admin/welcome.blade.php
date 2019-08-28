@extends('layouts.backend.backend-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome Author</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Hello! Welcome <strong>{{Auth::user()->name}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
