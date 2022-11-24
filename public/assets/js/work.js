

$(document).ready(function () {

    $(document).on('click', '.bars', function () {
        $('.mobile-wrap').css('right', '0')
    })
    $(document).on('click', '.close-mobile-wrap', function () {
        $('.mobile-wrap').css('right', '-100%')
    })
    function changeBg() {
        let navber = $('#navber')
        var scrollvalue = window.scrollY;
        if (scrollvalue < 150) {
            navber.ClassList.add('bg-primary')
        } else {

        }
    }
    $(document).on('change', '.upload-profile', (e) => {
        let file = e.target.files[0]
        if (file['size'] <= 5000000) {
            if (!e.target.value == '') {
                let filereader = new FileReader()
                filereader.readAsDataURL(file)
                filereader.onload = (e) => {
                    $('.second-img').css('display', 'none')
                    $('.profile').css('display', 'block')
                    $('.profile').attr('src', e.target.result)
                }
            }

        } else {
            alert('The file is too large');
        }
    })
    $(document).on('submit', '.register-user', function (e) {
        e.preventDefault()
        let data = new FormData($('.register-user')[0]);
        $.ajax({
            type: "POST",
            url: "/register-user",
            data: data,
            contentType: false,
            processData: false,
            success: function (res) {
                if (res.status === 200) {
                    $('.accbtn').css('display', 'none')
                    $('.sucmsg').html('Account Created Successfulling')
                    setTimeout(() => {
                        $('.sucmsg').html('Redirecting you to your Dashboard')
                        setTimeout(() => {
                            location.href = '/tailorusers'
                        }, 2000);
                    }, 2000);

                } else {
                    Swal.fire({
                        title: 'Request Failed',
                        text: res.msg,
                        icon: 'error',
                        confirmActionButton: "BACK"
                    });
                }
            }
        });
    })



    $(document).on('submit', '#email', function (e) {
        e.preventDefault()
        let data = new FormData($('#email')[0]);
        $.ajax({
            type: "POST",
            url: "/secondusers",
            data: data,
            contentType: false,
            processData: false,
            success: function (res) {
                if (res.status === 200) {
                    Swal.fire({
                        title: 'Request successful',
                        text: res.msg,
                        icon: 'success',
                        confirmActionButton: "BACK"
                    });

                } else {
                    Swal.fire({
                        title: 'Request Failed',
                        text: res.msg,
                        icon: 'error',
                        confirmActionButton: "BACK"
                    });
                }
            }
        });
    })
    $(document).on('submit', '.loginusers', function (e) {
        e.preventDefault()
        let data = new FormData($('.loginusers')[0]);
        $.ajax({
            type: "POST",
            url: "/loginusers",
            data: data,
            contentType: false,
            processData: false,
            success: function (res) {
                if (res.status === 200) {

                    $('.sucmsg').html('Signind in Successfulling')
                    setTimeout(() => {
                        $('.sucmsg').html('Redirecting you to your Dashboard')
                        setTimeout(() => {
                            location.href = '/usersdashboard'
                        }, 2000);
                    }, 2000);

                } else {
                    Swal.fire({
                        title: 'Request Failed',
                        text: res.msg,
                        icon: 'error',
                        confirmActionButton: "BACK"
                    });
                }
            }
        });
    })

    $(document).on('submit', '.subcribers', function (e) {
        e.preventDefault()
        let data = new FormData($('.subcribers')[0]);
        $.ajax({
            type: "POST",
            url: "/subcribers",
            data: data,
            contentType: false,
            processData: false,
            success: function (res) {
                if (res.status === 200) {
                    Swal.fire({
                        title: 'Request successful',
                        text: `${res.msg} Has successfully to our news Letter`,
                        icon: 'success',
                        confirmActionButton: "BACK"
                    });
                    $('.subin').val('')

                } else {
                    Swal.fire({
                        title: 'Request Failed',
                        text: res.msg,
                        icon: 'error',
                        confirmActionButton: "BACK"
                    });
                }
            }
        });
    })



})
