<?php
//open connection to mysql db
require_once 'connect/connect.inc.php';

//fetch table rows from mysql db
$tenants_query = "SELECT * FROM `tenants` ORDER BY `surname`, `other_name`";
$result = $conn->prepare($tenants_query);
$result->execute();

$tenant_array = array();

while ($tenants = $result->fetch(PDO::FETCH_ASSOC)) {
    $tenant_array[] = $tenants;
}

echo json_encode($tenant_array);

$conn = null;
