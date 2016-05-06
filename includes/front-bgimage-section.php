<?php if( get_header_image() ) { ?><?php global $maxwell_options; ?>
<style type="text/css">
.skt-header-image {
	width: 100vw;
	height: 100vh;
}
.skt-header-image p.header_caption_title {
	position: absolute;
	bottom: 40%;
	width: 100%;
	color: #e93f33;
	font-size: 56px;
	line-height: 48px;
}
.skt-header-image p.header_caption_contect {
	position: absolute;
	bottom: 30%;
	width: 100%;
	color: #f5af3d;
	font-size: 28px;
	line-height: 32px;
}
</style>

<div class="skt-header-image" style="background: url(<?php header_image(); ?>) fixed;">
	<p class="header_caption_title"><?php echo $maxwell_options['header_caption_title']; ?></p>	<p class="header_caption_contect"><?php echo $maxwell_options['header_caption_contect']; ?></p></div>
<?php } ?>
