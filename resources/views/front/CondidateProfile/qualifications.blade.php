<div class="card candidate-preview dote-card">
    <header>
       <h2 class="mb-0">Qualifications</h2>
    </header>
    <div class="login-info exprience_find">
       @foreach($condidate_qualifications as $value)
       @php $json_data = json_decode($value->subject,true) @endphp
       <ul class="show_data"><h4 class="job_data">{{$value->qualification_type}}</h4>
          @if(!empty($value->school))
          <span class="company">{{$value->school}}</span><br>
          @endif
          @if(!empty($value->university))
          <span class="company">{{$value->university}}</span><br>
          @endif
          @if(!empty($value->awarding))
          <span class="company">{{$value->awarding}}</span><br>
          @endif
             <span class="from_year">{{$value->from_month}} - {{$value->to_year}}</span><br>
             @if(!empty($value->other_degree_grade))
             <span class="from_year">{{$json_data['subject']}}</span>(<span class="from_year">Grade:{{$value->other_degree_grade}}</span>)
             @else
             <span class="from_year">{{$json_data['subject']}}</span>
             @if(!empty($json_data['grade']))
             (<span class="from_year">Grade:{{$json_data['grade']}}</span>)
             @endif
             @endif
       <div class="text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter-six" data-id="{{$value->id}}"
          type_data="{{$value->qualification_type}}" @if(!empty($value->school)) sch_col_first="{{$value->school}}" @endif  
          @if(!empty($value->university)) sch_col_sec="{{$value->university}}" @endif  @if(!empty($value->awarding)) sch_col_third="{{$value->awarding}}" @endif      
          from_year="{{$value->from_month}}" from_to_year="{{$value->to_year}}"
          @if(!empty($value->other_degree_grade)) subject="{{$json_data['subject']}}"
          grade="{{$value->other_degree_grade}}" @else subject="{{$json_data['subject']}}"
          @if(!empty($json_data['grade']))
          grade="{{$json_data['grade']}}"
          @endif @endif  class="qualification_data">Edit<i class="bi bi-plus-circle"></i>
       </button><br>
       <button class="qualification_data_delete" qualification-delete-id="{{$value->id}}">Delete</button>
    </div>
    </ul>
    @endforeach
   





       </div>
    <div class="login-info">
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
                <form method="post" action="{{route('CandidateQualifications')}}" id="qulifaction_close">
                   @csrf
                   <input type="hidden"  name="qlifaction_edit" class="delete"   hidden>
                <div class="form-group"><label for="type">Type</label>
                   <select class="form-control qulifction_type type" name="qualificationValue">
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
                               <div class="col-12 " id="school_college">
                               <label class="d-block  font-weight-bold">School or college</label>
                                  <input type="text"  class="reset_qulification sch_col_first" name="school">
                               </div>
                               <div class="col-12 " id="university_college">
                               <label class="d-block  font-weight-bold">Name of University or College</label>
                                  <input type="text"  class="reset_qulification sch_col_sec" name="university">
                               </div>
                               <div class="col-12 " id="awarding_body"> 
                               <label class="d-block  font-weight-bold">Name of Awarding Body</label>
                                  <input type="text"  class="reset_qulification sch_col_third" name="awarding">
                               </div>
                            </div>

                            <div class="row">
                               <div class="col-6 col-md-3">
                                <label class="font-weight-bold">From </label>
                                  <select class="mb-1 job_month from_year" name="from_month" >
                                     <option value="0">Year</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option></select>
                               </div>
                               <div class="col-6 col-md-3">
                                  <label class="font-weight-bold">To</label>
                                  <select class="mb-1 job_to_month from_to_year" name="to_year">
                                     <option value="0">Year</option><option value="2026">2026</option><option value="2025">2025</option><option value="2024">2024</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option>
                                 </select>
                                 </div>
                            </div>
                               <div class="row">
                               <div class="col-6">
                                  <label class="d-block font-weight-bold">Subject</label>
                                  <input type="text" name="subject[subject]" class="w-100 job_content reset_qulification subject">
                               </div>
                               <div class="col-6 col-md-3" id="school_grade">
                                  <label class="font-weight-bold">Grade</label>
                                    <select class="mb-1 reset_qulification_select grade"  name="subject[grade]">
                                    <option value="" disabled selected>Select Grade</option>
                                       <option value="A*">A*</option>
                                       <option value="A">A</option>
                                       <option value="B">B</option>
                                       <option value="C">C</option>
                                       <option value="D">D</option>
                                       <option value="E">E</option>
                                    </select>
                                 </div>
                                 <div class="col-6 col-md-3" id="master_degree_phd">
                                  <label class="font-weight-bold">Grade</label>
                                    <select class="mb-1 reset_qulification_select grade"  name="subject[grade]">
                                    <option value="" disabled selected>Select Grade</option>
                                       <option value="Distinction">Distinction</option>
                                       <option value="Merit">Merit</option>
                                       <option value="Pass">Pass</option>
                                    </select>
                                 </div>
                                 <div class="col-6 col-md-3" id="university_degree">
                                  <label class="font-weight-bold">Grade</label>
                                    <select class="mb-1 reset_qulification_select grade"  name="subject[grade]">
                                    <option value="" disabled selected>Select Grade</option>
                                       <option value="First">First</option>
                                       <option value="2:1">2:1</option>
                                       <option value="2:2">2:2</option>
                                       <option value="Third">Third</option>
                                       <option value="Pass">Pass</option>
                                    </select>
                                 </div>
                                 <div class="col-6 col-md-3" id="other_degree">
                                  <label class="font-weight-bold">Grade(optional)</label>
                                    <input type="text" class="reset_qulification grade"  name="other_degree_grade">
                                 </div>
                                 <div class="col-6 col-md-3" id="gcse_grade">
                                  <label class="font-weight-bold">Grade</label>
                                    <select class="mb-1 reset_qulification_select grade"  name="subject[grade]">
                                    <option value="" disabled selected>Select Grade</option>
                                       <option value="A*">A*</option>
                                       <option value="A">A</option>
                                       <option value="B">B</option>
                                       <option value="C">C</option>
                                       <option value="D">D</option>
                                       <option value="E">E</option>
                                       <option value="F">F</option>
                                       <option value="G">G</option>
                                       <option value="9">9</option>
                                       <option value="8">8</option>
                                       <option value="7">7</option>
                                       <option value="6">6</option>
                                       <option value="5">5</option>
                                       <option value="4">4</option>
                                       <option value="3">3</option>
                                       <option value="2">2</option>
                                       <option value="1">1</option>
                                    </select>
                                 </div>
                            </div>
                            <div class="modal-footer">
                               <button type="button" class="btn" data-dismiss="modal" >Close</button>
                               <button type="button" class="btn mid-btn" data-dismiss="modal">Save and add another</button>
                               <button type="submit" class="btn btn-primary" id="experience_save">Save</button>
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