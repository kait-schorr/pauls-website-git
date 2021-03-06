<?php $page_title = "Architecture Photos"; 
$folder_name = "images/architecture"; ?>
<?php include("header.php") ?>
<head>
	<script src='unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js' type='text/javascript'></script>
</head>

<div class="container" id="wrapper">
	<div id="gallery-page" style="display:none;">
		<?php include("gallery-script.php") ?>
	</div>
</div>
<script type="text/javascript">

	jQuery(document).ready(function(){

		jQuery("#gallery-page").unitegallery({
			gallery_theme: "tilesgrid",
			grid_space_between_cols:10,
			grid_space_between_rows:10,
			tile_enable_border:false,
			tile_enable_shadow:false,
			grid_padding:0,
			tile_width:250,
			tile_height:250,
			tile_enable_textpanel:true,
			tile_textpanel_title_text_align: "center",
			theme_navigation_type:"arrows"
		});

	});

</script>

<?php include("footer.php") ?>
</body>
</html>
