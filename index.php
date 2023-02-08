<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<div id="innertext">
		<div class="lang en">
			<h1>Welcome to Open Herarium</h1>
                        <p>OpenHerbarium integrates and displays information about plants, fungi, and algae, the organisms preserved in herbaria. Its core resource are specimen records from contributing herbaria,
			but these are made more valuable by integrating them with images, descriptions, identification keys and environmental data. It is this integration that makes OpenHerbarium a valuable resource for different kinds
			of users. It is made possible by Symbiota, the software running the site.
			</p>
			<p>
			Membership and use of OpenHerbarium is free. Individuals can use the "New account" link to get started but some tools need special permissions. To obtain an ability you do not have, or to ask about contributing to OpenHerbarium’s resources,
			contact Mary Barkworth. Herbaria wishing to contribute should complete the application form and email it to Mary Barkworth as an attachment.
			</p>
			<p>
			The nomenclatural backbone for OpenHerbarium comes from floras, Tropicos (vascular plants, bryophytes), IPNI (vascular plants) and Index fungorum (fungi, including lichens). The family treatment for vascular plants is APGIV. If a name is
			missing, or if you have questions about the treatment of a name, email Mary Barkworth describing the problem.
			</p>
			<p>
			Other questions? Contact Mary Barkworth.
			</p>
			<p>
			Site managed by Mary Barkworth (Utah State University) and Evin Dunn (Northern Arizona University).
			</p>
			<p>
			We thank GBIF and the Biodiversity Information Fund for Asia for funding recent improvements to OpenHerbarium, ASU BioKIC Services for hosting the site, and the US National Science Foundation for funding further development of Symbiota through NSF201705.
			</p>
		</div>
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
	<script type="text/javascript">
		setLanguageDiv();
	</script>
</body>
</html>
