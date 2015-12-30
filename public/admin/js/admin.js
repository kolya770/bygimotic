$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function() {
    $('#summernote').summernote({

        //onkeyup: function(e) {
        //    $('#lawsContent').val($('#summernote').code());
        //},
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
        }
    });


    $('.note-editable').addClass('style-editor');
});


function sendFile(file,editor,welEditable) {
    data = new FormData();
    data.append("file", file);
    var url = '/admin/blog/ajaximage';
    console.log('image upload:', file, editor, welEditable);
    console.log(data);

    $.ajax({
        headers: { 'csrftoken' : '{{ csrf_token() }}' },
        data:  data,
        type: "POST",
        url: url,
        cache: false,
        contentType: false,
        processData: false,
        success: function(url) {
            editor.insertImage(welEditable, url);
        }
    });
}
