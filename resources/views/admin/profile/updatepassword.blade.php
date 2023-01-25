@extends('admin/index')
@section('title', 'Update Password')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Update Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Update Password</h3>
                        </div>
                        <div class="card-body">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Full Name</th>
                                        <td>{{ $user_info->fullname }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $user_info->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mobile Number</th>
                                        <td>{{ $user_info->mobile }}</td>
                                    </tr>
                                </tbody>
                            </table>                
                                     <!-- update_password  -->
        <form method="post"  action="{{route('admin.setProfile',['update-password'])}}" class="form-horizontal">
          @csrf
                      <div class="card-body">
                                    <div class="form-group row">
                                            <label  class="col-sm-4 col-form-label">Current Password</label>
                                            <div class="col-sm-8">
                                              <input type="password" class="form-control"  name="current_password" placeholder="Current Password">
                                              @error('current_password')
                                              <div class="form-valid-error">{{ $message }}</div>
                                              @enderror
                                           </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label  class="col-sm-4 col-form-label">New Password</label>
                                            <div class="col-sm-8">
                                              <input type="password" class="form-control"  name="password" placeholder="New Password">
                                              @error('password')
                                              <div class="form-valid-error">{{ $message }}</div>
                                              @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label  class="col-sm-4 col-form-label">Confirm Password</label>
                                            <div class="col-sm-8">
                                              <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                                              @error('confirm_password')
                                              <div class="form-valid-error">{{ $message }}</div>
                                              @enderror
                                            </div>
                                         </div>
                                         
                
                                        <div class="form-group">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-danger m-b-0">Submit</button>
                                            </div>
                                        </div>

                                      </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection