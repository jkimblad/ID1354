$(document).ready(function() {
    alert("hello");
    //List all the comments for the recipe
    listComments();





    function listComments() {
        $.ajax({
            type: 'ajax',
            url: base_url + "/comments/showcomments",
            async: false,
            dataType: 'json',
            success: function(data) {
                var output = '';
                var deleteComment = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    if($('#username').text() == data[i].username) {
                        deleteComment = '<a href="javascript:;" class="deletebutton" data="'+data[i].id'+">Delete comment</a>'
                    } else {
                        deleteComment = '';
                    }
                    data[i].username;
                }
            }
        })

    }
})
