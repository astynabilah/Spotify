<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-image: linear-gradient(to right, #662548, #1B0A13)">
<div class="container">
<form class="form-horizontal">
<fieldset>


<div class="form-group">
  <div class="" style="margin-left:1050px; margin-top: 30px;">
  <a href="YourCollection/createplaylist" class="btn btn-lg btn-success"><span class=""></span>New Playlist</a> 
  </div>
  <table width="750 " class="table mt-5" style="margin-left: 20px;margin-top: 30px; color : white;float: left;position: relative;">    
                <tr>
                    <th class="text-center" scope="col">Playlist Name</th>
                    <th class="text-center" scope="col">Song</th>
                </tr>
            <tbody>
                <tr style="padding-right: : 100px;"><?php foreach ($song as $song)  : ?>

                    <td class="text-center"><?= $playlist['playlist_name']; ?></td>
                    <td class="text-center"><?= $playlist_detail['song_id']; ?></td>
                    <td>
                        <td>
                        <audio controls>           
                            <source src="assets\songfile\<?= $song['Title']; ?>.mp3 "type="audio/mpeg" > 
                            </source>   
                         </audio></td>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</body>
</html>

    
    
    
</div>

</fieldset>
</form>
</div>
</body>