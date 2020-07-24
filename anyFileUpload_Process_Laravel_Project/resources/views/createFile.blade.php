<h1>Create a File </h1>
<form action = "/files" method = "post" enctype = "multipart/form-data">
 @csrf
    <input type = "text" name = "title" placeholder = "Give a File Title">
    <br>
    <input type = "text" name = "description" placeholder = "description">
    <br>
    <input type = "file" name = "file">
    <br>
    <input type = "submit" value = "submit">
</form>