<?php
// Modern Theme for Hospital Management System
$rtl = $this->customlib->getRTL();
?>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/themes/modern_theme/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/themes/modern_theme/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/themes/modern_theme/css/all.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/themes/modern_theme/css/font-awesome.min.css">

<?php if ($rtl == "yes") { ?>    
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/rtl/bootstrap-rtl/css/bootstrap-rtl.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/rtl/dist/css/AdminLTE-rtl.min.css">
<?php } ?>