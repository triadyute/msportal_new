@extends('layouts.app')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Manage Users</h2>
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
                    <h4 class="float-left">Users</h4>
                    <a class="mb-1 mt-1 mr-1 modal-sizes btn btn-primary btn-sm add-button float-right" href="#modalMD"><i class="fa fa-plus"></i> Add user</a>
                    @include('inc.messages')
                    <table class="table table-responsive-md table-striped table-sm mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>
                                @if($user->company)
                                    {{$user->company->name}}
                                @endif
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    Active<br>
                                    Permanent Access: {{$user->hasPermanentAccess?'Yes':'No'}}
                                </td>
                                <td>
                                    @if (count($user->roles) > 4)
                                        Admin
                                    @else
                                    @foreach ($user->roles as $role)
                                        {{$role->name}}<br>
                                    @endforeach
                                    @endif
                                </td>
                                <td class="actions">
                                    <a href="{{route('user.show', $user)}}"><i class="fas fa-eye"></i></a>
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
            <h2 class="card-title">Add new user</h2>
        </header>
        <div class="card-body">
            <div class="modal-wrapper">
                <form class="form-horizontal"  method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Name</label>
                        <div class="col-lg-7">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Email</label>
                        <div class="col-lg-7">
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Phone</label>
                        <div class="col-lg-7">
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Fax</label>
                        <div class="col-lg-7">
                            <input type="text" name="fax" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Company</label>
                        <div class="col-lg-7">
                            <select class="form-control" name="company" required>
                                <option value="" selected disabled>Select company</option>
                                @foreach ($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2">Roles</label>
                        <div class="col-lg-6">
                            <select class="form-control" multiple="multiple" name="roles[]" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "includeSelectAllOption": true }' id="ms_example5" required>
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}" @if ($role->name == 'User')
                                        {{'checked'.' style="display:none"'}}
                                    @endif>{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2">Grant Permanent Access</label>
                        <div class="col-lg-6 pt-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2">Upload photo id</label>
                        <div class="col-lg-6 pt-2">
                            <input type="file" name="photo_id" id="photo_id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Id expires on</label>
                        <div class="col-lg-7">
                            <input type="text" name="id_expires_on" class="form-control" id="inputDefault">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-9 text-right offset-md-1">
                            <button type="submit" class="btn btn-primary">Save user</button>
                            <button class="btn btn-default modal-dismiss">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>   
@endsection