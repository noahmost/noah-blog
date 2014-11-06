<h1>CREATE BLOG POST</h1>

<form>
    <div>
        <label for="title">  <!--text that is displayed infront of the  text box-->
        Title:  <!-- displays title infront of the title box-->
        </label>
        <input type="text" name="title" />
    </div>
    <div>
        <label for="post">Post: </label> <!-- displays post infront of the textarea-->
        <textarea name="post"></textarea>
        <!--a text area allows the user to type as much text as they want-->
    </div>
    <div>
        <button type="submit">Submit: </button> <!--this is a button that should submit the post to
                                                our database but it basically just refreshes the page-->
    </div>
    
</form>