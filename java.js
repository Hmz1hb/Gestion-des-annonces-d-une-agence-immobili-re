$(document).ready(function() {
    $('.btn-danger').click(function() {
        var id = $(this).data('id');
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: { id: id },
            success: function(data) {
                if (data == 'success') {
                    alert('Item deleted successfully');
                } else {
                    alert('An error occurred while deleting the item');
                }
            }
        });
    });
});
