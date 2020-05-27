@extends('layouts.app')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Manage Companies</h2>
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
                    <h4 class="float-left">Companies</h4>
                    <a class="mb-1 mt-1 mr-1 modal-sizes btn btn-primary btn-sm add-button float-right" href="#modalMD"><i class="fa fa-plus"></i> Add company</a>
                    <table class="table table-responsive-md table-striped table-sm mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>CC Authorizers</th>
                                <th>Access Authorizers</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($companies as $company)
                            <tr>
                                <td>{{$company->name}}</td>
                                <td>{{$company->phone}}</td>
                                <td>John Doe</td>
                                <td>Jane Doe</td>
                                <td class="actions">
                                    {{-- <a href="{{route('company.show', $company)}}"><i class="fas fa-eye"></i></a> --}}
                                    <a href=""><i class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="delete-row"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>  
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No records found</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</section>
<div id="modalMD" class="modal-block modal-block-md mfp-hide">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Are you sure?</h2>
        </header>
        <div class="card-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <p class="mb-0">Are you sure that you want to delete this image?</p>
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary modal-confirm">Confirm</button>
                    <button class="btn btn-default modal-dismiss">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>
@endsection