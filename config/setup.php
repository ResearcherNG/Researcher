<?php
/**
 * Created by IntelliJ IDEA.
 * User: OLAYIWOLE
 * Date: 06/09/2017
 * Time: 02:57
 */

include ('config/connection.php');

$site_header = 'We tell compelling stories with data'; // site header message

# functions:
include ('functions/data.php');
include ('functions/template.php');

# constant:
define('D_TEMPLATE', 'template'); // template file for footer

# database query
if (isset($_GET['page']))
{
    $page_id = $_GET['page']; // set var @page_id to value given in the URL
} else{
    $page_id = 'home'; // set var @page_id to 1 or home page
}

# page setup:
$page = page_data($db_conn, $page_id);




