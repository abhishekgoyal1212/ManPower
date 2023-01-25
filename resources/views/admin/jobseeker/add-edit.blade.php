@php
 $data = explode('.', $single_info->cv) 
 @endphp

@extends('admin/index')
@section('title','JobSeeker')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>JobSeeker</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">JobSeeker</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">JobSeeker</h3>
                        </div>
                        <!-- form start -->
                <form role="form" method="post" action="{{route('admin.jobseeker.addOrEditSave',$single_info->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter First Name" value="{{old('first_name',$single_info->first_name)}}">
                                    @error('first_name')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter last_name" value="{{old('last_name',$single_info->last_name)}}">
                                @error('last_name')
                                <div class="form-valid-error">{{ $message }}</div>
                                @enderror</div>
                            </div>
                            </div>
                        <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{old('email',$single_info->email)}}">
                                    @error('email')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror</div>
                                </div>
                            <div class="col">
                                    <div class="form-group">
                                    <label for="mobile">Contect</label>
                                    <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter mobile  " value="{{old('mobile',$single_info->mobile)}}">
                                    @error('mobile')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror</div>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" value="{{old('password',$single_info->password)}}">
                                @error('password')
                                <div class="form-valid-error">{{ $message }}</div>
                                @enderror</div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label for="cv">Cv</label>
                                <input type="file" name="cv" class="form-control" id="cv" placeholder="Enter cv" value="{{old('cv',$single_info->cv)}}">
                                <a download="{{$single_info->cv}}" href="{{$single_info->cv}}" title="Cv">
                                    @if(!empty($data[2]))
                                    <h5>Download {{$data[2]}} file</h5>
                                    @endif
                                </a></td>
                                @error('cv')
                                <div class="form-valid-error">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                        </div>
                                <div class="row">
                                <div class="col"><div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="status" checked id="active_status" value="1">
                                        <label for="active_status" class="custom-control-label">Active</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="status" id="inactive_status" value="0">
                                        <label for="inactive_status" class="custom-control-label">Inactive</label>
                                    </div>
                                </div></div>
                            </div>
                            </div>

                            

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@stop