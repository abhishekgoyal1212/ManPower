<?php $email = session()->get('email'); ?>
@extends('front.login.index')
@section('title', 'Home')
@section('content')
<style>
#invalid-feedback {
    display: block;
    color: #0f151a;
    font-size: 16px;
    border-radius: 4px;
    background-color: #fdeaea;
    margin-top: 10px;
    padding: 7.5px 15px;
}
.invalid-feedback{
   display: block;
    color: #0f151a;
    font-size: 16px;
    border-radius: 4px;
    background-color: #fdeaea;
    margin-top: 10px;
    padding: 7.5px 15px;
}
.d-flex.justify-content-between ul {
    list-style: none;
    margin: 0;
}
.show_err {
   display: block;
}
.skils_card {
         list-style: none;
         font-size: 14px;
         font-weight: 500;
      }
      .skils_card_item {
         margin: 0 8px 8px 0;
         display: inline-block;
         border-radius: 14px;
         border: 1px solid #bcbcfb;
         background-color: #e9e9fe;
         padding: 6px 10px;
      }
      
.edit_formGroup__YrVc1 {
    position: relative;
    margin-top: 15px;
    margin-bottom: 15px;
}
.form-check-inline {
    display: inline-block;
    margin-right: 1rem;
}
.edit_addLanguage___zLow {
    padding: 0;
    width: auto;
    height: auto;
    font-size: 14px;
    margin: 0 0 20px;
}
.preview_languages__zxW8e {
    display: inline-block;
}
.preview_languages__item__pjOaz {
    display: block;
    margin-bottom: 10px;
    margin-right: 70px;
}
.login-info p {
    white-space: pre-wrap;
}
.preview_preview__pcWbN {
    margin-bottom: 20px;
}
.upload button {
    font-size: 16px;
    font-weight: 500;
    background: #fff;
    border: 2px solid transparent;
    height: 42px;
    margin: 0 auto 20px;
    width: 100%;
    max-width: 320px;
    color: #fff;
    border-color: transparent;
    transition: background-color .3s ease-in;
    background-color: #cf04a9;
    font-weight: 500;
}
label.error {
   display: block;
    color: #0f151a;
    font-size: 16px;
    border-radius: 4px;
    background-color: #fdeaea;
    margin-top: 10px;
    padding: 7.5px 15px;
}
input.error, textarea.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
}
</style>
<section class="profile-details">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-4">
            <div class="card profile-visibility">
               <header class="card-header">
                  <h5>Profile &amp; CV visibility</h5>
                  <div class="toggle-btn-slide">
                     <div class="btn-slide-bg"></div>
                     <span></span>
                  </div>
               </header>
               <p>Increase your chances of finding a new job by allowing recruiters to find you by your profile &amp; CV.</p>
            </div>
            <div class="card candidate-preview">
               <header>
                  <h2 class="mb-0">About you
                     <button type="button" data-toggle="modal" data-target="#exampleModalCenter-one">Edit <i class="bi bi-pencil-square edit-icon"></i></button>
                  </h2>
               </header>
               <div class="login-info">
                  <h3>{{ucfirst($current_data->first_name)}} {{ucfirst($current_data->last_name)}}</h3>
                  <span><i class="fa fa-phone" aria-hidden="true"></i>+91-{{$current_data->mobile}}</span><br>
                  <span><i class="fa fa-envelope-o" aria-hidden="true"></i>{{$current_data->email}}</span>
                  <span class="login-preview">{{ucfirst(substr($current_data->first_name,0,1))}}{{ucfirst(substr($current_data->last_name,0,1))}}</span>
               </div>
               <div class="modal fade about-modal" id="exampleModalCenter-one" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                           <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">About you</h3>
                           <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body">
                        <form id="candidate_about" method="post" action="{{route('CandidateAbout')}}">
                              @csrf
                              <div class="row">
                                 <div class="col">
                                    <label class="d-block font-weight-bold" for="firstname">First name</label>
                                    <input type="text" name="first_name" class="w-100" value="{{$current_data->first_name}}">
                                 </div>
                                 <div class="col">
                                    <label class="d-block font-weight-bold" for="lastname">Last name</label>
                                    <input type="text" name="last_name" class="last_name w-100" value="{{$current_data->last_name}}">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    <label class="d-block font-weight-bold" for="mobile">Phone number</label>
                                    <input type="text" name="mobile" class="w-100" value="@if(!empty($current_data)){{$current_data->mobile}}@else''@endif">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="edit-location">
                                       <div class="location-title">
                                       <div class="current-location">
                                          <h4 class="mb-0">Your current location<br>
                                          <span style="font-weight: normal;">
                                          @foreach (DB::table('cities')->where('id', $current_data->city)->get()->toArray() as $items)
                                          {{$items->name}}
                                          @endforeach</span></h4>
                                       </div>
                                          <button type="button" class="EditButtonModal">Edit <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                       </div>
                                       <div class="toggle-location">
                                          <div>
                                             <label class="d-block font-weight-bold">Country</label>
                                               
                                             <select class="w-100" name="country">
                                                 <option value="">Please Select</option>
                                                      @if(!empty($country_data))
                                                      @foreach($country_data as $key => $countries)
                                                      <option value="{{$countries['id']}}" {{$current_data->country == $countries['id']? 'selected':''}}>{{$countries['name']}}</option>
                                                      @endforeach
                                                      @endif
                                             </select>
                                          </div>
                                          <div>
                                             <label class="d-block font-weight-bold">State</label>
                                             <select class="state w-100" name="state" id="state">
                                             <option value="">Please Select</option>
                                                   @foreach (DB::table('states')->where('country_id', $current_data->country)->get()->toArray() as $items)
                                                   <option value="{{ $items->id }}"
                                                    @if ($items->id == $current_data->state) selected @endif>{{ $items->name }}
                                                   </option>
                                                   @endforeach
                                             </select>
                                          </div>
                                          <div>
                                             <label class="d-block font-weight-bold">Town</label>
                                             <select class="city w-100" name="city" id="city">
                                             <option value="">Please Select</option>
                                              @foreach (DB::table('cities')->where('state_id', $current_data->state)->get()->toArray() as $items)
                                                   <option value="{{ $items->id }}"
                                                    @if ($items->id == $current_data->city) selected @endif>{{ $items->name }}
                                                   </option>
                                                   @endforeach
                                             </select>    
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn" data-dismiss="modal">Close</button>
                              <button type="submit" id="submit" class="btn btn-primary">Save changes</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card candidate-preview">
               <header>
                  <h2 class="mb-0">Profile
                     <button type="button" data-toggle="modal" data-target="#exampleModalCenter-two">Learn more</button>
                  </h2>
               </header>
               <div class="login-info profile-steps">
                  <ul>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                  </ul>
                  <button>0/6 Complete</button>
               </div>
               <div class="modal fade profile-modal" id="exampleModalCenter-two" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                           <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">What is the profile?</h3>
                           <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body pb-0">
                           <p class="mb-0">Creating a robust profile will enable recruiters to find you and match you with the most relevant opportunities.
                              We recommend you fill in as much of your profile as possible to increase your chances of being found and matched to jobs.
                           </p>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn" data-dismiss="modal">Got it</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-8">
            <div class="card candidate-preview">
               <header>
                  <h2 class="mb-0">CV
                     @if(!empty($current_data->cv))
                     <a href="{{route('signupUserCv')}}"><button type="button">Update<i class="bi bi-pencil-square edit-icon"></i></button></a>
                     @endif
                  </h2>
               </header>
               <div class="login-info">
                  @if(!empty($current_data->cv))
                  <strong>Your current CV</strong>
                  <div class="row">
                  <div class="col-md-8">
                     <img src="{{asset('front-assets/images/file-read.png')}}" alt="" height="19" width="15" >
                     <p>{{str_replace('/','__',$current_data->cv)}}</p>
                  </div>
                  <div class="col" style="text-align: right;">
                     <a href="{{$current_data->cv}}" download=""><h6>Download<img src="{{asset('front-assets/images/download.png')}}" alt=""></h6></a>
                  </div>
               </div>
               @else
               <p>Upload a new CV, or use our CV builder to build one for you. To apply for jobs, you’ll need a CV.</p>
               <a href="{{route('signupUserCv')}}" class="upload">
                  <button class="update-cv_addCvButton___QsxU btn btn-primary" type="button">Add CV</button>
               </a>
               @endif
            </div>
               </div>
            @include('front.CondidateProfile.looking_for')
            @include('front.CondidateProfile.status')
            @include('front.CondidateProfile.experience')
            @include('front.CondidateProfile.qualifications')
            <div class="card candidate-preview dote-card">
                  <header>
                     <h2 class="mb-0">Skills
                        @if(!empty($json_skils))
                        <button type="button" data-toggle="modal" data-target="#exampleModalCenter-seven">Edit <i class="bi bi-pencil-square edit-icon"></i></button>
                        @endif
                     </h2>
                  </header>
               
                  <div class="login-info">
                     @if(!empty($json_skils))
                     <ul class="skils_card mb-0">
                           @foreach($json_skils as $value)
                           <li class="skils_card_item">{{$value}}</li>
                           @endforeach
                     </ul>
                  @else
                     <p>Adding skills helps you come up higher in search results.</p>
                     <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-seven">Add skills &amp; expertise <i class="bi bi-plus-circle"></i></button></div>
                     @endif
                  </div>

               <div class="modal fade about-modal" id="exampleModalCenter-seven" tabindex="-1" role="dialog"            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-look" role="document">
                        <div class="modal-content">
                           <div class="modal-header border-0 pb-0">
                              <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Skills &amp; expertise</h3>
                              <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                              </button>
                           </div>
                           
                           <div class="modal-body pb-0">
                              <form method="post" action="{{route("CandidateSkills")}}"> 
                                 @csrf
                                 <div class="row">
                                    <div class="col-md-4">
                                       <label class="font-weight-bold">Add Your Multiple Skills</label>
                                    </div>
                                    <div class="col-md-8 d-flex justify-content-between">
                                    {{-- <input type="text" name="" placeholder="Add a new skill and expertise" class="mr-3 mb-0"> --}}
                                    <select class="select2" name="skills[]" multiple  placeholder="Enter Your Skills" style="width: 70%;">
                                       @if(!empty($json_skils))
                                       @foreach($json_skils as $value){
                                          <option value="{{$value}}" {{$value ? 'selected' : '' }}>{{$value}}</option>
                                    }
                                       @endforeach
                                       @endif
                                    </select>
                                       {{-- <button type="button" data-toggle="modal" data-target="#exampleModalCenter-seven" class="w-25 text-left"><i class="bi bi-plus-circle"></i> Add </button>
                                       </div> --}}
                                 </div>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save Changes</button>
                           </div>
                        </form>
                        </div>
                     </div>
                  </div>
            </div>

            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Languages
                     @if(!empty($json_languges))
                     <button type="button" data-toggle="modal" data-target="#exampleModalCenter-eight">Edit <i class="bi bi-pencil-square edit-icon"></i></button>
                     @endif
                  </h2>
               </header>
               <div class="login-info">
                  @if(!empty($json_languges))
                  @foreach($json_languges as $key => $languges)
                  <ul class="preview_languages__zxW8e">
                     <li class="preview_languages__item__pjOaz">
                        <strong>{{$languges['language']}}</strong><br>
                        <small>({{$languges['type']}})</small>
                     </li>
                  </ul>
                  @endforeach
                  @else
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-eight" class="">Add languages <i class="bi bi-plus-circle"></i></button></div>
                  @endif
               </div>
               <div class="modal fade about-modal" id="exampleModalCenter-eight" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-look" role="document">
                     <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                           <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Languages</h3>
                           <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body pb-0">
                        <form method="POST"  action="{{route('CandidateSkills')}}" class="">
                           @csrf
                           <div class="row">
                              <div class="col-md-6">Add up to 5 languages</div>
                           </div>
                           @if(!empty($json_languges))
                           <br>
                           <div class="row form-group edit_formGroup__YrVc1" id="dynamicAddRemove">
                              @foreach($json_languges as $key => $languges)
                              <?php $keys[] = $key; ?>
                              <div class="col-lg-4">
                                 <select class="form-control edit_formGroup__select__Ww4_W" name="languages[{{$key}}][language]">
                                    <option value="{{$languges['language']}}" selected >{{$languges['language']}}</option>
                                    <option value="Toishanese">Toishanese</option>
                                    <option value="Tongan">Tongan</option>
                                    <option value="Trukese">Trukese</option>
                                    <option value="Turkish">Turkish</option>
                                    <option value="Turkmen">Turkmen</option>
                                    <option value="Ukranian">Ukranian</option>
                                    <option value="Urdu">Urdu</option>
                                    <option value="Uzbek">Uzbek</option>
                                 </select>
                              </div> 
                              <div class="col-lg-8">
                                 <div class="form-group form-check-inline">
                                    <label class="form-label edit_formGroup__radioInput__SPc1d">
                                       <input class="form-check-input" type="radio" name="languages[{{$key}}][type]" value="Basic" 
                                       {{$languges['type'] == 'Basic' ? 'checked' : ''}} >
                                       <span>Basic</span>
                                    </label>
                                 </div>
                                 <div class="form-group form-check-inline">
                                    <label class="form-label edit_formGroup__radioInput__SPc1d">
                                       <input class="form-check-input" type="radio" name="languages[{{$key}}][type]" value="Intermediate"
                                       {{$languges['type'] == 'Intermediate' ? 'checked' : ''}}>
                                       <span>Intermediate</span>
                                    </label>
                                 </div>
                                 <div class="form-group form-check-inline">
                                    <label class="form-label edit_formGroup__radioInput__SPc1d">
                                       <input class="form-check-input" type="radio" name="languages[{{$key}}][type]" value="Fluent"
                                       {{$languges['type'] == 'Fluent' ? 'checked' : ''}}>
                                       <span>Fluent</span>
                                    </label>
                                 </div>
                                 <button class="edit_deleteLanguage__h2Ubj btn btn-inline remove_button" type="button" aria-label="Remove language">Remove</button>
                             </div>
                             @endforeach
                           </div>
                           @php $key_data = end($keys) @endphp
                           <input type="hidden" id="end_key" value="@if(!empty($key_data)) {{$key_data}} @else 0 @endif">
                           @else
                           <div class="row form-group edit_formGroup__YrVc1" id="dynamicAddRemove">
                              <div class="col-lg-6">
                                 <input type="hidden" id="end_key" value="0">
                                 <select class="form-control edit_formGroup__select__Ww4_W key_select"  name="languages[0][language]">
                                    <option value="" selected disabled>Select Languages</option>
                                    <option value="Toishanese">Toishanese</option>
                                    <option value="Tongan">Tongan</option>
                                    <option value="Trukese">Trukese</option>
                                    <option value="Turkish">Turkish</option>
                                    <option value="Turkmen">Turkmen</option>
                                    <option value="Ukranian">Ukranian</option>
                                    <option value="Urdu">Urdu</option>
                                    <option value="Uzbek">Uzbek</option>
                                 </select>
                              </div> 
                              <div class="col-lg-6">
                                 <div class="form-group form-check-inline">
                                    <label class="form-label edit_formGroup__radioInput__SPc1d">
                                       <input class="form-check-input key_type" type="radio" name="languages[0][type]" value="Basic" checked="">
                                       <span>Basic</span>
                                    </label>
                                 </div>
                                 <div class="form-group form-check-inline">
                                    <label class="form-label edit_formGroup__radioInput__SPc1d">
                                       <input class="form-check-input key_type" type="radio" name="languages[0][type]" value="Intermediate">
                                       <span>Intermediate</span>
                                    </label>
                                 </div>
                                 <div class="form-group form-check-inline">
                                    <label class="form-label edit_formGroup__radioInput__SPc1d">
                                       <input class="form-check-input key_type" type="radio" name="languages[0][type]" value="Fluent">
                                       <span>Fluent</span>
                                    </label>
                                 </div>
                             </div>
                           </div>
                           @endif
                           <div class="col remove-data">
                              <button class="edit_addLanguage___zLow btn btn-outline-primary" id="dynamic-ar" type="button" aria-label="Add another language"> Add another language</button>
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                           <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                     </form>
                     </div>
                  </div>
               </div>
            </div>
            </div>
            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Cover letter
                     @if(!empty($item->cover_letter))
                     <button type="button" data-toggle="modal" data-target="#exampleModalCenter-nine">Edit <i class="bi bi-pencil-square edit-icon"></i></button>
                     @endif
                  </h2>
               </header>
               <div class="login-info">
                  @if(!empty($item->cover_letter))
                  <p>{{$item->cover_letter}}</p>
                  @else
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-nine">Add cover letter <i class="bi bi-plus-circle"></i></button></div>
                  @endif
               </div>
               <div class="modal fade about-modal" id="exampleModalCenter-nine" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-look" role="document">
                     <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                           <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Cover letter</h3>
                           <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form method="POST"  action="{{route('CandidateSkills')}}">
                              @csrf
                                 <div class="row">
                                  <div class="col-12">
                                      <p>A good cover letter can greatly increase your chances of standing out to recruiters.</p>
                                  </div>
                                 <div class="col-12">
                                    @if(!empty($item))
                                    <textarea type="text" name="cover_centent" class="w-100 letter-area">{{$item->cover_letter}}</textarea>
                                    @else
                                    <textarea type="text" name="cover_centent" class="w-100 letter-area"></textarea>
                                    @endif
            
                                    <p class="approach-para"><strong>8000</strong> characters remaining</p>
                                 </div>
                              </div>
                           </div>
                           <div class="modal-footer pt-0">
                              <button type="button" class="btn" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Personal Statement
                     @if(!empty($item->personal_statement))
                     <button type="button" data-toggle="modal" data-target="#exampleModalCenter-ten">Edit <i class="bi bi-pencil-square edit-icon"></i></button>
                     @endif
                  </h2>
               </header>
               <div class="login-info">
                  @if(!empty($item->personal_statement))
                  <p>{{$item->personal_statement}}</p>
                  @else
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-ten">Add personal statement <i class="bi bi-plus-circle"></i></button></div>
                  @endif
               </div>
                      <div class="modal fade about-modal" id="exampleModalCenter-ten" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-look" role="document">
                     <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                           <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Personal Statement</h3>
                           <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form method="POST"  action="{{route('CandidateSkills')}}">
                              @csrf
                                 <div class="row">
                                  <div class="col-12">
                                      <p>Summarise the key things a recruiter should know about you in a few lines. Highlight any particularly impressive achievements, skills or qualifications.
           
                                   </p>
                                  </div>
                                 <div class="col-12">
                                    @if(!empty($item))
                                    <textarea type="text" name="personal_statement" class="w-100 letter-area">{{$item->personal_statement}}</textarea>
                                    @else
                                    <textarea type="text" name="personal_statement" class="w-100 letter-area"></textarea>
                                    @endif
                                    <p class="approach-para"><strong>2000</strong> characters remaining</p>
                                 </div>
                              </div>
                           </div>
                           <div class="modal-footer pt-0">
                              
                              <button type="button" class="btn" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Car &amp; driving license
                     @if(!empty($item))
                     @if(!empty($item->car_driving_license == 'Yes' || $item->is_car == 'Yes'))
                     <button type="button" data-toggle="modal" data-target="#exampleModalCenter-eleven">Edit <i class="bi bi-pencil-square edit-icon"></i></button>
                     @endif
                     @endif
                  </h2>
               </header>
               <div class="login-info">
                  @if(!empty($item))
                  @if(!empty($item->car_driving_license == 'Yes' || $item->is_car == 'Yes'))
               <div class="preview_preview__pcWbN">
                  <strong>Licence</strong><br>
                  @if(!empty($item->car_driving_license == 'Yes'))
                  <p>I have a full licence and am eligible to drive in the UK</p>
                  @endif
               </div> 
               <div class="preview_preview__pcWbN">
                  <strong>Car</strong>
                  @if(!empty($item->is_car == 'Yes'))
                  <p>I have a car</p>
                  @endif
               </div>
               @endif
               @else
               @endif
               <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-eleven">Add car &amp; driving license <i class="bi bi-plus-circle"></i></button></div>
            </div>
               </div>
                       <div class="modal fade about-modal" id="exampleModalCenter-eleven" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-look" role="document">
                     <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                           <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Car and driving license</h3>
                           <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body pb-1">
                           <form method="POST"  action="{{route('CandidateSkills')}}">
                              @csrf
                              <div class="row">
                                 <div class="col-12">
                                    <label class="font-weight-bold mb-2">I have a full license and am eligible to drive in the UK</label>
                                 </div>
                                 <div class="col-12">
                                    <label class="mr-4">
                                    <input type="radio" name="driving" class="mb-0" value="Yes" @if(!empty($item)) {{!empty($item->car_driving_license == 'Yes') ? 'checked' : ''}} @endif>
                                    Yes
                                    </label>
                                    <label>
                                    <input type="radio" name="driving" class="mb-0" value="No"  @if(!empty($item)) {{!empty($item->car_driving_license == 'No') ? 'checked' : ''}} @endif>
                                    No
                                    </label>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <label class="font-weight-bold mb-2">I have a car</label>
                                 </div>
                                 <div class="col-12">
                                    <label class="mr-4">
                                    <input type="radio" name="is_car" class="mb-0"  value="Yes"  @if(!empty($item)) {{!empty($item->is_car == 'Yes') ? 'checked' : ''}} @endif> 
                                    Yes
                                    </label>
                                    <label>
                                    <input type="radio" name="is_car" class="mb-0"  value="No"  @if(!empty($item)) {{!empty($item->is_car == 'No') ? 'checked' : ''}} @endif>
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
         </div>
      </div>
   </div>
</section>
<script>
$(document).ready(function() {
   // $('.current-location').show();
   // $(".EditButtonModal").click(function(){
   //    $('.current-location').hide();
   // });
   $("#candidate_about").validate({
      errorClass: "error fail-alert",
      validClass: "valid success-alert",
         rules: {
            last_name : {
                  required: true,
                  minlength: 3
                   },
            first_name:{
                  required: true,
                  minlength: 3
                  },
            mobile:{
                  required: true,
                  number: true,
                  minlength: 10,
                  maxlength:10
            },
      },
         messages : {
            last_name: {
            minlength: "Last Name should be at least 3 characters",
             },
            first_name: {
            minlength: " First Name should be at least 3 characters",
             },
            mobile: {
               number: "Please enter your age as a numerical value",
             }
      }
   });

   
   $('select[name="country"]').change(function(e) {
            e.preventDefault();
           var country_id = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('show.state') }}",
                data: {
                    'country_id': country_id,
                },
                success: function(response) {
                    console.log(response);
                    $('.state').html(response);
                }
            });
        });


        $('select[name="state"]').change(function(e) {
            e.preventDefault();
            var state_id = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('show.city') }}",
                data: {
                    'state_id': state_id,
                },
                success: function(response) {
                    console.log(response);
                    $('.city').html(response);
                }
            });
        });
   });
</script>
<x-js></x-js>
@stop