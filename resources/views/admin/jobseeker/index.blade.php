@extends('admin.index')
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
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.jobseeker.addOrEdit')}}"><button type="button" class="btn btn-primary">Add JobSeeker</button></a>
                    </div>
                    <div class="card-body data_show">
                        <table id="data-table" class="table table-hover table-bordered table-striped el-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Cv</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                 @foreach($all_info as $single_info)
                                @php
                                 $data = explode('.', $single_info->cv);
                                 @endphp
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$single_info->first_name}} {{$single_info->last_name}}</td>
                                    <td>{{$single_info->email}}</td>
                                    <td>{{$single_info->mobile}}</td>
                                    <td><a download="{{$single_info->cv}}" href="{{$single_info->cv}}" title="Cv">
                                        
                                    <h6>Download {{ $data[1] }}</h6>
                                </a></td>
                                 
                                <td>
                                     @if($single_info->status == 1)
                                     <a class="badge badge-success text-white cursor-pointer" class="text-success" onclick="confirm_box_status('inactive','{{$single_info->id}}','{{route('admin.dashboard.activeInactive')}}',this,'JobSeekers','JobSeeker')"><strong>Active</strong></a>
                                     @else
                                     <a class="badge badge-danger text-white cursor-pointer" class="text-danger" onclick="confirm_box_status('active','{{$single_info->id}}','{{route('admin.dashboard.activeInactive')}}',this,'JobSeekers','JobSeeker')"><strong>Inactive</strong></a>
                                     @endif
                                 </td>
                                 <td><a href="{{route('admin.jobseeker.addOrEdit',$single_info->id)}}"><button type="button" class="btn btn-block bg-gradient-primary btn-xs my-1">Edit</button></a>
                                    <a href="javascript::voide()" onclick="details_page('{{$single_info->id}}','{{route('admin.jobseeker.index')}}'),this"><button type="button" class="btn btn-block bg-gradient-danger btn-xs my-1" >Details</button></a>
                                </td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script>

</script>
@stop