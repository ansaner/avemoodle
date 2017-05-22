<?php 
$fontsdir = $CFG->wwwroot.'/theme/'. $PAGE->theme->name.'/fonts/'; 
?>
<style type="text/css">
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('<?php echo $fontsdir ?>glyphicons-halflings-regular.eot');
  src: url('<?php echo $fontsdir ?>glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('<?php echo $fontsdir ?>glyphicons-halflings-regular.woff') format('woff'), url('<?php echo $fontsdir ?>glyphicons-halflings-regular.ttf') format('truetype'), url('<?php echo $fontsdir ?>glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
}
</style>