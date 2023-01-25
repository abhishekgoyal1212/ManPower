<div class="card candidate-preview dote-card">
   <header>
      <h2 class="mb-0">Work Experience
      </h2>
   </header>

   <div class="login-info exprience_find">
      @foreach($candidate_exprience as $condidate)
   <ul class="show_data">
      <h4 class="job_data">{{$condidate->job_title}}</h4>
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
                        <option value="0">Year</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option></select>
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

