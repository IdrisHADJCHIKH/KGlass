<div class="container">
    Pour tout changement de pare-brise, Kglass vous offre cette superbe télévision qui fera la joie des enfants !
    <br>
    <br>
    <u class="h2">Caractéristiques : </u>
    <br>
    <br>
    <table class="table table-striped">
        <tbody>
            <?php 
                $tv_id="tv";
                $pdoQueryTv = "SELECT * FROM tv";
                $pdoQueryTv_run = $pdodbcon->query($pdoQueryTv);
                $pdoQueryImgTv = "SELECT * FROM tv WHERE id_img=".$tv_id."";
                $pdoQueryImgTv_run = $pdodbcon->query($pdoQueryImgTv);
                if ($pdoQueryImgTv_run) {
                    foreach($pdoQueryImgTv_run as $row){
                        echo' <div>'.$row->id_img.'ou pas</div>';
                        // echo' <div>'.$row->images.'ou pas</div>';
                    }
                } else {
                    echo'staaaaaaaaaaaaaaaaaaaarf';
                }
                if ($pdoQueryTv_run) {
                        
                    foreach($pdoQueryTv_run as $row) {
                        echo'
                                <tr>
                                    <th scope="row"> '.$row->caracteristique.' </th>
                                    <td> '.$row->descriptif.' </td>
                                </tr>
                            ';
                    }
                } else {
                    echo'no data founded';
                }
            ?>
        </tbody>
    </table>
</div>