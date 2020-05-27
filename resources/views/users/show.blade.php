@extends('layouts.app')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>User Profile</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Layouts</span></li>
                <li><span>Default</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-lg-12">
            <section class="card">
                {{-- <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>
    
                    <h2 class="card-title">Striped</h2>
                </header> --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>{{$user->name}}</h4>
                                <img src="{{asset('/dashboard/img/default.jpg')}}" height="150" width="150" alt="">
                        </div>
                        <div class="col-md-3">
                            <p>
                                COMPANY: {{$user->company->name}}<br>
                                EMAIL: {{$user->email}}<br>
                                PHONE: {{$user->phone}}<br>
                            </p>
                            </div>
                        <div class="col-md-3">
                            <button type="button" class="align-bottom">Edit user</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>    
@endsection