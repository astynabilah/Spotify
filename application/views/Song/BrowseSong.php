            <body style="background-image: linear-gradient(to right, #3D3C4F, #0B0B0E);"> 
            <img src="assets/genre/zara.PNG" style="margin-left: 18.5%; margin-top: 30px;clear: right;float: left;position: relative;">
            
            <table width="750 " class="table mt-5" style="margin-left: 20px;margin-top: 30px; color : white;float: left;position: relative;">
                
               
                    <tr>
                        <th class="text-center" scope="col">Title</th>
                        <th class="text-center" scope="col">Artist</th>
                        
                    </tr>
                <tbody>
                    <tr style="padding-right: : 100px;"><?php foreach ($browsesong as $browsesong)  : ?>

                        <td class="text-center"><?= $song['Title']; ?></td>
                        <td class="text-center"><?= $song['Artist']; ?></td>
                      
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