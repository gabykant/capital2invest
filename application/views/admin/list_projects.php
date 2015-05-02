<table class="table table-hover">
<?php
    if (count($projects) > 0) {
        foreach($projects as $list) {
            echo "<tr>";?>
            <td><a href="<?=  base_url();?>dashboard/detail/1"><?php echo $list['lb_name'];?></a></td><td><?php echo $list['first_name'].' '.$list['last_name'];?></td>
            </tr>
        <?php }
    }else {
        echo "<i>Aucun project disponible</i>";
    }?>
</table>