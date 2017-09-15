<?php
/**
 * Created by IntelliJ IDEA.
 * User: OLAYIWOLE
 * Date: 14/09/2017
 * Time: 06:29
 */

function nav_main($db_conn)
{
    $query = "SELECT * FROM navbar";
    $result = mysqli_query($db_conn, $query);

    while ($nav = mysqli_fetch_assoc($result)) { ?>

        <li><a href="<?php echo $nav['nav_id']; ?>"><?php echo $nav['nav_label']; ?></a></li>

    <?php }
}

function nav_footer($db_conn)
{
    $query = "SELECT * FROM navbar";
    $result = mysqli_query($db_conn, $query);

    while ($nav = mysqli_fetch_assoc($result)) { ?>

        <li><a href="<?php echo $nav['nav_id']; ?>"><?php echo $nav['nav_label']; ?></a></li>

    <?php }
}