<?php $page_title = "Central Texas Landscape Photos"; 
$folder_name = "images/central-texas-landscapes";
?>
<?php include("header.php") ?>

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
			theme_navigation_type:"arrows",
			lightbox_type: "compact";
		});

	});

</script>

<?php include("footer.php") ?>
</body>
</html>