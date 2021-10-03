const config = {}
 
$('a[data-assignID]').click(function () {

    config.id = $(this).data('assignid')

    // lauch modal
    $("#submit-assign").modal("show");
})

document.getElementById('file-assign').addEventListener('change', function (e) {
    config.file = this.files[0]
})

$('#assign-submit').submit(function (e) {
    e.preventDefault()

    const formdata = new FormData()
    formdata.append('assign', config.file)
    formdata.append('assign_id', config.id)

    const xhr = new XMLHttpRequest()
    // xhr.file = formdata

    const url = base_url + '/student/post_assignment'
    
    if (xhr.upload) {
        xhr.upload.onprogress = function (e) {
            var done = e.position || e.loaded, total = e.totalSize || e.total

        console.log('xhr progress ' + (Math.floor(done / total * 1000) / 10) + "%")
        }
    }

    xhr.onreadystatechange = function (e) {
        // if (4 == this.readyState) {
        //     console.log('upload complete')
        // }
        if (xhr.status == 200) {
            console.log(xhr.response)
        }
    }

    xhr.open('post', url, true)
    xhr.setRequestHeader("Content-Type", "multipart/form-data; charset=utf-8; boundary=" + Math.random().toString().substr(2))
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest")
    xhr.setRequestHeader("mimeType", "multipart/form-data")
    xhr.setRequestHeader("Accept","multipart/form-data")
    
    xhr.send(formdata)

})


