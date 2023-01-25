
$(function () {
    $('.table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});

$(".admin-toastr").trigger('click');


function toastr_success(msg) {
    toastr.success(msg)
}

function toastr_danger(msg) {
    toastr.error(msg)
}

function confirm_box_status(status, id ,url, _this , msg, table) {
    if (confirm("Do you really want to change status ?")) {
        let curr_status = $(_this).children().text()
        $(_this).children().text('Waiting...')
        $.ajax({
            url: url,
            data: {table:table,status:status,id:id,"_token": "{{csrf_token()}}"},
            success: $.proxy(function(res) {
                if(res == 'success'){
                    if(status == 'active'){
                        $(_this).parent().html(` <a class="badge badge-success text-white cursor-pointer" class="text-success" onclick="confirm_box_status('inactive','${id}','${url}',this,'${msg}','${table}')"><strong>Active</strong></a>`)
                    }
                    if(status == 'inactive'){
                        $(_this).parent().html(` <a class="badge badge-danger text-white cursor-pointer" class="text-danger" onclick="confirm_box_status('active','${id}','${url}',this,'${msg}','${table}')"><strong>Inactive</strong></a>`)
                    }
                    toastr_success(msg + ' status has changed successfully',)
                    // toastr_alert('Success', msg + ' status has changed successfully', 'success')
                }else if(res == 'error'){
                    toastr_success(msg + ' Error occured in changing status',)
                    // toastr_alert('Error', msg + ' Error occured in changing status', 'success')
                    $(_this).children().text(curr_status);
                }
            }, this)
        });
    }
}

// function confirm_verify_status(status, id, url, _this, msg) {
//     if (confirm("Confirm?")) {
//         let curr_status = $(_this).children().text()
//         $(_this).children().text('Waiting...')
//         let csrf = $("input[name='_token']").val()
//         $.ajax({
//             url: base_url + url,
//             type: "POST",
//             data: { status: status, id: id, _token: csrf },
//             success: $.proxy(function (res) {
//                 if (res == 'success') {
//                     if (status == 'verified') {
//                         $(_this).parent().html('<a class="text-success" onclick="confirm_verify_status(\'notverified\',' + id + ',\'' + url + '\',this,\'' + msg + '\')"><strong>Verified</strong></a>');
//                     }
//                     if (status == 'notverified') {
//                         $(_this).parent().html('<a class="text-danger" onclick="confirm_verify_status(\'verified\',' + id + ',\'' + url + '\',this,\'' + msg + '\')"><strong>Not Verified</strong></a>');
//                     }
//                     toastr_success(msg + ' verified status has changed successfully')
//                 } else if (res == 'error') {
//                     toastr_danger('Error occured in changing status')
//                     $(_this).children().text(curr_status)
//                 }
//             }, this)
//         });
//     }
// }

function details_page(id, url, _this){
    let curr_status = $(_this).children().text();
    $(_this).children().text('Waiting...');
    $.ajax({
        url:url,
        data:{id:id,"_token": "{{csrf_token()}}"},
    success: $.proxy(function(res){
            $(".data_show").html("").append(res);
    })
});
}

function confirm_box_delete(id, url) {
    if (confirm("Do you really want to delete this data ?")) {
        window.location.href = base_url + url + '/' + id;
    }
}

$('.select2').select2()

$('.select2bs4').select2({
    theme: 'bootstrap4'
})




$(function () {
    $('.textarea').summernote()
})

$("input[data-bootstrap-switch]").each(function () {
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
});

// BLOG SECTION

var blog_img_count = 1
$('body').on('click', '.add-blog-img', function () {
    $(this).parent().before(`<div class="row blog-img-block${blog_img_count}"> <div class="col-md-10"> <div class="form-group"> <div class="input-group"> <div class="custom-file"> <input type="file" name="imgs${blog_img_count}" class="custom-file-input" id="imgs${blog_img_count}"> <label class="custom-file-label" for="imgs${blog_img_count}">Choose file</label> </div> </div> </div> </div> <div class="col-md-2"> <button type="button" class="btn remove-blog-img btn-block btn-danger" data-id="${blog_img_count}"><i class="fas fa-trash"></i> Remove </button> </div> </div>`);
    blog_img_count++;
})

$('body').on('click', '.remove-blog-img', function () {
    var id = $(this).data('id')
    $(this).parent().parent().remove();
})

function blog_img_delete(id, key, url) {
    if (confirm("Do you really want to delete this image ?")) {
        window.location.href = base_url + url + '/' + id + '/' + key;
    }
}

// BANNER
function banner_img_delete(id, key, url) {
    if (confirm("Do you really want to delete this image ?")) {
        window.location.href = base_url + url + '/' + id + '/' + key;
    }
}
var banner_img_count = 1;



$('#getSection').on('change', function () {
    var chapter_id = $(this).find(':selected').val();
    var data_url_sub = $(this).attr('data-url');
    if (chapter_id == '') { } else {
        $(".ajax-section").html('');
        $.ajax({
            url: data_url_sub,
            type: "POST",
            data: {
                id: chapter_id,
                _token: csrf_token
            },
            dataType: 'json',
            success: function (res) {
                $('.ajax-section').html('<option value="">Select Section</option>');
                $.each(res.section, function (key, value) {
                    $(".ajax-section").append('<option value="' + value.id + '">' + value.name + '</option>');
                });
            }
        });
    }
});

$(document).ready(function () {

    var chapter_id = $('#getSection').find(':selected').val();
    var data_url_sub = $('#getSection').attr('data-url');
    var data_sect_id = $('#getSection').attr('data-section-id');
    if (chapter_id == '') { } else {
        $(".ajax-section").html('');
        $.ajax({
            url: data_url_sub,
            type: "POST",
            data: {
                id: chapter_id,
                _token: csrf_token
            },
            dataType: 'json',
            success: function (res) {
                $('.ajax-section').html('<option value="">Select Section</option>');
                $.each(res.section, function (key, value) {
                    $(".ajax-section").append(`<option value="${value.id}" ${data_sect_id == value.id ? 'selected' : ''} >${value.name}</option>`);
                });
            }
        });
    }


});

$('#lesson-type').change(function () {

    var selectedText = $(this).find("option:selected").val();
    if (selectedText == "") {
        $('#lesson-url').hide();
        $('#lesson-attechment').hide();
        $('#lesson-provider').hide();
    }
    if (selectedText == 1) {
        $('#lesson-attechment').hide();
        $('#lesson-provider').show();
        $('#lesson-url').show();
    }
    if (selectedText == 2) {
        $('#lesson-url').hide();
        $('#lesson-provider').hide();
        $('#lesson-attechment').show();
        $('#attachment-file').attr('accept', 'application/pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    }
    if (selectedText == 3) {
        $('#lesson-provider').hide();
        $('#lesson-url').hide();
        $('#lesson-attechment').show();
        $('#attachment-file').attr('accept', 'image/*');
    }
});


$('#less-type').change(function () {
    //alert("dfbdhjs")
    var selectedText = $(this).find("option:selected").val();
    if (selectedText == "") {
        $('#less-url').hide();
        $('#less-attechment').hide();
        $('#less-provider').hide();
    }
    if (selectedText == 1) {
        $('#less-attechment').hide();
        $('#less-provider').show();
        $('#less-url').show();
    }
    if (selectedText == 2) {
        $('#less-url').hide();
        $('#less-provider').hide();
        $('#less-attechment').show();
        $('#attachment-file').attr('accept', 'application/pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    }
    if (selectedText == 3) {
        $('#less-provider').hide();
        $('#less-url').hide();
        $('#less-attechment').show();
        $('#attachment-file').attr('accept', 'image/*');
    }
});

$(document).ready(function () {
    $('.custom-file-input').change(function () {
        var file = $(this)[0].files[0].name;
        // console.log(file);
        $(this).closest(".custom-file").find(".custom-file-label").text(file);
    });
});

$(document).ready(function () {
    var above10 = $('option:selected', '#classSubject').attr('data-type');
    $('#aboveTen').val(above10);
    if (above10 == 1) {
        $('.stream_class').show();
    }

    $('body').on('change', '#classSubject', function () {
        var above10 = $('option:selected', this).attr('data-type');
        if (above10 == 1) {
            $('.stream_class').show();
            $('#aboveTen').val(above10);
        } else {
            $('#aboveTen').val(above10);
            $('#streamSubject').val('');
            $('.stream_class').hide();
        }

    });

});
function image_show(input){ 
    $('.icon')[0].src = (window.URL ? URL:webkitURL).createObjectURL(input.files[0]);
    $('.icon1')[0].src = (window.URL ? URL:webkitURL).createObjectURL(input.files[0]);
}