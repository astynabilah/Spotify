            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Title</th>
                        <th class="text-center" scope="col">Artist</th>
                        <th class="text-center" scope="col">Play</th>

                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($song as $song)  : ?>
                        <td class="text-center"><?= $song['Title']; ?></td>
                        <td class="text-center"><?= $song['Artist']; ?></td>
                        <td class="text-center" ><?=$song['Song']; ?> 
                            <audio controls> 
                                <source src="<? php  echo $_GET['Song'];?> "type="audio/mpeg" >
                                </source>
                         
                             </audio></td>
                        
                         
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>