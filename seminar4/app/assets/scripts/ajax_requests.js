$(document).ready(function() {


    //List all the comments for the recipe
    showComments();

    //Send a new comment written by the user to the backend
    $("#comment-submit-button").click(function(e) {
        var tempdata = {
                'comment' :  $("#comment-text").val(),
                'page' : window.location.href.split("/").reverse()[0],
        }
        console.log(tempdata);

        $.ajax({
            type: "POST",
            cache: false,
            url: "http://localhost:80/seminar4/index.php/comments/create",
            data: {
                'comment' :  $("#comment-text").val(),
                'page' : window.location.href.split("/").reverse()[0],
            },
            dataType: 'json',
            success: function() {
                location.reload();
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

    })

    //Activates when login button is pressed
    $("#login-button").click(function(e) {
        e.preventDefault();

        console.log("button click");

        //Send request to server
        $.ajax({
            type: "POST",
            cache: false,
            url: "http://localhost:80/seminar4/index.php/users/loginUser",
            //data: postData,
            data: {
                'username' : $("#username-input").val(),
                'password' : $("#password-input").val(),
            },
            dataType: 'json',
            success: function(res) {
                //Save username that is logged in in cookie
                //Reload page if we could log-in
                location.reload();
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
    })

    //Activates when logout button is pressed
    $("#logout-button").click(function(e) {
        $.ajax({
            type: "POST",
            cache: false,
            url: "http://localhost:80/seminar4/index.php/users/logout",
            success: function() {
                location.reload();
            }
        })

    })

    //Delete comment button was pressed
    $(document).on("click", ".delete-button", function() {
        console.log("delete button pressed!");
        var commentId = $(this).attr('value');

        $.ajax({
            type: "GET",
            cache: false,
            url: "http://localhost:80/seminar4/index.php/comments/delete/" + commentId,
            success: function() {
                location.reload();
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
    })

    //List all comments on relevant site
    function showComments() {
        //Get current site
        var currentPage = window.location.href.split("/").reverse()[0];

        console.log("firing");

        $.ajax({
            type: "POST",
            cache: false,
            url: "http://localhost:80/seminar4/index.php/comments/getComments",
            data: null,
            dataType: 'json',
            success: function(res) {
                if(res) {
                    comments = res.comments
                    //Iterate all comments
                    for(i = 0; i < comments.length; i++) {
                        //Check comment is written on current page
                        if(!currentPage.localeCompare(comments[i].recipe)) {
                            //Append author and commend to comment-list
                            $('#comment-list').append(
                                '<li class="author"><p><b><u>Author</u>:</b>' + comments[i].commenter + '</p></li>' +
                                '<li class="comment"><p>' + comments[i].comment + '</p></li>'
                            );
                            //TODO
                            //If the logged in user has written the comment, add a delete button
                            if(res.logged_in && (res.username == comments[i].commenter)) {
                                $('#comment-list').append( '<button class="delete-button button comment-button" type="submit" value="' + comments[i].id  + '" >Delete comment</button>' );
                            }
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

})
