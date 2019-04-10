            <table class="table mt-5" style="margin-left: 225px;">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Title</th>
                        <th class="text-center" scope="col">Artist</th>
                        <th class="text-center" scope="col">Genre</th>

                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($song as $song)  : ?>
                        <td class="text-center"><?= $song['Title']; ?></td>
                        <td class="text-center"><?= $song['Artist']; ?></td>
                        <td class="text-center" ><?=$song['Song']; ?> </td>
                        <td class="text-center"><?=$song['Genre']; ?> </td>
                        <td>
                            <td>
                            <audio controls> 
                                <source src="7rings.mpeg "type="audio/mpeg" >    
                             </audio></td>
                        
                         
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>