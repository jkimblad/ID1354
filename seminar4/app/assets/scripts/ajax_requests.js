$(document).ready(function() {


    //List all the comments for the recipe
    showComments();

    function showComments() {
        //Get current site
        var currentPage = window.location.href.split("/").reverse()[0];

        console.log("firing");

        jQuery.ajax({
            type: "POST",
            cache: false,
            url: "http://localhost:80/seminar4/index.php/comments/getComments",
            data: null,
            dataType: 'json',
            success: function(res) {
                console.log("success!");
                if(res) {
                    comments = res.comments
                    for(i = 0; i < comments.length; i++) {
                        if(currentPage.localeCompare(comments[i].recipe)) {
                            console.log(comments[i])
                            $('#comment-list').append(
                                '<li class="author"><p><b><u>Author</u>:</b>' + comments[i].commenter + '</p></li>' +
                                '<li class="comment"><p>' + comments[i].comment + '</p></li>'
                            );
                            //TODO
                            //If the logged in user has written the comment, add a delete button
                        }
                    }

                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('jqXHR:');
                console.log(jqXHR);
                console.log('textStatus:');
                console.log(textStatus);
                console.log('errorThrown:');
                console.log(errorThrown);
            },
        })
    }


    //function listComments() {
    //$.ajax({
    //type: 'ajax',
    //url: base_url + "/comments/showcomments",
    //async: false,
    //dataType: 'json',
    //success: function(data) {
    //var output = '';
    //var deleteComment = '';
    //var i;
    //for (i = 0; i < data.length; i++) {
    //if($('#username').text() == data[i].username) {
    //deleteComment = '<a href="javascript:;" class="deletebutton" data="'+data[i].id'+">Delete comment</a>'
    //} else {
    //deleteComment = '';
    //}
    //data[i].username;
    //}
    //}
    //})

    //}
})
