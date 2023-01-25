@extends('admin/index')
@section('title','Home Page')
@section('content')

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Home Page</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>

						<li class="breadcrumb-item active">Home Page</li>

					</ol>

				</div>

			</div>

		</div>

	</section>
   {{-- Banner Section First --}}
<section class="content">
    <div class="container-fluid">
       <div class="row">
          <!-- left column -->
          <div class="col-md-12">
             <!-- general form elements -->
             <div class="card">
                <div class="card-header">
                   <h3 class="card-title">Banner Section First</h3>
                </div>
                <!-- form start -->
                
                <form role="form" method="post" action="{{route('admin.page.homeSave',['banner_first'])}}" enctype="multipart/form-data">
                    @csrf
                   <div class="card-body">
                      <div class="category-img-section">
                         <label for="icon">Background Image</label>
                         <div class="row category-img-block0">
                            <div class="col-md-10">
                               <div class="form-group">
                                  <div class="input-group">
                                     <div class="custom-file">
                                        <input type="file" name="banner_image" class="custom-file-input" class="icon" onchange="image_show(this);">
                                        <label class="custom-file-label" for="icon">Choose file</label>
                                       </div>
                                    </div>
                                    <img src="{{$all_data[0]['images']}}" class="icon" alt="Select Image">
                                  @error('banner_image')
                                  <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                              @enderror
                               </div>
                               <div class="form-group">
                                  <label for="banner_heading">heading</label>
                                  <input class="form-control" id="banner_heading" name="banner_heading" placeholder="Heading" value="{{old('banner_heading',$all_data[0]['heading'])}}">
                                  @error('banner_heading')
										<div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                               </div>
                               <div class="form-group">
                                  <label for="banner_content">Content</label>
                                  <input class="form-control" name="banner_content" placeholder="Heading" value="{{old('banner_content',$all_data[0]['content'])}}">
                                  @error('banner_content')
										<div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                               </div>
                               <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <div class="input-group d-block">
                                       <label for="banner_text">Button text</label>
                                       <input class="form-control" name="banner[text]" placeholder="Heading" value="{{old("banner.text",$json_data[0]['text'])}}">
                                       </div>
                                       @error('banner.text')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                       <div class="input-group d-block">
                                       <label for="banner_link">Button link</label>
                                       <input class="form-control" name="banner[link]" placeholder="Heading" value="{{old("banner.link",$json_data[0]['link'])}}">
                                    </div>
                                    @error('banner.link')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="banner_link1">Icon text first </label>
                                       <input class="form-control" name="banner[link1]" placeholder="Heading" value="{{old("banner.link1",$json_data[0]['link1'])}}">
                                       @error('banner.link1')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="banner_link2">Icon text secend</label>
                                       <input class="form-control" name="banner[link2]" placeholder="Heading" value="{{old('banner.link2',$json_data[0]['link2'])}}">
                                       @error('banner.link2')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                   @enderror
                                    </div>

                               </div>                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="banner_link3"> Icon text third</label>
                                        <input class="form-control" name="banner[link3]" placeholder="Heading" value="{{old('banner.link3',$json_data[0]['link3'])}}">
                                        @error('banner.link3')
										<div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                     </div>
                                   
                                </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
</section>
   {{-- Banner Section Secend --}}
<section class="content">
    <div class="container-fluid">
       <div class="row">
          <!-- left column -->
          <div class="col-md-12">
             <!-- general form elements -->
             <div class="card">
                <div class="card-header">
                   <h3 class="card-title">Banner Section Secend</h3>
                </div>
                <!-- form start -->
                <form role="form" method="post" action="{{route('admin.page.homeSave',['banner_secend'])}}" enctype="multipart/form-data">
                  @csrf
                   <div class="card-body">
                      <div class="category-img-section">
                         <label for="icon">Background Image</label>
                         <div class="row category-img-block0">
                            <div class="col-md-10">
                               <div class="form-group">
                                  <div class="input-group">
                                     <div class="custom-file">
                                        <input type="file" name="banner_image1" class="custom-file-input" class="icon1" onchange="image_show(this);">
                                        <label class="custom-file-label" for="icon">Choose file</label>
                                     </div>
                                     @error('banner_image1')
                                     <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                     @enderror
                                  </div>
                                  <img src="{{$all_data[1]['images']}}" class="icon icon1" alt="Select Image">
                               </div>
                               <div class="form-group">
                                  <label for="banner_heading1">heading</label>
                                  <input class="form-control" id="banner_heading1" name="banner_heading1" placeholder="Heading" value="{{old('banner_heading1',$all_data[1]['heading'])}}">
                               @error('banner_heading1')
                               <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                               @enderror
                               </div>
                               <div class="form-group">
                                  <label for="banner_content1">Content</label>
                                  <input class="form-control" name="banner_content1[1]" placeholder="Heading" value="{{old('banner_content1.1',$json_data_content[1][1])}}">
                               @error('banner_content1.1')
										<div class="form-valid-error" style="color: red;">{{ $message }}</div>
                               @enderror
                               </div> 
                               <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <div class="input-group d-block">
                                       <label for="banner">Button text</label>
                                       <input class="form-control" name="banner1[text]" placeholder="Heading" value="{{old('banner1.text',$json_data[1]['text'])}}">
                                       </div>
                                       @error('banner1.text')
										         <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                    </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="banner[link]">Button link</label>
                                       <input class="form-control" name="banner1[link]" placeholder="Heading" value="{{old('banner1.link',$json_data[1]['link'])}}">
                                       @error('banner1.link')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                             @enderror
                                    </div>
                                   
                               </div>
                               </div>
                                    <div class="form-group">
                                        <label for="banner_content1">Content</label>
                                        <input class="form-control" name="banner_content1[2]" placeholder="Heading" value="{{old('banner_content1.2',$json_data_content[1][2])}}">
                                        @error('banner_content1.2')
                                        <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                              @enderror
                                    </div>
                                    <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="banner]">Icon text first</label>
                                       <input class="form-control" name="banner1[link2]" placeholder="Heading" value="{{old('banner1.link2',$json_data[1]['link2'])}}">
                                       @error('banner1.link2')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                             @enderror
                                    </div>
                               </div>                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="banner.link_secend1"> Icon text secend</label>
                                        <input class="form-control" name="banner1[link3]" placeholder="Heading" value="{{old('banner1.link3',$json_data[1]['link3'])}}">
                                        @error('banner1.link3')
                                        <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                              @enderror
                                     </div>
                                    
                                </div>
                                    </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
</section>
   {{-- Job Section  --}}
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Section First Search Job</h3>
               </div>
               <!-- form start -->
               <form role="form" method="post" action="{{route('admin.page.homeSave',['job_search'])}}" enctype="multipart/form-data">
                 @csrf
                  <div class="card-body">
                     <div class="category-img-section">
                        <div class="row category-img-block0">
                           <div class="col-md-10">
                                 <div class="form-group">
                                    <label for="job_heading">Main heading</label>
                                    <input class="form-control" id="job_heading" name="job_heading[main]" placeholder="Heading" value="{{old('job_heading.main',$json_data_heading[6]['main'])}}">
                                 @error('job_heading.main')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                 @enderror
                                 </div>
                              <div class="row">
                                 <div class="col">
                                    <div class="form-group">
                                       <label for="job_heading">heading</label>
                                       <input class="form-control" id="job_heading" name="job_heading[first]" placeholder="Heading" value="{{old('job_heading.first',$json_data_heading[6]['first'])}}">
                                    @error('job_heading.first')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                    </div>
                                 </div>
                                 <div class="col">
                                    <div class="form-group">
                                       <label for="job_heading['job']">heading</label>
                                       <input class="form-control" id="job_heading" name="job_heading[secend]" placeholder="Heading" value="{{old('job_heading.secend',$json_data_heading[6]['secend'])}}">
                                    @error('job_heading.secend')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    <div class="form-group">    
                                       <label for="banner_heading3">Job Sector</label>
                                        <select name="job_sector[]" class="form-control" multiple placeholder="Select Or Add Job Sector" value="">
                                       @if(!empty($json_sector[6]))
                                          @if(old('job_sector'))
                                          @foreach(old('job_sector') as $item)
                                          <option value="{{$item}}" {{in_array($item,old('job_sector')) ? 'selected' : '' }}>{{$item}}</option>
                                          @endforeach
                                          @else
                                          @foreach ($json_sector[6] as $item)
                                          <option value="{{$item}}" {{$item ? 'selected' : '' }}>{{$item}}</option>
                                          @endforeach
                                          @endif
                                       @endif
                                       </select>
                                       @error('job_sector')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="col">
                                    <div class="form-group">     
                                       <label for="banner_heading3">Job Location</label>
                                       <select name="job_location[]" class="form-control select_data" multiple placeholder="Select Job Location">
                                          @foreach($countries as $value){
                                             @if(old('job_location'))
                                             <option value="{{$value->id}}" {{in_array($value->id,old('job_location')) ? 'selected' : ''}}>{{$value->name}}</option>
                                             @elseif(!empty($json_location)) 
                                          <option value="{{$value->id}}" {{in_array($value->id,$json_location[6]) ? 'selected' : ''}}>{{$value->name}}</option>
                                          @else
                                          <option value="{{$value->id}}">{{$value->name}}</option>
                                          @endif
                                          }
                                          @endforeach
                                       </select>
                                       @error('job_location')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                      @enderror
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    <div class="form-group">
                                       <label for="job_button">Button Text</label>
                                       <input class="form-control" id="job_button" name="job_button[text]" placeholder="Heading" value="{{old('job_button.text',$json_data[6]['text'])}}">
                                    @error('job_button.text')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                    </div>
                                 </div>
                                 <div class="col">
                                    <div class="form-group">
                                       <label for="job_button['job']">Button Link</label>
                                       <input class="form-control" id="job_button" name="job_button[link]" placeholder="Heading" value="{{old('job_button.link',$json_data[6]['link'])}}">
                                    @error('job_button.link')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    <div class="form-group">
                                       <label for="job_button">Button Text</label>
                                       <input class="form-control" id="job_button" name="job_button[text1]" placeholder="Heading" value="{{old('job_button.text1',$json_data[6]['text1'])}}">
                                    @error('job_button.text1')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                    </div>
                                 </div>
                                 <div class="col">
                                    <div class="form-group">
                                       <label for="job_button['job']">Button Link</label>
                                       <input class="form-control" id="job_button" name="job_button[link1]" placeholder="Heading" value="{{old('job_button.link1',$json_data[6]['link1'])}}">
                                    @error('job_button.link1')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <div class="card-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
</section>
   {{-- Trending jobs Section  --}}
<section class="content">
    <div class="container-fluid">
       <div class="row">
          <!-- left column -->
          <div class="col-md-12">
             <!-- general form elements -->
             <div class="card">
                <div class="card-header">
                   <h3 class="card-title">Section Secend Trending jobs</h3>
                </div>
                <!-- form start -->
                <form role="form" method="post" action="{{route('admin.page.homeSave',['trending_section'])}}" enctype="multipart/form-data">
                  @csrf
                   <div class="card-body">
                      <div class="category-img-section">
                         <div class="row category-img-block0">
                            <div class="col-md-10">
                               <div class="form-group">
                                  <label for="banner_heading3">heading</label>
                                  <input class="form-control" id="banner_heading3" name="banner_heading3" placeholder="Heading" value="{{old('banner_heading3',$all_data[2]['heading'])}}">
                                  @error('banner_heading3')
                                  <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                 @enderror
                               </div>
                               <div class="form-group">    
                                 <label for="banner_heading3">Add Trending jobs </label>
                                  <select name="trading_jobs[]" class="form-control" multiple placeholder="Select Or Add Job Sector" value="">
                                    @if(!empty($json_sector[2]))
                                          @if(old('trading_jobs'))
                                          @foreach(old('trading_jobs') as $item)
                                          <option value="{{$item}}" {{in_array($item,old('trading_jobs')) ? 'selected' : '' }}>{{$item}}</option>
                                          @endforeach
                                          @else
                                          @foreach ($json_sector[2] as $item)
                                          <option value="{{$item}}" {{$item ? 'selected' : '' }}>{{$item}}</option>
                                          @endforeach
                                          @endif
                                       @endif
                                 </select>
                                 @error('trading_jobs')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                 @enderror
                              </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                </form>
             </div>
          </div>
       </div>
</section>
   {{-- Secarch Location Sector Section  --}}
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Section Third Secarch Location Sector</h3>
               </div>
               <!-- form start -->
               <form role="form" method="post" action="{{route('admin.page.homeSave',['secarch_location'])}}" enctype="multipart/form-data">
                 @csrf
                  <div class="card-body">
                     <div class="category-img-section">
                        <div class="row category-img-block0">
                           <div class="col-md-12">
                           <div class="row">
                              <div class="col">
                                 <div class="col-12 px-0">
                                    <div class="form-group">
                                       <label for="trending_hed">Sector Heading</label>
                                       <input class="form-control" id="trending_hed" name="trending_hed[heading]" placeholder="Heading" value="{{old('trending_hed.heading',$json_data_heading[7]['heading'])}}">
                                       @error('trending_hed.heading')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                      @enderror
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-6">
                                      <div class="form-group">
                                       <label>Image</label>
                                       <div class="input-group">
                                          <div class="custom-file">
                                             <input type="file" name="trending[image]" class="custom-file-input" class="icon6" onchange="image_show(this);" id="icon">
                                             <label class="custom-file-label" for="icon">Choose file</label>
                                          </div>
                                       </div>
                                       <img src="{{$all_data[7]['json_image'][0]}}" class="icon" alt="Select Image">   
                                       @error('trending.image')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                      </div>
                                   </div>
                                   <div class="col-6">
                                      <div class="form-group">
                                         <label for="trending_text">Text</label>
                                         <input class="form-control" id="trending_text" name="trending_text[text]" placeholder="Heading" value="{{old('trending_text.text',$json_data[7]['text'])}}">
                                         @error('trending_text.text')
                                         <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                        @enderror
                                      </div>
                                   </div>
                                </div>
                                <div class="row">
                                   <div class="col-6">
                                    <div class="form-group">
                                       <label>Image</label>
                                       <div class="input-group">
                                          <div class="custom-file">
                                             <input type="file" name="trending[image2]" class="custom-file-input" class="icon1" onchange="image_show(this);">
                                             <label class="custom-file-label" for="icon">Choose file</label>
                                          </div>
                                       </div>   
                                       <img src="{{$all_data[7]['json_image'][1]}}" class="icon" alt="Select Image">   
                                       @error('trending.image2')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                      </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                       <label for="trending_text">Text</label>
                                       <input class="form-control" id="trending_text" name="trending_text[text1]" placeholder="Heading" value="{{old('trending_text.text1',$json_data[7]['text1'])}}">
                                       @error('trending_text.text1')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                      @enderror
                                    </div>
                                  </div>
                               </div>
                              <div class="row">
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label>Image</label>
                                       <div class="input-group">
                                          <div class="custom-file">
                                             <input type="file" name="trending[image3]" class="custom-file-input" class="icon1" onchange="image_show(this);">
                                             <label class="custom-file-label" for="icon">Choose file</label>
                                          </div>
                                       </div>   
                                       <img src="{{$all_data[7]['json_image'][2]}}" class="icon" alt="Select Image">   
                                       @error('trending.image3')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                      </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label for="trending_text">Text</label>
                                       <input class="form-control" id="trending_text" name="trending_text[text2]" placeholder="Heading" value="{{old('trending_text.text2',$json_data[7]['text2'])}}">
                                       @error('trending_text.text2')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                      @enderror
                                    </div>
                              </div>
                              </div>
                              <div class="row">
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label>Image</label>
                                       <div class="input-group">
                                          <div class="custom-file">
                                             <input type="file" name="trending[image4]" class="custom-file-input" class="icon1" onchange="image_show(this);">
                                             <label class="custom-file-label" for="icon">Choose file</label>
                                          </div>
                                       </div>   
                                       <img src="{{$all_data[7]['json_image'][3]}}" class="icon" alt="Select Image">   
                                       @error('trending.image4')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                      </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label for="trending_text">Text</label>
                                       <input class="form-control" id="trending_text" name="trending_text[text3]" placeholder="Heading" value="{{old('trending_text.text3',$json_data[7]['text3'])}}">
                                       @error('trending_text.text3')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                      @enderror
                                    </div>
                                 </div>
                              </div>
                              
                            </div>
                            <div class="col" style="padding-left: 50px">
                              <div class="col-12 px-0">
                                 <div class="form-group">
                                    <label for="trending_hed">Location Heading</label>
                                    <input class="form-control" id="trending_hed" name="trending_hed[heading1]" placeholder="Heading" value="{{old('trending_hed.heading1',$json_data_heading[7]['heading1'])}}">
                                    @error('trending_hed.heading1')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                   @enderror
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label>Image</label>
                                       <div class="input-group">
                                          <div class="custom-file">
                                             <input type="file" name="trending[image5]" class="custom-file-input" class="icon1" onchange="image_show(this);">
                                             <label class="custom-file-label" for="icon">Choose file</label>
                                          </div>
                                       </div>   
                                       <img src="{{$all_data[7]['json_image'][4]}}" class="icon" alt="Select Image">   
                                       @error('trending.image5')
                                       <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                      </div>
                                </div>
                                <div class="col-6">
                                 <div class="form-group">
                                    <label for="trending_text">Text</label>
                                    <input class="form-control" id="trending_text" name="trending_text[text4]" placeholder="Heading" value="{{old('trending_text.text4',$json_data[7]['text4'])}}">
                                    @error('trending_text.text4')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                   @enderror
                                 </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-6">
                                 <div class="form-group">
                                    <label>Image</label>
                                    <div class="input-group">
                                       <div class="custom-file">
                                          <input type="file" name="trending[image6]" class="custom-file-input" class="icon1" onchange="image_show(this);">
                                          <label class="custom-file-label" for="icon">Choose file</label>
                                       </div>
                                    </div>   
                                       <img src="{{$all_data[7]['json_image'][5]}}" class="icon" alt="Select Image">   
                                    @error('trending.image6')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                   </div>
                               </div>
                               <div class="col-6">
                                 <div class="form-group">
                                    <label for="trending_text">Text</label>
                                    <input class="form-control" id="trending_text" name="trending_text[text5]" placeholder="Heading" value="{{old('trending_text.text5',$json_data[7]['text5'])}}">
                                    @error('trending_text.text5')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                   @enderror
                                 </div>
                            </div>
                             </div>
                           <div class="row">
                              <div class="col-6">
                                 <div class="form-group">
                                    <label>Image</label>
                                    <div class="input-group">
                                       <div class="custom-file">
                                          <input type="file" name="trending[image7]" class="custom-file-input" class="icon1" onchange="image_show(this);">
                                          <label class="custom-file-label" for="icon">Choose file</label>
                                       </div>
                                    </div>   
                                       <img src="{{$all_data[7]['json_image'][6]}}" class="icon" alt="Select Image">   
                                    @error('trending.image7')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                   </div>
                              </div>
                              <div class="col-6">
                                 <div class="form-group">
                                    <label for="trending_text">Text</label>
                                    <input class="form-control" id="trending_text" name="trending_text[text6]" placeholder="Heading" value="{{old('trending_text.text6',$json_data[7]['text6'])}}">
                                    @error('trending_text.text6')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                   @enderror
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-6">
                                 <div class="form-group">
                                    <label>Image</label>
                                    <div class="input-group">
                                       <div class="custom-file">
                                          <input type="file" name="trending[image8]" class="custom-file-input" class="icon1" onchange="image_show(this);">
                                          <label class="custom-file-label" for="icon">Choose file</label>
                                       </div>
                                    </div> 

                                       <img src="{{$all_data[7]['json_image'][7]}}" class="icon" alt="Select Image">   
                                    @error('trending.image8')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                   </div>
                              </div>
                              <div class="col-6">
                                 <div class="form-group">
                                    <label for="trending_text">Text</label>
                                    <input class="form-control" id="trending_text" name="trending_text[text7]" placeholder="Heading" value="{{old('trending_text.text7',$json_data[7]['text7'])}}">
                                    @error('trending_text.text7')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                   @enderror
                                 </div>
                              </div>
                           </div>
                         </div>
                          </div>
                           </div>
                           </div>
                        </div>
                     </div>
                  <div class="card-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
</section>
   {{-- Recruiters Section  --}}
<section class="content">
    <div class="container-fluid">
       <div class="row">
          <!-- left column -->
          <div class="col-md-12">
             <!-- general form elements -->
             <div class="card">
                <div class="card-header">
                   <h3 class="card-title">Section Fourth Recruiters</h3>
                </div>
                <!-- form start -->
                <form role="form" method="post" action="{{route('admin.page.homeSave',['banner_fourth'])}}" enctype="multipart/form-data">
                  @csrf
                   <div class="card-body">
                      <div class="category-img-section">
                         <div class="row category-img-block0">
                            <div class="col-md-10">
                               <div class="form-group">
                                  <label for="heading4">heading</label>
                                  <input class="form-control" id="heading4[heading]" name="heading4[heading]" placeholder="Heading" value="{{old('heading4.heading',$json_data_heading[3]['heading'])}}">
                                  @error('heading4.heading')
                                  <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                  @enderror
                               </div>
                               </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="heading4">Heading</label>
                                    <input class="form-control" name="heading4[heading1]" placeholder="Heading" value="{{old('heading4.heading1',$json_data_heading[3]['heading1'])}}">
                                    @error('heading4.heading1')
                                    <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                 </div>
                            </div>                              
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="content4">Content</label>
                                     <input class="form-control" name="content4[content1]" placeholder="Heading" value="{{old('content4.content1',$json_data_content[3]['content1'])}}">
                                     @error('content4.content1')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                  </div>
                             </div>

                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="heading5">Heading</label>
                                    <input class="form-control" name="heading4[heading2]" placeholder="Heading" value="{{old('heading4.heading2',$json_data_heading[3]['heading2'])}}">
                                    @error('heading4.heading2')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                 </div>
                            </div>                              
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="content5">Content</label>
                                     <input class="form-control" name="content4[content2]" placeholder="Heading" value="{{old('content4.content2',$json_data_content[3]['content2'])}}">
                                     @error('content4.content2')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                  </div>
                             </div>

                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="heading6">Heading</label>
                                    <input class="form-control" name="heading4[heading3]" placeholder="Heading" value="{{old('heading4.heading3',$json_data_heading[3]['heading3'])}}">
                                    @error('heading4.heading3')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                 </div>
                            </div>                              
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="content6">Content</label>
                                     <input class="form-control" name="content4[content3]" placeholder="Heading" value="{{old('content4.content3',$json_data_content[3]['content3'])}}">
                                     @error('content4.content3')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                  </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <div class="input-group d-block">
                                   <label for="banner_text_section3">Button text</label>
                                   <input class="form-control" name="section2[text]" placeholder="Heading" value="{{old('section2.text',$json_data[3]['text'])}}">
                                   @error('section2.text')
										<div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                   </div>
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="banner_link">Button link</label>
                                   <input class="form-control" name="section2[link]" placeholder="Heading" value="{{old('section2.link',$json_data[3]['link'])}}">
                                   @error('section2.link')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                </div>
                           </div>
                            </div>
                         </div>
                      </div>
                   <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                </form>
             </div>
          </div>
       </div>
</section>
   {{-- Support Section  --}}
<section class="content">
   <div class="container-fluid">
          <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                   <!-- general form elements -->
                  <div class="card ">
                      <div class="card-header">
                     <h3 class="card-title">Section Five Support Section</h3>   
                      </div>
                      <!-- form start -->
                     
                      <form role="form" method="post" action="{{route('admin.page.homeSave',['support_section'])}}" enctype="multipart/form-data">
                          @csrf                                  
                          
                          <div class="card-body">
                          <div class="row">
                              <div class="col">
                                  <div class="form-group">       
                          <label for="Heading-text">Main Heading</label>
                          <input type="text" name="support[heading]" class="form-control" id="main_heading" placeholder="Enter Heading" value="{{old('support.heading',$json_data_heading[5]['heading'])}}">
                          @error('support.heading')
                          <div class="form-valid-error" style="color:red">{{ $message }}</div>
                          @enderror
                      </div>
  
                       </div>
                      </div><div class="row">

                          <div class="col">
                           <div class="form-group">
                          <label for="Heading-text">Heading</label>
                                      <input type="text" name="support[heading1]" class="form-control" id="heading" placeholder="Enter Heading" value="{{old('support.heading1',$json_data_heading[5]['heading1'])}}">
                                      @error('support.heading1')
                                      <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                      @enderror</div>

                              </div>
                          </div>
                      <div class="row">
                          <div class="col">
                              <div class="form-group">
                                 
                                  <label for="image">Image</label>
                                  <input type="file" name="support_image[image]" class="form-control" id="image" onchange="image_show(this);" >
                                  <img src="{{$all_data[5]['json_image'][0]}}" class="icon icon3" alt="Select Image">
                                  @error('support_image.image')
                                  <div class="form-valid-error" style="color:red" >{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                          <div class="col"><div class="form-group">
                        <label for="content">Content</label>
                                  <input type="text" name="support_con[content]" class="form-control" id="content" placeholder="Enter Content" value="{{old('support_con.content',$json_data_content[5]['content'])}}">
                                  @error('support_con.content')
                                  <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                  @enderror</div>
                           
                      </div>
                          </div>
                          
                               <div class="row">
                              <div class="col"><div class="form-group">
                                  <label for="button-text">Button Text</label>
                                  <input type="text" name="support_button[button_text]" class="form-control" id="button_text" placeholder="Enter Button Text" value="{{old('support_button.button_text',$json_data[5]['button_text'])}}">
                                  @error('support_button.button_text')
                                  <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                  @enderror</div>
                              </div>
                              <div class="col">
                                  <div class="form-group">
                                  <label for="button_link">Button Link</label>
                                  <input type="text" name="support_button[button_link]" class="form-control" id="button_link" placeholder="Enter Button Link"  value="{{old('support_button.button_link',$json_data[5]['button_link'])}}">
                                  @error('support_button.button_link')
                                  <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                  @enderror</div>
                          </div>
                          </div>
                          
                          
                              
                     <!-- form start -->
                         <div class="row">
                             <div class="col">
                                 <div class="form-group">       
                         <label for="Heading-text">Heading 2</label>
                         <input type="text" name="support[heading2]" class="form-control" id="heading" placeholder="Enter Heading" value="{{old('support.heading2',$json_data_heading[5]['heading2'])}}">
                         @error('support.heading2')
                         <div class="form-valid-error" style="color:red">{{ $message }}</div>
                         @enderror
                     </div>
 
                      </div>
                     </div>
                     <div class="row">
                         <div class="col">
                             <div class="form-group">
                                 <label for="image">Image 01</label>
                                 <input type="file" name="support_image[image1]" class="form-control" id="bgimage"  onchange="image_show(this);" >
                                 <img src="{{$all_data[5]['json_image'][1]}}" class="icon icon4" />
                                 @error('support_image.image1')
                                 <div class="form-valid-error" style="color:red" >{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         <div class="col">
                             <div class="form-group">
                                 <label for="image">Image 02</label>
                                 <input type="file" name="support_image[image2]" class="form-control" id="bgimage"  onchange="image_show(this);">
                                 <img src="{{$all_data[5]['json_image'][2]}}"  class="icon icon5" />
                                 @error('support_image.image2')
                                 <div class="form-valid-error" style="color:red" >{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         </div>
                         <div class="row">
                         <div class="col"><div class="form-group">
                     <label for="content">Img 01 Content</label>
                                 <input type="text" name="support_con[content1]" class="form-control" id="content" placeholder="Enter Content" value="{{old('support_con.content1',$json_data_content[5]['content1'])}}">
                                 @error('support_con.content1')
                                 <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                 @enderror</div>
                          
                     </div>
                     <div class="col"><div class="form-group">
                     <label for="content">Img 02 Content</label>
                                 <input type="text" name="support_con[content2]" class="form-control" id="content" placeholder="Enter Content" value="{{old('support_con.content2',$json_data_content[5]['content2'])}}">
                                 @error('support_con.content2')
                                 <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                 @enderror</div>
                          
                     </div>  
                         </div>
                         
                              <div class="row">
                             <div class="col"><div class="form-group">
                                 <label for="button-text">Img 01 Button Text</label>
                                 <input type="text" name="support_button[button_text1]" class="form-control" id="button_text" placeholder="Enter Button Text" value="{{old('support_button.button_text1',$json_data[5]['button_text1'])}}">
                                 @error('support_button.button_text1')
                                 <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                 @enderror</div>
                             </div>
                             <div class="col">
                                 <div class="form-group">
                                 <label for="button_link">Img 02 Button Text</label>
                                 <input type="text" name="support_button[button_text2]" class="form-control" id="button_link" placeholder="Enter Button Link"  value="{{old('support_button.button_text2',$json_data[5]['button_text2'])}}">
                                 @error('support_button.button_text2')
                                 <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                 @enderror</div>
                         </div>
                         </div>
                         <div class="row">
                             <div class="col"><div class="form-group">
                                 <label for="button-text">Img 01 Button Link</label>
                                 <input type="text" name="support_button[button_link1]" class="form-control" id="button_text" placeholder="Enter Button Text" value="{{old('support_button.button_link1',$json_data[5]['button_link1'])}}">
                                 @error('support_button.button_link1')
                                 <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                 @enderror</div>
                             </div>
                             <div class="col">
                                 <div class="form-group">
                                 <label for="button_link">Img 02 Button Link</label>
                                 <input type="text" name="support_button[button_link2]" class="form-control" id="button_link" placeholder="Enter Button Link"  value="{{old('support_button.button_link2',$json_data[5]['button_link2'])}}">
                                 @error('support_button.button_link2')
                                 <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                 @enderror</div>
                         </div>
                         </div>
                         <div class="row">
                             <div class="col">
                                 <div class="form-group">       
                         <label for="Content-text">Content</label>
                         <input type="text" name="support_con[content3]" class="form-control" id="main_heading" placeholder="Enter Content" value="{{old('support_con.content3',$json_data_content[5]['content3'])}}">
                         @error('support_con.content3')
                         <div class="form-valid-error" style="color:red">{{ $message }}</div>
                         @enderror
                     </div>
 
                      </div>
                     </div>
                     <div class="row">
                             <div class="col"><div class="form-group">
                                 <label for="button-text">Button Text</label>
                                 <input type="text" name="support_button[button_text3]" class="form-control" id="button_text" placeholder="Enter Button Text" value="{{old('support_button.button_text3',$json_data[5]['button_text3'])}}">
                                 @error('support_button.button_text3')
                                 <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                 @enderror</div>
                             </div>
                             <div class="col">
                                 <div class="form-group">
                                 <label for="button_link">Button Link</label>
                                 <input type="text" name="support_button[button_link3]" class="form-control" id="button_link" placeholder="Enter Button Link"  value="{{old('support_button.button_link3',$json_data[5]['button_link3'])}}">
                                 @error('support_button.button_link3')
                                 <div class="form-valid-error" style="color:red">{{ $message }}</div>
                                 @enderror</div>
                         </div>
                         </div>
                         
                         
                             <div class="card-footer">
                             <button type="submit" class="btn btn-primary">Submit</button>
                         </div>
                     </form>
                     <div > 
                     </div>
             </div>
         </div>
      </div>
  </section>
</section>
   {{-- Section Six  --}}
<section class="content">
    <div class="container-fluid">
       <div class="row">
          <!-- left column -->
          <div class="col-md-12">
             <!-- general form elements -->
             <div class="card">
                <div class="card-header">
                   <h3 class="card-title">Section Six</h3>
                </div>
                <!-- form start -->
                <form role="form" method="post" action="{{route('admin.page.homeSave',['banner_five'])}}" enctype="multipart/form-data">
                  @csrf
                   <div class="card-body">
                      <div class="category-img-section">
                         <div class="row category-img-block0">
                            <div class="col-md-10">
                               <div class="form-group">
                                  <label for="banner_heading">heading</label>
                                  <input class="form-control" id="banner_heading5" name="banner_heading5" placeholder="Heading" value="{{old('banner_heading5',$all_data[4]['heading'])}}">
                                  @error('banner_heading5')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                               </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <div class="input-group d-block">
                                   <label for="banner_text">Button text</label>
                                   <input class="form-control" name="banner_five[text]" placeholder="Heading" value="{{old('banner_five.text',$json_data[4]['text'])}}">
                                   </div>
                                   @error('banner_five.text')
										<div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="banner_link">Button link</label>
                                   <input class="form-control" name="banner_five[link]" placeholder="Heading" value="{{old('banner_five.link',$json_data[4]['link'])}}">
                                   @error('banner_five.link')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                                </div>
                           </div>
                           <div class="col-md-6">
                            <div class="form-group">
                               <div class="input-group d-block">
                               <label for="banner_text">Button text</label>
                               <input class="form-control" name="banner_five[text1]" placeholder="Heading" value="{{old('banner_five.text1',$json_data[4]['text1'])}}">
                               @error('banner_five.text1')
										<div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                    @enderror
                               </div>
                            </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="banner_link">Button link</label>
                               <input class="form-control" name="banner_five[link1]" placeholder="Heading" value="{{old('banner_five.link1',$json_data[4]['link1'])}}">
                               @error('banner_five.link1')
                                 <div class="form-valid-error" style="color: red;">{{ $message }}</div>
                                       @enderror
                            </div>
                       </div>
                            </div>
                         </div>
                      </div>
                   <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                </form>
             </div>
          </div>
       </div>
</section>
@stop