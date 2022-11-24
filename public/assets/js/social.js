$(document).ready(function() {
    const getSociallinks = () => {
        $.ajax({
            type: "GET",
            url: "/getsociallinks",
            dataType: "json",
            success: function (res) {
                let data = res.msg
                if (res.status == 200) {
                    $('#so_phone').val(data.phone);
                    $('#so_id').val(data.id);
                    $('#so_email').val(data.email);
                    $('#so_facebook').val(data.facebook);
                    $('#so_twitter').val(data.twitter);
                    $('#so_instagram').val(data.instagram);
                    $('#so_linkedin').val(data.linkedin);
                }
            }
        });
    }
    getSociallinks();
    $(document).on('submit', '.sociallinks', function (e) {
        e.preventDefault()
        let data = new FormData($('.sociallinks')[0]);
        $.ajax({
            type: "POST",
            url: "/sociallinkstore",
            data: data,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res)
                if (res.status === 200) {
                    alert('Social links Updated Successfully')

                } else {
                    Swal.fire({
                        title: 'Request Failed',
                        text: res.msg,
                        icon: 'error',
                        confirmActionButton: "BACK"
                    });
                    getSociallinks()
                }
            }
        });
    })
})
