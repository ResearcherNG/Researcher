<?php
/**
 * Created by IntelliJ IDEA.
 * User: OLAYIWOLE
 * Date: 14/09/2017
 * Time: 04:47
 */

function page_data($db_conn, $page_id)
{
    if (is_numeric($page_id))
    {
        $cond = "WHERE id = $page_id";
    }else {
        $cond = "WHERE slug = '$page_id'";
    }
    $query = "SELECT * FROM pages $cond";
    $result = mysqli_query($db_conn, $query);

    $data = mysqli_fetch_assoc($result);

    return $data;

}