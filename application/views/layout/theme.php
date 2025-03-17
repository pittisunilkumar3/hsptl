<?php
$theme = $this->customlib->getCurrentTheme();
$rtl = $this->customlib->getRTL();


if ($theme == "default") {
    ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/default/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/default/ss-main.css">
    
    <?php if ($rtl == "yes") { ?>    
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/default/rtl/default.css">
    <?php } ?>
    
    <?php
} elseif ($theme == "red") {
    ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/red/skins/skin-red.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/red/ss-main-red.css">
    
    <?php if ($rtl == "yes") { ?> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/red/rtl/red.css">
    <?php } ?>
    
    <?php
} elseif ($theme == "blue") {
    ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/blue/skins/skin-darkblue.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/blue/ss-main-darkblue.css">
    
    <?php if ($rtl == "yes") { ?> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/blue/rtl/blue.css">
    <?php } ?>
    
    <?php
} elseif ($theme == "gray") {
    ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/gray/skins/skin-light.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/gray/ss-main-light.css">
    
    <?php if ($rtl == "yes") { ?> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/themes/gray/rtl/gray.css">
    <?php } ?>
    
    <?php
} elseif ($theme == "modern") {
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/themes/modern_theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/themes/modern_theme/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/themes/modern_theme/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/themes/modern_theme/css/font-awesome.min.css">
    
    <?php if ($rtl == "yes") { ?> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/rtl/bootstrap-rtl/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>backend/rtl/dist/css/AdminLTE-rtl.min.css">
    <?php } ?>
    
    <?php
}