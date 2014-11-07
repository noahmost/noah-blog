<?php
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //this post means were sending info; 
                                                  //title means this is how it knows to receive; FILER SANTIZIE makes it a string
    $post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING); //were saving the input that went from the post on the blog into these variables

    echo "<p>Title: $title</p>"; //these echo out the content saved in the title variable
    echo "<p>Post: $post</p>"; //these echo out the content saved in the post variable