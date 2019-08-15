@extends('layouts.default.master')

@section('titlePage', 'Admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Administration</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Let's Get Some Shit Done.

                        @can('Browse Users')
                            <div>
                                <a href='/admin/users'>User Admin</a>
                            </div>
                        @endcan
                        @can('Browse Exams')
                            <div>
                                <a href='/admin/exam'>Exam Administration</a>
                            </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
