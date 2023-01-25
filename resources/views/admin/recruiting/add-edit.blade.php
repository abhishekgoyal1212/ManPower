@extends('admin/index')
@section('title','Recruiter')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Recruiter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Recruiter</li>
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
                            <h3 class="card-title">Recruiter</h3>
                        </div>
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('admin.recruiting.addOrEditSave',$single_info->id)}}" enctype="multipart/form-data">
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
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="{{old('email',$single_info->email)}}">
                                    @error('email')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror</div>
                                </div>
                            <div class="col">
                                    <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter contact  " value="{{old('contact',$single_info->contact)}}">
                                    @error('contact')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror</div>
                            </div>
                            </div>
                                <div class="row">

                                <div class="col"><div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter company name" value="{{old('company_name',$single_info->company_name)}}">
                                    @error('company_name')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                <label for="company_type">Company type</label>
                               <select class="form-control" id="company_type" name="company_type" aria-invalid="false" autocomplete="off" data-qa="company-type-select">
                                <option value="" disabled="" selected="">- Select company type -</option>
                                <option value="1"{{!empty($single_info->company_type) && $single_info->company_type == 1 ? 'selected' : '' }}>Direct employer</option>
                                <option value="2" {{!empty($single_info->company_type) && $single_info->company_type == 2  ? 'selected' : '' }}>Charity / not for profit</option>
                                <option value="3" {{!empty($single_info->company_type) && $single_info->company_type == 3  ? 'selected' : '' }}>Recruitment consultancy</option>
                            </select>
                             @error('company_type')
                                    <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        </div>
                        <div class="row">
                                <div class="col">
                                <label  for="company_size">Company size</label>
                                <select class="form-control" id="company_size" name="company_size" aria-invalid="false" autocomplete="off" data-qa="company-size-select">
                                    <option value="" disabled="" selected="">- Select company size -</option>
                                    <option value="Not Known" {{!empty($single_info->company_size) && $single_info->company_size == 'Not Known'  ? 'selected' : '' }}>Not known</option>
                                    <option value="1-10" {{!empty($single_info->company_size) && $single_info->company_size == '1-10'  ? 'selected' : '' }}>1-10</option>
                                    <option value="11-50" {{!empty($single_info->company_size) && $single_info->company_size == '11-50'  ? 'selected' : '' }}>11-50</option>
                                    <option value="51-200" {{!empty($single_info->company_size) && $single_info->company_size == '51-200'  ? 'selected' : '' }}>51-200</option>
                                    <option value="201-500" {{!empty($single_info->company_size) && $single_info->company_size == '201-500'  ? 'selected' : '' }}>201-500</option>
                                    <option value="501-1000" {{!empty($single_info->company_size) && $single_info->company_size == '501-1000'  ? 'selected' : '' }}>501-1000</option>
                                    <option value="1001-5000" {{!empty($single_info->company_size) && $single_info->company_size == '1001-5000'  ? 'selected' : '' }}>1001-5000</option>
                                    <option value="5001-10000" {{!empty($single_info->company_size) && $single_info->company_size == '5001-10000'  ? 'selected' : '' }}>5001-10000</option>
                                    <option value="10001+" {{!empty($single_info->company_size) && $single_info->company_size == '10001+'  ? 'selected' : '' }}>10001+</option>
                                </select>
                                @error('company_size')
                                    <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                            </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password " value="{{old('password',$single_info->password)}}">
                                    @error('password')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror
                                </div></div>
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
                                    @error('status')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror
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