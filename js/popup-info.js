$(document).on('click', '#success', function(e) {
    Swal.fire({
        title: 'Gửi thành công',
        text: 'Cảm ơn bạn đã điền thông tin! Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.',
        icon: 'success',
        showClass: {
            popup: 'animated bounceIn'
        },
        hideClass: {
            popup: 'animated bounceOut'
        },
        onOpen: function() {
            var audioElement = document.getElementById('notification-sound');
            audioElement.play();
        }
    });
});