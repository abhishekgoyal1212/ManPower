<div class="card candidate-preview">
    <header>
       <h2 class="mb-0">Status and availability
         @if(!empty($candidate_data->employment_status))
          <button type="button" data-toggle="modal" data-target="#exampleModalCenter-four">Edit <i class="bi bi-pencil-square edit-icon"></i></button>
          @endif
       </h2>
    </header>
    <div class="login-info">
       <div class="d-flex justify-content-between">
          <h3 class="d-inline-block">Employment status</h3>
          @if(empty($candidate_data->employment_status))
          <button type="button" data-toggle="modal" data-target="#exampleModalCenter-four">Add employment status <i class="bi bi-plus-circle"></i></button>
          @endif
       </div>
       @if(!empty($candidate_data->employment_status))
           <p>{{$candidate_data->employment_status}}</p>
       @endif
       @if(!empty($candidate_data->notice_period))
       <h3 class="">Notice period</h3>
       <p>{{$candidate_data->notice_period}}</p>
       @endif
       <h3 class="">Work eligibility</h3>
       @if(!empty($candidate_data->eligible_work))
       @if(!empty($candidate_data->eligible_work == 0))
       <p> Not eligible to work in the UK</p>
       @else
       <p>Yes eligible to work in the UK</p>
       @endif
       @endif
    </div>
    <div class="modal fade about-modal" id="exampleModalCenter-four" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-look" role="document">
          <div class="modal-content">
             <div class="modal-header border-0 pb-0">
                <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Status and availability</h3>
                <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
             </div>
             <div class="modal-body pb-1">
                <form method="post" action="{{route('CandidateProfileSave','form-2')}}">
                   @csrf
                   <div class="row">
                      <div class="col-12">
                         <label class="d-block font-weight-bold">Employment status</label>
                      </div>
                      <div class="col-md-6 my-2">
                         <select name="employment_status" @if(empty($candidate_data->notice_period)) id="employment" @else id = "employments" @endif><option value="0">Select</option>
                            <option value="Employed (full-time)" @if(!empty($candidate_data->employment_status)){{$candidate_data->employment_status == 'Employed (full-time)' ? 'selected' : ''}} @endif>Employed (full-time)</option>
                            <option value="Employed (part-time)" @if(!empty($candidate_data->employment_status)){{$candidate_data->employment_status == 'Employed (part-time)' ? 'selected' : ''}} @endif>Employed (part-time)</option>
                            <option value="Employed (temp / contract)" @if(!empty($candidate_data->employment_status)){{$candidate_data->employment_status == 'Employed (temp / contract)' ? 'selected' : ''}} @endif>Employed (temp / contract)</option>
                            <option value="Full-time education" @if(!empty($candidate_data->employment_status)){{$candidate_data->employment_status == 'Full-time education' ? 'selected' : ''}} @endif>Full-time education</option>
                            <option value="Unemployed" @if(!empty($candidate_data->employment_status)){{$candidate_data->employment_status == 'Unemployed' ? 'selected' : ''}} @endif>Unemployed</option>
                         </select>
                      </div>
                   </div>
                   @if(!empty($candidate_data->notice_period))
                   <div class="row" id="notices">
                      <div class="col-12"><label class="d-block font-weight-bold">Notice period</label></div><div class="col-md-6 my-2"><select name="notice_period">
                         <option value="None specified">None specified</option>
                         <option value="1 week" @if(!empty($candidate_data->notice_period)){{$candidate_data->notice_period == '1 week' ? 'selected' : ''}} @endif>1 week</option>
                         <option value="2 weeks" @if(!empty($candidate_data->notice_period)){{$candidate_data->notice_period == '2 weeks' ? 'selected' : ''}} @endif>2 weeks</option>
                         <option value="3 weeks" @if(!empty($candidate_data->notice_period)){{$candidate_data->notice_period == '3 weeks' ? 'selected' : ''}} @endif>3 weeks</option>
                         <option value="1 month" @if(!empty($candidate_data->notice_period)){{$candidate_data->notice_period == '1 month' ? 'selected' : ''}} @endif>1 month</option>
                         <option value="2 months" @if(!empty($candidate_data->notice_period)){{$candidate_data->notice_period == '2 months' ? 'selected' : ''}} @endif>2 months</option>
                         <option value="3 months" @if(!empty($candidate_data->notice_period)){{$candidate_data->notice_period == '3 months' ? 'selected' : ''}} @endif>3 months</option>
                         <option value="6 months" @if(!empty($candidate_data->notice_period)){{$candidate_data->notice_period == '6 months' ? 'selected' : ''}} @endif>6 months</option>
                      </select>
                   </div>
                   </div>
                   @endif

                   <div class="row" style="display: none" id="notice">
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <label class="font-weight-bold mb-2">Are you eligible to work in the US?</label>
                      </div>
                      <div class="col-12">
                         <label class="mr-4">
                         <input type="radio" name="eligible_work" value="1" class="mb-0" checked>
                         Yes
                         </label>
                         <label>
                         <input type="radio" name="eligible_work" value="0" class="mb-0">
                         No
                         </label>
                      </div>
                   </div>
             </div>
             <div class="modal-footer pt-0">
                <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
             </div>
          </form>
          </div>
       </div>
    </div>
 </div>