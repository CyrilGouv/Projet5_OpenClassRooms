$(function() {
    if($('.alert')) {
        setTimeout(() => {
            $('.alert').remove();
        }, 5000)
    }
})