<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script type="text/javascript">
function submitData() {
    $(document).ready(function() {
        var data = {
            name: $('#name').val(),
            email: $('#email').val(),
            username: $('#username').val(),
            cell: $('#cell').val(),
            password: $('#password').val(),
            action: $('#action').val(),

        };

        $.ajax({
            url: 'function.php',
            type: 'post',
            data: data,
            success: function(response) {

                alert(response);

                window.location.reload();



            }
        });
    });
}
</script>