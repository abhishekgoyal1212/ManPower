<?php $email = session()->get('email'); ?>
@extends('front.login.index')
@section('title', 'Home')
@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
    *{
        font-family: 'Poppins', sans-serif;
    }
    .download-cv {
    border-radius: 10px;
    padding: 15px 30px 15px 15px;
    font-size: 14px;
    background-color: #f8f8f8;
}

.visual-container h1 {
    font-size: 30px;
    font-weight: 700;
}
.download-cv a {
    margin: 20px auto 0;
    display: block;
    color: #1e1ef0;
    font-weight: 500;
    text-decoration: none;
    display: inline-block;
}
.visual-container {
    max-width: none;
    border-radius: 10px;
    background: #fff;
    box-sizing: border-box;
    margin-bottom: 40px;
}

.url, .down-load {
    font-size: 18px;
}

.upload-cv {
    margin-top: 20px;
    border: 1px dashed #c8c8c8;
    text-align: center;
    padding: 29px 39px;
    position: relative;
}

.upload-cv a{
top: 35px;
    right: 35px;
    position: absolute;
    color: #1e1ef0;
    font-weight: 500;
    text-decoration: none;
    display: inline-block;
}

.upload-cv h4 {
    font-size: 15px;
    margin: 45px 0;
}

.upload-cv h4 {
    font-size: 17px;
    margin: 20px 0;
    font-weight: 600;
    color: #333;
    word-break: break-all;
    line-height: 27px;
}
</style>

<section class="cv-upload">
    <form method="post" action="{{route('signupUserCvSave')}}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="cv-container">
                <div class="account-msg">
                    <h4><i class="fa fa-check-square-o" aria-hidden="true"></i>Your account has been created. Welcome to 1IGS Manpower</h4>
                </div>
                <div class="upload-data">
                    <div class="upload-data-container">
                        <input type="file" name="cv" id="file-upload"  required hidden>
                    <div class="remove-cv">
                        <div class="row">
                            <div class="col-xs-12 px-3">
                                <h4>Add your CV</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="upload-box">
                                    <h2>Drop your file here to upload</h2>
                                    <p><i class="bi bi-upload"></i>File types: .docx, .doc, .pdf, .txt, .odt or .rtf.<br>Up to &nbsp;</p>
                                    <!-- <button>Choose file</button> -->
                                    <input type="text" name="email" value="{{$email}}" hidden>
                                    <label for="file-upload" id="file-upload-show">Enter Your File</label> 
                                    <div id="error-image" style="color: red; text-align: center; ">@error('cv')<div class="form-valid-error" style="text-align: center;">{{ $message }}</div>@enderror</div>
                                    <div id="file-upload-filename" style="text-align: center;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <h5>Create your CV</h5>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-3">
                                <p>Not sure where to start? We can help you create a CV in minutes.</p>
                                <a href="" class="btn-create">Build your CV</a>
                            </div>
                            <div class="col-xs-12 col-lg-3">
                                <p>Prefer to do it yourself? Download our free Microsoft Word template.</p>
                                <a href="" class="btn-create">Use a template</a>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <p>Alternatively, you can use your Linkedin profile</p>
                                <ol class="ml-0 pl-3">
                                    <li>Visit <a href="">LinkedIn</a>&nbsp; in a new tab</li>
                                    <li>View your profile</li>
                                    <li>Click on the More button and select Save to PDF</li>
                                    <li>Save the PDF to your device and return to upload</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="">Add CV later</a>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="sign-up-btn">
            <input type="submit" value="Continue" class="nextjob">
        </div>
    </form>
</section>
    <script>
        var input = document.getElementById( 'file-upload' );
        var infoArea = document.getElementById( 'file-upload-filename' );
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        var today = mm + '/' + dd + '/' + yyyy;
        let objectURL = [];
        var email = "<?php echo" $email "?>";
        timeout = setTimeout(10000);
            input.addEventListener('change', showFileName );
        function showFileName( event ) {
            var myfile = $( this ).val();
            var ext = myfile.split('.').pop();
            if(ext == "docx" || ext == "doc" || ext == "pdf" || ext == "txt" || ext == "odt" || ext == "rtf"){
                // the change event gives us the input it occurred in 
                var input = event.srcElement;
                // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                var fileName = input.files[0].name;
                objectURL = URL.createObjectURL(input.files[0]);
                // use fileName however fits your app best, i.e. add it into a div
                // infoArea.textContent = 'File name: ' + fileName;
                $(".remove-cv").html("").append(`<input type="text" name="email" value="${email}" id="file-upload" multiple hidden><input type="text" name="cv" value="${fileName}" hidden><div class="row"><div class="col-lg-12 mx-auto"><div class="visual-container"><div class="">
            <h1>Change your CV</h1><p class="hidden-xs">Uploading a new file will replace your current CV.</p></div><div class=""><div class="download-cv row mx-0"><div class="col-xs-3 col-md-3"><img src="{{asset('front-assets/images/file-read.png')}}" alt=""></div><div class="col-xs-9 col-md-9"><div class="url"><strong>http___local...docx</strong><br>${today}</div></div><div class="col-xs-12 col-md-12"><div class="down-load"><a href="${objectURL}" title="Download your CV" data-gtm="add_cv_click" data-gtm-value="download_existing_cv">Download</a></div></div></div></div><div class="upload-cv"><a href="">Change CV</a><img src="{{asset('front-assets/images/file.png')}}" alt=""><h4>${fileName}</h4> <div class="upload-message"><img src="{{asset('front-assets/images/check.png')}}" alt=""><h4>Upload Complete</h4> </div></div></div></div></div>`);
            }else{
                $("#error-image").html("").text("The cv must be a file of type:docx, doc, pdf, txt, odt or.rtf.")
            }
}
    </script>
@stop