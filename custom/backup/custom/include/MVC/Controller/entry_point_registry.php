<?php
$entry_point_registry['formLetter'] = array('file' => 'modules/AOS_PDF_Templates/formLetterPdf.php' , 'auth' => '1'); 
$entry_point_registry['generatePdf'] = array('file' => 'modules/AOS_PDF_Templates/generatePdf.php' , 'auth' => '1'); 
$entry_point_registry['Reschedule'] = array('file' => 'modules/Calls_Reschedule/Reschedule_popup.php' , 'auth' => '1'); 
$entry_point_registry['Reschedule2'] = array('file' => 'modules/Calls/Reschedule.php' , 'auth' => '1');
$entry_point_registry['social'] = array('file' => 'include/social/get_data.php' , 'auth' => '1');
$entry_point_registry['social_reader'] = array('file' => 'include/social/get_feed_data.php' , 'auth' => '1');
$entry_point_registry['add_dash_page'] = array('file' => 'modules/Home/AddDashboardPages.php' , 'auth' => '1');
$entry_point_registry['retrieve_dash_page'] = array('file' => 'include/MySugar/retrieve_dash_page.php' , 'auth' => '1');
$entry_point_registry['remove_dash_page'] = array('file' => 'modules/Home/RemoveDashboardPages.php' , 'auth' => '1');
$entry_point_registry['rename_dash_page'] = array('file' => 'modules/Home/RenameDashboardPages.php' , 'auth' => '1');
?>