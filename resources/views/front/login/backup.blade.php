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
                  <h3>Full Name</h3>
                  <span><i class="fa fa-envelope-o" aria-hidden="true"></i>Email I'd</span>
                  <span class="login-preview">FN</span>
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
                           <form>
                              <div class="row">
                                 <div class="col">
                                    <label class="d-block font-weight-bold">First name</label>
                                    <input type="text" name="forname" class="w-100" >
                                 </div>
                                 <div class="col">
                                    <label class="d-block font-weight-bold">Last name</label>
                                    <input type="text" name="surname" class="w-100">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    <label class="d-block font-weight-bold">Phone number</label>
                                    <input type="text" name="surname" class="w-100">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="edit-location">
                                       <div class="location-title">
                                          <h4 class="mb-0">Your current location</h4>
                                          <button type="button" class="EditButtonModal">Edit <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                       </div>
                                       <div class="toggle-location">
                                          <div>
                                             <label class="d-block font-weight-bold">Country</label>
                                             <select class="w-100">
                                                <option>United Kingdom</option>
                                                <option>Ireland</option>
                                                <option>Afghanistan</option>
                                                <option>Akrotiri</option>
                                                <option>Albania</option>
                                                <option>Algeria</option>
                                                <option>Andorra</option>
                                                <option>Angola</option>
                                                <option>Anguilla</option>
                                                <option>Antigua and Barbuda</option>
                                                <option>Argentina</option>
                                                <option>Armenia</option>
                                                <option>Aruba</option>
                                                <option>Australia</option>
                                                <option>Austria</option>
                                                <option>Azerbaijan</option>
                                                <option>Bahamas</option>
                                                <option>Bahrain</option>
                                                <option>Bangladesh</option>
                                                <option>Barbados</option>
                                             </select>
                                          </div>
                                          <div>
                                             <label class="d-block font-weight-bold">Town</label>
                                             <input type="text" name="surname" class="w-100">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary">Save changes</button>
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
                  <h2 class="mb-0">CV</h2>
               </header>
               <div class="login-info">
                  <p>Upload a new CV, or use our CV builder to build one for you. To apply for jobs, you’ll need a CV.</p>
               </div>
            </div>

            @include('front.CondidateProfile.experience')


            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Work Experience
                  </h2>
               </header>

               <div class="login-info">
                  @foreach($candidate_exprience as $condidate)
               <ul>
                  <h4 class="title">{{$condidate->job_title}}</h4>
                  <span class="company">{{$condidate->company}}</span><br>
                  <span class="from_year">{{$condidate->from_year}}  {{$condidate->from_to_year}}</span>
                  <div class="text-right" class=""><button type="button" data-toggle="modal" data-target="#exampleModalCenter-five" data-id="{{$condidate->id}}" job="{{$condidate->job_title}}" company="{{$condidate->company}}" 
                     from_month="{{$condidate->from_month}}"  from_year="{{$condidate->from_year}}"   
                     from_to_month="{{$condidate->from_to_month}}" from_to_year="{{$condidate->from_to_year}}" content="{{$condidate->content}}" class="condidate_data">Edit<i class="bi bi-plus-circle"></i>
                  </button><br>
                  <button class="exprience_delete" exprience-delete-id="{{$condidate->id}}">Delete</button>
                 </div>
               </ul>
                  @endforeach
               </div>

               <div class="login-info">
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-five">Add work experience <i class="bi bi-plus-circle"></i></button></div>
               </div>
               <div class="modal fade about-modal" id="exampleModalCenter-five" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-look" role="document">
                     <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                           <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Work experience</h3>
                           <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form id="form-create" action="{{route('CandidateExperience')}}">
                              <div class="row">
                                 <div class="col-12">
                                    <label class="d-block font-weight-bold">Job title</label>
                                    <input type="text" name="work_job_title" class="w-100 job_title">
                                    <input type="hidden" name="hidden_exe_id" value="" class="hidden_exe_id">
                                    <span class="job_title_err invalid-feedback" style="display: none"></span>
                                 </div>
                                 <div class="col-12">
                                    <label class="d-block font-weight-bold">Company</label>
                                    <input type="text" name="company" class="w-100 job_company">
                                    <span class="job_company_err invalid-feedback" style="display: none"></span>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-6 col-md-3">
                                  <label class="font-weight-bold">From Month</label>
                                    <select class="mb-1 job_month" name="from_month" >
                                    <option value="" selected disabled>Select Month</option>
                                       <option value="January" >January</option>
                                       <option value="Feburary" >Feburary</option>
                                       <option value="March" >March</option>
                                       <option value="April" >April</option>
                                       <option value="May" >May</option>
                                       <option value="June" >June</option>
                                       <option value="July" >July</option>
                                       <option value="August" >August</option>
                                       <option value="September" >September</option>
                                       <option value="October" >October</option>
                                       <option value="November" >November</option>
                                       <option value="December" >December</option>
                                    </select>
                                 </div>
                                 <div class="col-6 col-md-3">
                                  <label class="font-weight-bold">From Year</label>
                                  <select class="mb-1 job_year" name="from_year">
                                    <option value="" selected disabled>Select Year</option>
                                    <option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option></select>
                                    </select>
                                 </div>
                                 <div class="col-md-6 align-self-end">
                                  <label class="font-weight-bold"><input type="checkbox" name="present" value="Present" class="mr-1">I currently work here</label>
                                 </div>
                                 <span class="job_month_err invalid-feedback" style="display: none"></span>

                              </div>
                                   <div class="row">
                                 <div class="col-6 col-md-3">
                                  <label class="font-weight-bold">To Month</label>
                                  <select class="mb-1 job_to_month" name="from_to_month">
                                    <option value="" selected disabled>Select Month</option>
                                    <option value="Month">Month</option>
                                    <option value="January">January</option>
                                    <option value="Feburary">Feburary</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="1October">October</option>
                                    <option value="1November">November</option>
                                    <option value="1December">December</option>
                                 </select>
                                 </div>
                                 <div class="col-6 col-md-3">
                                  <label class="font-weight-bold">To Year</label>
                                  <select class="mb-1 job_to_year" name="from_to_year">
                                    <option value="" selected disabled>Select Year</option>
                                    <option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option></select>
                                    </select>
                                 </div>
                                 <span class="job_to_month_err invalid-feedback" style="display: none"></span>
                              </div>
                                 <div class="row">
                                 <div class="col-12">
                                    <label class="d-block font-weight-bold">What did you do there?</label>
                                    <textarea type="text" name="content" class="w-100 job_content"></textarea>
                                    <p class="approach-para"><strong>2000</strong> characters remaining</p>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn" data-dismiss="modal">Close</button>
                           <button type="button" class="btn mid-btn" data-dismiss="modal">Save and add another</button>
                           <button type="button" class="btn btn-primary" id="experience_save">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Qualifications</h2>
               </header>
               <div class="login-info">
                  <p>Your education makes your profile look strong.</p>
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-six" id="hide_form">Add qualification <i class="bi bi-plus-circle"></i></button></div>
               </div>
               <div class="modal fade about-modal" id="exampleModalCenter-six" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-look" role="document">
                     <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                           <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Qualifications</h3>
                           <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body pb-0">
                           <form>
                              <div class="form-group"><label for="type">Type</label>
                              <select class="form-control" name="qualificationValue" id="type">
                                 <option value="0" disabled="" selected>Select type</option>
                                 <option value="A-level">A-level</option>
                                 <option value="GCSE">GCSE</option>
                                 <option value="Masters Degree">Masters Degree</option>
                                 <option value="Other">Other</option>
                                 <option value="PhD">PhD</option>
                                 <option value="University degree">University degree</option>
                              </select>
                           </div>
                                 <div id="show_form">
                                       <div class="row">
                                          <div class="col-12" id="input_data">
                                             <label class="d-block font-weight-bold" >Name of university or college</label>
                                             <input type="text" name="work_job_title" class="w-100 job_title">
                                             <span class="job_title_err invalid-feedback" style="display: none"></span>
                                          </div>
                                          <div class="col-12" id="input_data1">
                                             <label class="d-block font-weight-bold" >School or college</label>
                                             <input type="text" name="work_job_title" class="w-100 job_title">
                                             <span class="job_title_err invalid-feedback" style="display: none"></span>
                                          </div>
                                          <div class="col-12" id="input_data2">
                                             <label class="d-block font-weight-bold" >Name of awarding body</label>
                                             <input type="text" name="work_job_title" class="w-100 job_title">
                                             <span class="job_title_err invalid-feedback" style="display: none"></span>
                                          </div>
                                       </div>
         
                                       <div class="row">
                                          <div class="col-6 col-md-3">
                                           <label class="font-weight-bold">From </label>
                                             <select class="mb-1 job_month" name="from_month" >
                                             </select>
                                          </div>
                                          <div class="col-6 col-md-3">
                                             <label class="font-weight-bold">To</label>
                                             <select class="mb-1 job_to_month" name="from_to_month">
                                            </select>
                                            </div>
                                       </div>
                                          <div class="row">
                                          <div class="col-6">
                                             <label class="d-block font-weight-bold">Subject</label>
                                             <input type="text" name="content" class="w-100 job_content">
                                          </div>
                                          <div class="col-6 col-md-3">
                                             <label class="font-weight-bold">Grade</label>
                                             <select class="mb-1 job_to_month" name="from_to_month">
                                            </select>
                                          </div>
                                          <div class="col-4">
                                             <input type="button" value="Add" name="content" class="w-100 job_content">   
                                          </div>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn" data-dismiss="modal" >Close</button>
                                          <button type="button" class="btn mid-btn" data-dismiss="modal">Save and add another</button>
                                          <button type="button" class="btn btn-primary" id="experience_save">Save</button>
                                       </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn close_btn" data-dismiss="modal">Close</button>
                                 </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Skills</h2>
               </header>
               <div class="login-info">
                  <p>Adding skills helps you come up higher in search results.</p>
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-seven">Add skills &amp; expertise <i class="bi bi-plus-circle"></i></button></div>
               </div>
               <div class="modal fade about-modal" id="exampleModalCenter-seven" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-look" role="document">
                     <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                           <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Skills &amp; expertise</h3>
                           <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body pb-0">
                           <form>
                              <div class="row">
                                 <div class="col-md-4">
                                    <label class="font-weight-bold">Your skills</label>
                                 </div>
                                 <div class="col-md-8 d-flex justify-content-between">
                                 <input type="text" name="" placeholder="Add a new skill and expertise" class="mr-3 mb-0">
                                   
                                   
                                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter-seven" class="w-25 text-left"><i class="bi bi-plus-circle"></i> Add </button>
                                    </div>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary">Save Changes</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Languages</h2>
               </header>
               <div class="login-info">
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-eight" class="">Add languages <i class="bi bi-plus-circle"></i></button></div>
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
                           <form>
                              <div class="row">
                                 
                                 <div class="col-12">
                                   
                                   
                                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter-seven" class="text-left add-languages"><i class="bi bi-plus-circle"></i> Add another language </button>
                                    </div>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                           <button type="button" class="btn btn-primary">Save Changes</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Cover letter</h2>
               </header>
               <div class="login-info">
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-nine">Add cover letter <i class="bi bi-plus-circle"></i></button></div>
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
                           <form>
                                 <div class="row">
                                  <div class="col-12">
                                      <p>A good cover letter can greatly increase your chances of standing out to recruiters.</p>
                                  </div>
                                 <div class="col-12">
                                    <textarea type="text" name="forname" class="w-100 letter-area"></textarea>
                                    <p class="approach-para"><strong>8000</strong> characters remaining</p>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer pt-0">
                           <button type="button" class="btn" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Personal Statement</h2>
               </header>
               <div class="login-info">
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-ten">Add personal statement <i class="bi bi-plus-circle"></i></button></div>
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
                           <form>
                                 <div class="row">
                                  <div class="col-12">
                                      <p>Summarise the key things a recruiter should know about you in a few lines. Highlight any particularly impressive achievements, skills or qualifications.
           
                                   </p>
                                  </div>
                                 <div class="col-12">
                                    <textarea type="text" name="forname" class="w-100 letter-area"></textarea>
                                    <p class="approach-para"><strong>2000</strong> characters remaining</p>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer pt-0">
                          
                           <button type="button" class="btn" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card candidate-preview dote-card">
               <header>
                  <h2 class="mb-0">Car &amp; driving license</h2>
               </header>
               <div class="login-info">
                  <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-eleven">Add car &amp; driving license <i class="bi bi-plus-circle"></i></button></div>
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
                           <form>
                              <div class="row">
                                 <div class="col-12">
                                    <label class="font-weight-bold mb-2">I have a full license and am eligible to drive in the UK</label>
                                 </div>
                                 <div class="col-12">
                                    <label class="mr-4">
                                    <input type="radio" name="" class="mb-0">
                                    Yes
                                    </label>
                                    <label>
                                    <input type="radio" name="" class="mb-0">
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
                                    <input type="radio" name="" class="mb-0">
                                    Yes
                                    </label>
                                    <label>
                                    <input type="radio" name="" class="mb-0">
                                    No
                                    </label>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer pt-0">
                           <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                           <button type="button" class="btn btn-primary">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<script>
            // Test
            $(document).ready(function() {
            $(".Demo_Toggle").click(function() {
                $(".Demo_Jobs").slideToggle("slow", function() {
                });
            });
        });
</script>
<script>
 $(document).ready(function() { 
   $("#salary_per").on('change',function(){
      var value = $(this).val();
      var salary = $("input[name=salary]").val();
      if(salary != "" && salary < 999 && value == 2){
         $("#invalid-feedback").text("Please enter at least £1,000 per annum.").css("display","block");
      }else if(salary < 4.30){
         $("#invalid-feedback").text("Please enter at least £4.30 per hour.").css("display","block");
      }
      else if(salary == ""){
         $("#invalid-feedback").text("Please enter your minimum salary/hourly rate.").css("display","block");
      }else if(!$.isNumeric(salary)){
         $("#invalid-feedback").text("Use numbers and point only.").css("display","block");
      }else{
         $("#invalid-feedback").text("").css("display","none");
      }
   });

   $("#add_location").on("click",function(){
      event.preventDefault();
      var location = $("select[name=location").val();
      $.ajax({
            url: "{{route('front.location')}}",
            type: 'POST',
            data: {
               "_token": "{{csrf_token()}}", location:location
            },
            success: $.proxy(function(data){
               if($.isEmptyObject(data.error || data.error_location)){
                  $(".invalid-feedback").text("").css("display","none");

               }else{
                  $(".invalid-feedback").text(data.error_location).css("display","block");
                printErrorMsg(data.error);
               }
            })
        }); 
        function printErrorMsg(msg){
         if(msg){
            $.each(msg,function(key,value){
               $('.'+key+'_err').text(value).css("display","block");
            });
         }
        }
   });
   $("#employment").on('change',function(){
       value = $(this).val();
       if(value == 'Full-time education' || value == 'Unemployed' || value == 0){
         $("#notice").html("").css("display",'none');
       }else{
         $("#notice").html("").append(`<div class="col-12"><label class="d-block font-weight-bold">Notice period</label></div><div class="col-md-6 my-2"><select name="notice_period"><option value="None specified">None specified</option><option value="1 week">1 week</option><option value="2 weeks">2 weeks</option><option value="3 weeks">3 weeks</option><option value="1 month">1 month</option><option value="2 months">2 months</option><option value="3 months">3 months</option><option value="6 months">6 months</option></select></div>`).css("display","block");
       }
   })
   $("#employments").on('change',function(){
      value = $(this).val();
      if(value == 'Full-time education' || value == 'Unemployed' || value == 0){
         $("#notices").html("").css("display",'none');
      }
   })
   $("#experience_save").on("click",function(event){
      event.preventDefault();
      var valid;
      valid = validateContact();
      if(valid){
      var job_title = $("input[name='work_job_title']").val(); 
      var company = $("input[name='company']").val(); 
      var content = $("textarea[name='content']").val(); 
      var from_month = $("select[name='from_month']").val(); 
      var from_year = $("select[name='from_year']").val(); 
      var from_to_month = $("select[name='from_to_month']").val(); 
      var from_to_year = $("select[name='from_to_year']").val(); 
      var present = $("input[name='present']:checked").val();
      var condidate_data = $("#form-create").attr("action");
      var exprience_id = $("input[name='hidden_exe_id']").val();
      $.ajax({
         url : condidate_data,
         type: 'POST',
         data: {
               "_token" : "{{csrf_token()}}", job_title:job_title,company:company,content:content,from_month:from_month,from_year:from_year,from_to_month:from_to_month,from_to_year:from_to_year,present:present,exprience_id:exprience_id
            },
            success: $.proxy(function(data){
               if(data.succes){
                  console.log(data.succes);
                  $(".title").val(data.succes.job_title);
                  $(".company").val(data.succes.company);
                  $(".from_year").val(data.succes.from_year+'-'+data.succes.from_to_year);
                  var id = $(".condidate_data").attr("data-id");
                  var job_title = $(".condidate_data").attr("job");
                  var company = $(".condidate_data").attr("company");
                  var from_month = $(".condidate_data").attr("from_month");
                  var from_year = $(".condidate_data").attr("from_year");
                  var  from_to_month = $(".condidate_data").attr("from_to_month");
                  var from_to_year = $(".condidate_data").attr("from_to_year");
                  var content = $(".condidate_data").attr("content");
                  $(".job_id").val(id);
                  $(".job_title").val(job_title);
                  $(".job_company").val(company);
                  $(".job_month").val(from_month);
                  $(".job_year").val(from_year);
                  $(".job_to_month").val(from_to_month);
                  $(".job_to_year").val(from_to_year);
                  $(".job_content").val(content);
                  
               }
            })
      });
      // function printData(msg){
      //    if(msg){
      //       $.each(msg,function(key,value){
      //          $('.'+key+'_data').text(value);
      //       });
      //    }
      // }
   }
   });
   function validateContact(){
      var today = new Date();
      var yyyy = today.getFullYear();
      var month = today.toLocaleString('default', { month: 'long' });
      var valid = true;
      // var from_month =  $(".job_month").val();
      // var from_year = $(".job_year").val();
      // var from_to_month = $(".job_to_month").val();
      // var from_to_year = $(".job_to_year").val();
      //  var check_current_month =   month+'/'+yyyy;
      //  var check_slect_month = from_month+'/'+from_year;

      if(!$(".job_title").val()){
         $(".job_title_err").text('Please enter a job title.').css("display","block");
      }else if(!$(".job_company").val()){
         $(".job_company_err").text('Please enter a company name.').css("display","block");
      }else if(!$(".job_year").val()){
         $(".job_month_err").text('Please enter the date you started this position.').css("display","block");
      }else if(!$(".job_month").val()){
         $(".job_month_err").text('Please enter the date you started this position.').css("display","block");
      }else if(!$(".job_to_month").val()){
         $(".job_to_month_err").text('Please enter the date you started this position.').css("display","block");
      }else if(!$(".job_to_year").val()){
         $(".job_to_month_err").text('Please enter the date you started this position.').css("display","block");
      }else{
         return valid;
      }
   }

   $(".condidate_data").on('click',function(){
      var id = $(this).attr("data-id");
      $(".hidden_exe_id").val(id);
      var job_title = $(this).attr("job");
      var company = $(this).attr("company");
      var from_month = $(this).attr("from_month");
      var from_year = $(this).attr("from_year");
      var  from_to_month = $(this).attr("from_to_month");
      var from_to_year = $(this).attr("from_to_year");
      var content = $(this).attr("content");
      $(".job_id").val(id);
      $(".job_title").val(job_title);
      $(".job_company").val(company);
      $(".job_month").val(from_month);
      $(".job_year").val(from_year);
      $(".job_to_month").val(from_to_month);
      $(".job_to_year").val(from_to_year);
      $(".job_content").val(content);
   });

   $(".modal").on("hidden.bs.modal", function() {
      $("#form-create")[0].reset();
      $(".invalid-feedback").css("display","none");
  });

  $(".exprience_delete").on('click',function(){
   var delete_data = $(this).attr("exprience-delete-id");
   var condidate_data = $("#form-create").attr("action");
   $.ajax({
         url : condidate_data,
         type: 'POST',
         data: {
               "_token" : "{{csrf_token()}}", delete_data:delete_data
            },
            success: $.proxy(function(data){
               if(data){
                  console.log(data)
                  window.location.replace("http://localhost/manpowernew/candidate-profile");
               }
            })
      });
  })
  $("#hide_form").on('click',function(){
   $("#show_form").hide();
  })
  $("#type").on("change",function(){
   var value = $(this).val();
   // alert(value);
   if(value == "A-level" || value == "GCSE"){
      $(".close_btn").hide();
      $("#input_data").hide();
      $("#input_data2").hide();
      $("#input_data1").show();
   }
   if(value == "Masters Degree" || value == "PhD" || value == "University degree"){
      $(".close_btn").hide();
      $("#input_data1").hide();
      $("#input_data2").hide();
      $("#input_data").show();
   }
   if(value == "Other"){
      $(".close_btn").hide();
      $("#input_data2").show();
      $("#input_data").hide();
      $("#input_data1").hide();
   }
   $("#show_form").show();
})
});
</script>
@stop