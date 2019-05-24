$(function() {

    $('.alert').delay(5000).slideUp(500);

    $('.delete').click(function(e) {
        e.preventDefault();

        if(confirm('Are you sure you want to delete this item?')) {
            $(this).parent('form').submit();
        }
    });

});
