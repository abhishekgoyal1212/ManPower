<script>
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
         var salary = $("input[name=salary]").val();
         var value = $(this).val();
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
         value = $(this);
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
                     window.location.replace("http://localhost/manpowernew/candidate-profile");
                    $('.modal').modal('hide');
                  }
                  // if($.isEmptyObject(exprience_id)){
                  //    window.location.replace("http://localhost/manpowernew/candidate-profile");
                  //   $('.modal').modal('hide');
                  //  }
                  //  else{
                  //       var ver = $(".exprience_find").find("[data-id='" + exprience_id + "']");
                  //       ver.parent().parent().find(".job_data").html("").text(data.succes.job_title); 
                  //       ver.parent().parent().find(".company").html("").text(data.succes.company); 
                  //       ver.parent().parent().find(".from_year").html("").text(data.succes.from_year+' '+data.succes.from_to_year); 
                  //            $(".condidate_data").attr("data-id",data.succes.id); 
                  //            $(".hidden_exe_id").val(data.succes.id);
                  //            $(".condidate_data").attr("job",data.succes.job_title);
                  //            $(".condidate_data").attr("company",data.succes.company);
                  //            $(".condidate_data").attr("from_month",data.succes.from_month);
                  //            $(".condidate_data").attr("from_year",data.succes.from_year);
                  //            $(".condidate_data").attr("from_to_month",data.succes.from_to_month);
                  //            $(".condidate_data").attr("from_to_year",data.succes.from_to_year);
                  //            $(".condidate_data").attr("content",data.succes.content);
                  //            $(".job_id").val(data.succes.id);
                  //            $(".job_title").val(data.succes.job_title);
                  //            $(".job_company").val(data.succes.company);
                  //            $(".job_month").val(data.succes.from_month);
                  //            $(".job_year").val(data.succes.from_year);
                  //            $(".job_to_month").val(data.succes.from_to_month);
                  //            $(".job_to_year").val(data.succes.from_to_year);
                  //            $(".job_content").val(data.succes.content);
                  //          $('.modal').modal('hide');
                  //       }
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
   
      // $(".condidate_data").on('click',function(){
         $("body").on('click', '.condidate_data', function(){
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
   
      $("body").on('click', '.qualification_data', function(){
         var id = $(this).attr("data-id");
            $(".delete").val(id);
            var value = $(this).attr("type_data");
            var sch_col_first = $(this).attr("sch_col_first");
            var sch_col_sec = $(this).attr("sch_col_sec");
            var sch_col_third = $(this).attr("sch_col_third");
            var from_year = $(this).attr("from_year");
            var from_to_year = $(this).attr("from_to_year");
            var subject = $(this).attr("subject");
            var grade = $(this).attr("grade");
            $(".qlifi_id").val(id);
            $(".type").val(value);
            $(".sch_col_first").val(sch_col_first);
            $(".sch_col_sec").val(sch_col_sec);
            $(".sch_col_third").val(sch_col_third);
            $(".from_year").val(from_year);
            $(".from_to_year").val(from_to_year);
            $(".subject").val(subject);
            $(".reset_qulification_select").val(grade);
   
            matching(value);
               $(".close_btn").hide();
      $("#show_form").show();
           
      });
   
      $(".modal").on("hidden.bs.modal", function() {
         $("#form-create")[0].reset();
         $("#qulifaction_close")[0].reset();
         $(".invalid-feedback").css("display","none");
     });
   
   //   $(".exprience_delete").on('click',function(event){
      $("body").on('click','.exprience_delete',function(){
      event.preventDefault();
      var value = $(this);
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
                     // alert(value.attr("class"));
                     value.parent().parent().remove();
                  }
               })
         });
     })
   
     $("body").on('click','.qualification_data_delete',function(){
   
      event.preventDefault();
      var value = $(this);
      var delete_data = $(this).attr("qualification-delete-id");
      var condidate_data = $("#form-create").attr("action");
      $.ajax({
            url : "{{route('CandidateQualifications')}}",
            type: 'POST',
            data: {
                  "_token" : "{{csrf_token()}}", delete_data:delete_data
               },
               success: $.proxy(function(data){
                  if(data){
                     // alert(value.attr("class"));
                     value.parent().parent().remove();
                  }
               })
         });
     })
   
     $("#hide_form").on('click',function(){
      $("#show_form").hide();
     })
     $(".qulifction_type").on("change",function(){
        
      $(".reset_qulification").val(" ");
      $(".reset_qulification_select").val(" ");
    
      var value = $(this).val();
         matching(value);
      $(".close_btn").hide();
      $("#show_form").show();
   
   });


   function matching(value = ""){
      if(value == "A-level")
      {
                  $('#school_college').show();
                  $('#school_grade').show();
                  $('#university_college').hide();
                  $('#awarding_body').hide();
                  $('#gcse_grade').hide();
                  $('#university_degree').hide();
                  $('#other_degree').hide();
                  $('#master_degree_phd').hide();
   
             }
             else if(value == "GCSE")
             {
                  $('#school_college').show();
                  $('#university_college').hide();
                  $('#awarding_body').hide();
                  $('#gcse_grade').show();
                  $('#school_grade').hide();
                  $('#university_degree').hide();
                  $('#other_degree').hide();
                  $('#master_degree_phd').hide();
             }
             else if(value == "Masters Degree" || value == "PhD")
               {
                  $('#university_college').show();
                  $('#school_college').hide();
                  $('#awarding_body').hide();
                  $('#master_degree_phd').show();
                  $('#school_grade').hide();
                  $('#university_degree').hide();
                  $('#other_degree').hide();
                  $('#gcse_grade').hide();
                  
                  
               }
               else if(value == "University degree")
               {
                  $('#university_college').show();
                  $('#school_college').hide();
                  $('#awarding_body').hide();
                  $('#university_degree').show();
                  $('#school_grade').hide();
                  $('#master_degree_phd').hide();
                  $('#other_degree').hide();
                  $('#gcse_grade').hide();
               }
               else
               {
                  $('#awarding_body').show();
                  $('#school_college').hide();
                  $('#university_college').hide();
                  $('#other_degree').show();
                  $('#school_grade').hide();
                  $('#university_degree').hide();
                  $('#master_degree_phd').hide();
                  $('#gcse_grade').hide();
                  
               }
   }
   var i = $("#end_key").val();
   if(i > 0){
      ++i
      var key_select = $('.key_select').attr('name',"languages["+ i +"][language]");
      var key = $('.key_type').attr('name',"languages["+ i +"][type]");
   }
   $("#dynamic-ar").click(function(){
      ++i;
      $("#dynamicAddRemove").append('<div class="col-lg-4"><select class="form-control edit_formGroup__select__Ww4_W" name="languages['+ i +'][language]"> <option value="" selected disabled>Select Languages</option><option value="Toishanese">Toishanese</option><option value="Tongan">Tongan</option><option value="Trukese">Trukese</option><option value="Turkish">Turkish</option><option value="Turkmen">Turkmen</option><option value="Ukranian">Ukranian</option><option value="Urdu">Urdu</option><option value="Uzbek">Uzbek</option></select></div> <div class="col-lg-8"><div class="form-group form-check-inline"><label class="form-label edit_formGroup__radioInput__SPc1d"><input class="form-check-input" type="radio" name="languages['+ i +'][type]" value="Basic" checked=""><span>Basic</span></label></div><div class="form-group form-check-inline"><label class="form-label edit_formGroup__radioInput__SPc1d"><input class="form-check-input" type="radio" name="languages['+ i +'][type]" value="Intermediate"><span>Intermediate</span></label></div><div class="form-group form-check-inline"><label class="form-label edit_formGroup__radioInput__SPc1d"><input class="form-check-input" type="radio" name="languages['+ i +'][type]" value="Fluent"><span>Fluent</span></label></div><button class="edit_deleteLanguage__h2Ubj btn btn-inline remove_button" type="button" aria-label="Remove language">Remove</button></div>')
   })
   $("body").on('click','.remove_button',function(){
      $(this).parent().prev().remove();
      $(this).parent().remove();
   });
   });
   </script>