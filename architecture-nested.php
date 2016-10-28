<?php $page_title = "Architecture Photos"; 
$folder_name = "images/architecture"; ?>
<?php include("header.php") ?>

<div class="container" id="wrapper">
	<div id="gallery-page" style="display:none;">
		<?php include("gallery-script.php") ?>
	</div>
</div>
<script type="text/javascript">

	jQuery(document).ready(function(){

		jQuery("#gallery-page").unitegallery({
			tile_enable_textpanel:true,
			tile_textpanel_title_text_align: "center",
			tiles_space_between_cols: 10,
			lightbox_type: "compact",
			tiles_type:"nested",
			lightbox_slider_image_border_color: "black",
		});

	});

</script>

<?php include("footer.php") ?>
</body>
</html>
