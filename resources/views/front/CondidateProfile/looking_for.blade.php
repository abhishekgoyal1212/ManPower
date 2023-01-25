<div class="card candidate-preview">
    <header>
       <h2 class="mb-0">Looking for
          <button type="button" data-toggle="modal" data-target="#exampleModalCenter-three">Edit <i class="bi bi-pencil-square edit-icon"></i></button>
       </h2>
    </header>
    <div class="login-info">
       <div class="d-flex justify-content-between">
          <h3 class="d-inline-block">Desired job title</h3>
          @if(empty($candidate_data->job_title))
          <button type="button" data-toggle="modal" data-target="#exampleModalCenter-three">Add Job Title <i class="bi bi-plus-circle"></i></button>
          @endif
       </div>
       @if(!empty($candidate_data->job_title))
       <div>
          {{$candidate_data->job_title}}
       </div>
       @endif

       <div class="d-flex justify-content-between">
          <h3 class="d-inline-block">Salary</h3>
          @if(empty($candidate_data->salary))
          <button type="button" data-toggle="modal" data-target="#exampleModalCenter-three">Add salary <i class="bi bi-plus-circle"></i></button>
          @endif
       </div>
       @if(!empty($candidate_data->salary))
       <div>
          {{$candidate_data->salary}}
       </div>
       @endif

       <div class="d-flex justify-content-between">
          <h3 class="d-inline-block">Location</h3>
          @if(empty($location_data))
          <button type="button" data-toggle="modal" data-target="#exampleModalCenter-three">Add location <i class="bi bi-plus-circle"></i></button>
          @endif
       </div>
       <div class="d-flex justify-content-between">
             <ul>
                @if(!empty($location_data))
              @foreach ($location_data as $item)
             <li><h6>{{$item}}</h6></li>
             @endforeach
             @endif
          </ul>
       </div>
       <div class="d-flex justify-content-between">
          <h3 class="d-inline-block">Job type</h3>
          @if(empty($candidate_data->job_type))
          <button type="button" data-toggle="modal" data-target="#exampleModalCenter-three">Add Job type <i class="bi bi-plus-circle"></i></button>
          @endif
       </div>
       <div class="d-flex justify-content-between">
          <ul>
       @if(!empty($job_data))
           @foreach ($job_data as $item)
          <li><h6><option value="{{$item}}">{{$item}}</option></h6></li>
          @endforeach
          @endif
       </ul>
    </div>

       <div class="d-flex justify-content-between">
          <h3 class="d-inline-block">Sectors &amp; roles</h3>
          @if(empty($candidate_data->sectors))
          <button type="button" data-toggle="modal" data-target="#exampleModalCenter-three">Add sectors &amp; roles <i class="bi bi-plus-circle"></i></button>
          @endif
       </div>
       <div class="d-flex justify-content-between">
          <ul>
          @if(!empty($sector_data))
           @foreach ($sector_data as $item)
          <li><h6>{{$item}}</h6></li>
          @endforeach
          @endif
       </ul>
    </div>
       
    </div>
  <div class="modal fade about-modal {{$errors->hasBag('cond_err') ? ' show_err show' : ''}}" id="exampleModalCenter-three" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
       <div class="modal-dialog modal-dialog-centered modal-look" role="document">
          <div class="modal-content">
             <div class="modal-header border-0 pb-0">
                <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Looking for</h3>
                <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
             </div>
             <div class="modal-body">
                <form method="post" action="{{route('CandidateProfileSave','form-1')}}">
                   @csrf
                   <div class="row">
                      <div class="col">
                         <label class="d-block font-weight-bold">Desired job title</label>
                         <input type="text" name="job_title" class="w-100" @if(!empty($candidate_data)) value="{{$candidate_data->job_title}}" @endif value="{{old('job_title')}}">
                          @error('job_title','cond_err')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                   </div>
                   <div class="row">
                      <div class="col">
                         <label class="d-block font-weight-bold">Salary <small>Minimum salary (please enter at least one type of salary)</small></label>
                      </div>
                   </div>
                   <div class="row">
                      <div class="salary col-6 col-md-3">
                         <span>£</span>
                         <input type="text" name="salary" class="w-100 mb-1" id="intTextBox"  @if(!empty($candidate_data)) value="{{$candidate_data->salary}}" @endif value="{{old('salary')}}">
                      </div>
                      <div class="col-6 col-md-3">
                         <select class="mb-1" id="salary_per" name="timing">

                            <option value="1" @if(!empty($candidate_data)){{$candidate_data->timing == 1 ? 'selected' :''}}@endif>per hour</option>
                            <option value="2" @if(!empty($candidate_data)){{$candidate_data->timing == 2 ? 'selected' :''}}@endif>per annum</option>
                         </select>
                         @error('salary_per','cond_err')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class=" col-md-12" id="invalid-feedback" style="display: none"></div>
                   </div>
                    @error('salary','cond_err')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                   <p>Not sure? Use our <a href="">salary checker</a> to find out</p>
                   <div class="row">
                      <div class="col-12">
                         <label class="font-weight-bold mb-2">Preferred work location</label><br>
                      </div>
                      <div class="col-md-5">
                      <select class="select2" name="location" multiple class="w-100 mb-1" placeholder="town or city">
                         @foreach($all_world_data as $location)
                         <option value="{{$location}}">{{$location}}</option>
                         @endforeach
                         @if(!empty($location_data))
                         @foreach ($location_data as $item)
                         <option value="{{$item}}" {{$item ? 'selected' : '' }}>{{$item}}</option>
                         @endforeach
                         @endif
                     </select>
                      @error('location','cond_err')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                         <!-- <input type="text" name="location" class="w-100 mb-1" placeholder="town or city" id="remove_val"> -->
                      </div>
                      <div class="col-md-3 px-0">
                         <button class="add-btn text-white" id="add_location">Add</button>
                      </div>
                   </div>
                   <span class="location_err invalid-feedback" style="display: none"></span>
                   <div class="row">
                      <div class="col-12">
                         <label class="font-weight-bold mb-2">Job type</label>
                         <div class="job-option">
                            <div class="job-option-type">

                               <input type="checkbox" name="job_type[]" value="Permanent" class="mb-0" {{$job_data == null ? '' : (in_array('Permanent',$job_data) ? 'checked' : '')}}>
                               Permanent
                               </label>
                            </div>
                            <div class="job-option-type">
                               <label>
                               <input type="checkbox" name="job_type[]" value="Temporary" class="mb-0"{{$job_data == null ? '':(in_array('Temporary',$job_data) ? 'checked' : '')}}>
                               Temporary
                               </label>
                            </div>
                            <div class="job-option-type">
                               <label>
                               <input type="checkbox" name="job_type[]" value="Contract" class="mb-0" {{$job_data == null ? '':(in_array('Contract',$job_data) ? 'checked' : '')}}>
                               Contract
                               </label>
                            </div>
                            <div class="job-option-type">
                               <label>
                               <input type="checkbox" name="job_type[]" value="Full-time" class="mb-0" {{$job_data == null ? '':(in_array('Full-time',$job_data) ? 'checked' : '')}}>
                               Full-time
                               </label>
                            </div>
                            <div class="job-option-type">
                               <label>
                               <input type="checkbox" name="job_type[]" value="Part-time" class="mb-0" {{$job_data == null ? '':(in_array('Part-time',$job_data) ? 'checked' : '')}}>
                               Part-time
                               </label>
                            </div>
                            <div class="job-option-type">
                               <label>
                               <input type="checkbox" name="job_type[]" value="Work from home" class="mb-0" {{$job_data == null ? '':(in_array('Work from home',$job_data) ? 'checked' : '')}}>
                               Work from home
                               </label>
                            </div>
                            <div class="job-option-type">
                               <label>
                               <input type="checkbox" name="job_type[]" value="Graduate Jobs" class="mb-0" {{$job_data == null ? '':(in_array('Graduate Jobs',$job_data) ? 'checked' : '')}}>
                               Graduate Jobs
                               </label>
                            </div>

                         </div>
                          @error('job_type','cond_err')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <label class="d-block font-weight-bold">Sectors<small> You may add up to 10 sectors</small></label>
                      </div>
                      <div class="col-md-5 my-2">
                         <select name="sector[]" class="select_sector" multiple>
                            @if(!empty($sector_data))
                            @foreach ($sector_data as $item)
                           <li><h6><option selected>{{$item}}</option></h6></li>
                           @endforeach
                           @endif
                            <option >Select a Sector</option>
                            <option>Accountancy (Qualified)</option><option >Admin, Secretarial &amp; PA</option><option >Apprenticeships</option><option >Banking</option><option >Charity &amp; Voluntary</option><option >Construction &amp; Property</option><option >Customer Service</option><option >Education</option><option >Energy</option><option >Engineering</option><option >Estate Agency</option><option >Financial Services</option><option >FMCG</option><option >General Insurance</option><option >Health &amp; Medicine</option><option >Human Resources</option><option >Legal</option><option >Leisure &amp; Tourism</option><option >Manufacturing</option><option >Marketing &amp; PR</option><option >Media, Digital &amp; Creative</option><option >Motoring &amp; Automotive</option><option >Public Sector</option><option >Purchasing</option><option >Recruitment Consultancy</option><option >Retail</option><option >Sales</option><option >Scientific</option><option >Security &amp; Safety</option><option >Social Care</option><option >Strategy &amp; Consultancy</option><option >Training</option><option >Transport &amp; Logistics</option><option >Other</option>
                         </select>
                         @error('sector','cond_err')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                      </div>
                      <div class="col-md-3 px-0 my-2">
                         <button class="add-btn text-white">Add</button>
                      </div>
                   </div>
             </div>
             <div class="modal-footer">
                <button type="submit" class="btn" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
             </div>
          </form>
          </div>
       </div>
    </div>
</div>
 
