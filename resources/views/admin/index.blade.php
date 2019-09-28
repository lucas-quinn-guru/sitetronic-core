@extends('layouts.default.master')

@section('titlePage', 'Admin')

@section('content')
    <div class="container">
        {{ Breadcrumbs::render('sitetronic-core-admin-index') }}
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
                        @can('Browse Posts')
                            <div>
                                <a href='/admin/posts'>Blog Post Administration</a>
                            </div>
                        @endcan
                        @can('Browse Pages')
                            <div>
                                <a href='/admin/pages'>Page Administration</a>
                            </div>
                        @endcan
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Site Info</div>
                    <div class="card-body">
                        Domain: {{ $_SERVER[ 'SERVER_NAME' ] }}<br>
                        App Name: {{ $_SERVER[ 'APP_NAME' ] }}<br>
                        DB Name: {{ $_SERVER[ 'DB_DATABASE' ] }}<br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
