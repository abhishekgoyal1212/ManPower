    <style>
      .student-profile .card {
        border-radius: 10px;
      }
  
      .student-profile .card .card-header .profile_img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 10px auto;
        border: 10px solid #ccc;
        border-radius: 50%;
      }
  
      .student-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
      }
  
      .student-profile .card p {
        font-size: 16px;
        color: #000;
      }
  
      .student-profile .table th,
      .student-profile .table td {
        font-size: 14px;
        padding: 5px 10px;
        color: #000;
      }
    </style>
  
    <div class="student-profile py-4 recuriter_profile">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card shadow-sm">
              <div class="card-header bg-transparent text-center">
              
                <img class="profile_img" src="{{asset('admin-assets/img/avata.jpg')}}" alt="student dp">
              
                <h3>{{$details_data->fullname}}</h3>
              </div>
              <div class="card-body">
                <p class="mb-0"><strong class="pr-1">First Name:</strong>{{$details_data->first_name}}</p>
                <p class="mb-0"><strong class="pr-1">Last Name:</strong>{{$details_data->last_name}}</p>
                @if(!empty($details_data->company_name))
                <p class="mb-0"><strong class="pr-1">Company Name:</strong>{{$details_data->company_name}}</p>
                <p class="mb-0"><strong class="pr-1">Company Type:</strong>@if($details_data->company_type == 1)Direct employer @endif
                    @if($details_data->company_type == 2)Charity / not for profit @endif
                    @if($details_data->company_type == 3)Recruitment consultancy @endif</p>
                <p class="mb-0"><strong class="pr-1">Company Size:</strong>{{$details_data->company_size}}</p>
                @endif
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card shadow-sm">
              <div class="card-header bg-transparent border-0">
                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
              </div>
              <div class="card-body pt-0">
                <table class="table table-bordered">
                  <tr>
                    <th width="30%">Contact No.</th>
                    <td width="2%">:</td>
                    @if(!empty($details_data->contact))
                    <td>{{$details_data->contact}}</td>
                    @elseif(!empty($details_data->mobile))
                    <td>{{$details_data->mobile}}</td>
                    @endif
                  </tr>
                  <tr>
                    <th width="30%">Email</th>
                    <td width="2%">:</td>
                    <td>{{$details_data->email}}</td>
                  </tr>
                  <tr>
                    <th width="30%">Registered Date</th>
                    <td width="2%">:</td>
                    <td>{{$details_data->created_at}}</td>
                  </tr>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>