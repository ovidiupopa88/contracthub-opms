<?php

require_once('../../auth/server/config.php');
//$db is created in the config

$query = $db->query("SELECT count(id) FROM positions");
$totalRecords = $query->fetch_row()[0];
 
$length = $_GET['length'];
$start = $_GET['start'];
 
$sql = "SELECT id, title, description, status, date_added, client_id, client_contact_id, recruiter_id, date_closed, quantity, location, language, urgency FROM positions";
 
if (isset($_GET['search']) && !empty($_GET['search']['value'])) {
    $search = $_GET['search']['value'];
    $sql .= " WHERE title like '%$search%' OR description like '%$search%'";
}
 
$sql .= " LIMIT $start, $length";
 
$query = $db->query($sql);
//echo $sql;
$result = [];
while ($row = $query->fetch_assoc()) {
    
    $result[] = [
        $row['id'],
        $row['status'],
        $row['title'],
        //$row['description'],
        "<button type=\"button\" class=\"btn btn-block btn-default btn-xs\" id=\"btn_view_".$row['id']."\">View</button>",
        $row['client_id'],
        $row['client_contact_id'],
        $row['date_added'],
        $row['recruiter_id'],
        "<button type=\"button\" class=\"btn btn-block btn-default btn-xs\" id=\"btn_edit_".$row['id']."\">Edit</button>",
    ];

    
    //print_r($result);
}

echo json_encode([
    'draw' => $_GET['draw'],
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $totalRecords,
    'data' => $result
]);

?>