<?php

print_r($_POST);
print_r($_FILES);
?>

<form id="data" method="post" enctype="multipart/form-data">
    <input type="text" id="first" value="Bob" />
    <input type="text" id="middle" value="James" />
    <input type="text" id="last" value="Smith" />
    <input id="image" type="file" />
    <button id="sub">Submit</button>
</form>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>

<script>
$("#sub").click(function() {
    var fst = new FormData(this);

    $.ajax({
        url: window.location.pathname,
        type: 'POST',
        data: formData,
        success: function(data) {
            alert(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
</script>