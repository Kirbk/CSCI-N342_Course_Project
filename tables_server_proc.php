<?php
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'Proj_DEVICE';
 
// Table's primary key
$primaryKey = 'SerialNum';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'Category', 'dt' => 0 ),
    array( 'db' => 'Manufacturer',  'dt' => 1 ),
    array( 'db' => 'ModelNum',  'dt' => 2 ),
    array( 'db' => 'SerialNum',    'dt' => 3 ),
    array( 'db' => 'LastChecked',     'dt' => 4),
    array( 'db' => 'Location',     'dt' => 5),
    array ( 'db' => 'Surplus', 'dt' => 6)
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'kirbycm',
    'pass' => 'password',
    'db'   => 'kirbycm_db',
    'host' => 'localhost'
);
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>