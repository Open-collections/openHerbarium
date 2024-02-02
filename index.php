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
			<h1>Welcome to Open Herbarium</h1>
                        <p>OpenHerbarium integrates and displays information about plants, fungi, and algae, the organisms preserved in herbaria. Its core resource are specimen records from contributing herbaria,
			but these are made more valuable by integrating them with images, descriptions, identification keys and environmental data. It is this integration that makes OpenHerbarium a valuable resource for different kinds
			of users. It is made possible by <a href="https://symbiota.org/" target="_blank" >Symbiota</a>, the software running the site.
			</p>
			<p>
			Membership and use of OpenHerbarium is free. Individuals can use the "New account" link to get started but some tools need special permissions. To obtain an ability you do not have, or to ask about contributing to OpenHerbarium’s resources,
			contact Mary Barkworth (see below). To add a herbarium, the person in charge should write to Mary asking for an application form.
			</p>
			<p>
			The nomenclatural backbone for OpenHerbarium is developed from floras, <a href="https://powo.science.kew.org/" target="_blank">Plants of the World Online</a> (Seed Plants), 
			<a href="https://www.pteridoportal.org/portal/index.php" target="_blank">Pteridoportal</a> (Pteridophytes), 
			<a href="https://www.tropicos.org/home" target="_blank">Tropicos</a> (bryophytes),
			<a href="https://www.indexfungorum.org/names/names.asp" target="_blank">Index fungorum</a> (fungi, including lichens), 
			and <a href="https://ipni.org/" target="_blank">IPNI</a> (nomenclature of vascular plants). 
			The family treatment for seed plants is <a href="https://academic.oup.com/botlinnean/article/181/1/1/2416499" target="_blank>APGIV</a>. 
			If a name is missing, or if you have questions about the treatment of a name, email Mary Barkworth describing the problem.
			</p>
			<p>
			Questions? Contact <a href="mailto:Mary.Barkworth@usu.edu">Mary Barkworth</a>.
			</p>
			<p>
			We thank the <a href="https://symbiota.org/contact-the-support-hub/" target="_blank">Symbiota team</a>  
			and <a href="https://www.gbif.org/" target="_blank">GBIF</a> 
			for assistance in developing and maintaining OpenHerbarium, 
			<a href="https://services.biokic.asu.edu/" target="_blank">ASU BioKIC Services</a> 
			for hosting the site, and the U.S. National Science Foundation for funding further development of Symbiota through multiple awards.
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
