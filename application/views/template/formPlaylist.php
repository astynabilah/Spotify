<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body style="background-image: linear-gradient(to right, #1d0121, #1B0A13)">
        <form class="form-horizontal" action="/action_page.php" style="margin:center;">
        <div class="form-group" style="margin-left:10px;">
            <h1 style="color: white; margin-top: 100px; margin-left:67px; font-family: Proxima Nova Rg;color: #9B9896">Enter Playlist Name:</h1>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="playlistname" name="playlistname"placeholder="Playlist Name" style="margin-left:40px;height:100px;color:white;background-color:black; font-size:400%">
                <input type="text" class="form-control" id="playlistname" placeholder="Playlist Name" style="margin-left:40px;height:100px;color:white;background-color:black; font-size:400%; font-family: Berlin Sans FB; border: 0">
            </div>
        </div>
        <div class="form-group"> 
            <button type="submit" class="btn btn-default" style="margin-left: 80px; background-color: black; color: white; border: 0">Create</button>
            <script>function goBack() { window.history.back();}</script>
            <a onclick="goBack()"  type="submit" class="btn btn-default" style="background-color: black; color: white; border: 0">Cancel</a>
        </div>
        </form>
    </body>
</html>