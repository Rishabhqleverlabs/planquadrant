<?php 
$id=$_GET["id"];
if ($id=="consultation" || $id=="Architecture" || $id=="UrbanPlanning" || $id=="competitionmanagement") {
	$category="projectcategory";
	 $sqlp= "SELECT * FROM project WHERE `projectcategory`='".$_GET['id']."'";
}
else {
$category="subcategory";
 $sqlp= "SELECT * FROM project WHERE `subcategory`='".$_GET['id']."'";
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.planquadrat.com/en/projects/category/2-architektur/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 08:11:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="utf-8">
<!-- 
	Planquadrat

	This website is powered by TYPO3 - inspiring people to share!
	TYPO3 is a free open source Content Management Framework initially created by Kasper Skaarhoj and licensed under GNU/GPL.
	TYPO3 is copyright 1998-2016 of Kasper Skaarhoj. Extensions are copyright of their respective owners.
	Information and contribution at https://typo3.org/
-->

<base >

<title>Projects - Architecture - Planquadrat</title>
<meta name="generator" content="TYPO3 CMS">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="google" content="notranslate">


<!--[if gt IE 8]><!--><link rel="stylesheet" type="text/css" href="../../../css/planquadrataabc.css?1491289743" media="all"><!--<![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="static/planquadrat-ie.css?1491289743" media="all"><![endif]-->


<script src="../../../script/lib/modernizr-2.8.3.min06ac.js?1436353687" type="text/javascript"></script>

<script type="text/javascript">
/*<![CDATA[*/
/*typo3temp/compressor/merged-770726add861e6d760c90a985a6d41e4-717a0881ad24c7bc1fd2e6db877034cf.js*/

function decryptCharcode(n,start,end,offset){n=n+offset;if(offset>0&&n>end){n=start+(n-end-1);}else if(offset<0&&n<start){n=end-(start-n-1);}
return String.fromCharCode(n);}
function decryptString(enc,offset){var dec="";var len=enc.length;for(var i=0;i<len;i++){var n=enc.charCodeAt(i);if(n>=0x2B&&n<=0x3A){dec+=decryptCharcode(n,0x2B,0x3A,offset);}else if(n>=0x40&&n<=0x5A){dec+=decryptCharcode(n,0x40,0x5A,offset);}else if(n>=0x61&&n<=0x7A){dec+=decryptCharcode(n,0x61,0x7A,offset);}else{dec+=enc.charAt(i);}}
return dec;}
function linkTo_UnCryptMailto(s){location.href=decryptString(s,-2);}

/*]]>*/
</script>

<link rel="canonical" href="index.html" />
</head>
<body>
<div class="navigation__mobile hidden-sm hidden-md hidden-lg"><nav class="navigation"><form action="http://www.planquadrat.com/en/suche/" class="navigation--search-form"><input type="search" name="tx_vierwdindexedsearch_pi2[search][sword]" required placeholder="Search"><button type="submit">Search</button></form><a class="navigation--close">×</a><div class="navigation--row"><ul class="navigation--main page-container"><li><a href="../../../index.html" class="navigation--main-link">Start</a></li><li><a href="../../../profile/index.html" class="navigation--main-link">Profile</a></li><li><a href="../../index.html" class="navigation--main-link active">Projects</a><ul class="navigation--mobile-submenu visible-xs"><li><a href="../66-beratung/index.html" class="navigation--main-link">Beratung</a></li><li><a href="../6-wettbewerbe/index.html" class="navigation--main-link">Wettbewerbe</a></li><li><a href="index.html" class="navigation--main-link active">Architecture</a></li><li><a href="../4-generalplanung/index.html" class="navigation--main-link">General Planning</a></li><li><a href="../3-stadtplanung/index.html" class="navigation--main-link">Urban Planning</a></li><li><a href="../68-wettbewerbsmanagement/index.html" class="navigation--main-link">Competition Management</a></li><nav class="language-navigation"><ul><li><a href="http://www.planquadrat.com/projekte/">DE</a></li><li><a href="../../index.html" class="active">EN</a></li></ul></nav></ul></li><li><a href="../../../people/index.html" class="navigation--main-link">People</a></li><li><a href="../../../pin-board/news/index.html" class="navigation--main-link">Pin board</a></li><nav class="language-navigation"><ul><li><a href="http://www.planquadrat.com/projekte/">DE</a></li><li><a href="../../index.html" class="active">EN</a></li></ul></nav></ul></div></nav></div>


<header class="main-header"><div class="page-container logo-container"><a href="../../../index.html#showIntro" class="logo"><img src="../../../../static/img/logo.png" alt="Planquadrat"></a></div><a class="navigation--toggle">Menü</a><nav class="navigation"><form action="http://www.planquadrat.com/en/suche/" class="navigation--search-form"><input type="search" name="tx_vierwdindexedsearch_pi2[search][sword]" required placeholder="Search"><button type="submit">Search</button></form><a href="#" class="navigation--close">×</a><div class="navigation--row"><ul class="navigation--main page-container"><li><a href="../../../index.html" class="navigation--main-link">Start</a></li><li><a href="../../../profile/index.html" class="navigation--main-link">Profile</a></li><li><a href="../../index.php" class="navigation--main-link active">Projects</a><ul class="navigation--mobile-submenu visible-xs"><li><a href="../66-beratung/index.html" class="navigation--main-link">Beratung</a></li><li><a href="../6-wettbewerbe/index.html" class="navigation--main-link">Wettbewerbe</a></li><li><a href="index.html" class="navigation--main-link active">Architecture</a></li><li><a href="../4-generalplanung/index.html" class="navigation--main-link">General Planning</a></li><li><a href="../3-stadtplanung/index.html" class="navigation--main-link">Urban Planning</a></li><li><a href="../68-wettbewerbsmanagement/index.html" class="navigation--main-link">Competition Management</a></li><nav class="language-navigation"><ul><li><a href="http://www.planquadrat.com/projekte/">DE</a></li><li><a href="../../index.html" class="active">EN</a></li></ul></nav></ul></li><li><a href="../../../people/index.html" class="navigation--main-link">People</a></li><li><a href="../../../pin-board/news/index.html" class="navigation--main-link">Pin board</a></li><nav class="language-navigation"><ul><li><a href="http://www.planquadrat.com/projekte/">DE</a></li><li><a href="../../index.html" class="active">EN</a></li></ul></nav></ul></div><div class="navigation--row hidden-xs"><ul class="navigation--submenu page-container"><li><a href="../../index.html#project-typology" class="navigation--filter-toggle navigation--filter-toggle__active">Typologie<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 51 20">
	<polyline points="2,2 26,17 49,2"></polyline>
</svg></a></li><li><a href="#" class="navigation--filter-value"><?php echo $_GET['id']; ?><svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 20 20">
	<line x1="0" y1="0" x2="100%" y2="100%"></line>
	<line x1="100%" y1="0" x2="0" y2="100%"></line>
</svg></a></li><li><a href="../../index.html#project-locality" class="navigation--filter-toggle">Lokalisierung<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 51 20">
	<polyline points="2,2 26,17 49,2"></polyline>
</svg></a></li><li class="navigation--instant-search"><input type="text" name="project-name" placeholder="Search"></li></ul></div><div class="navigation--filter hidden-xs"><ul class="page-container navigation--filter-container" id="project-typology"><li class="navigation--filter-level1"><a href="../6-wettbewerbe/index.html">Wettbewerbe</a></li><li class="navigation--filter-level1"><a class="active" href="index.html">Architecture</a><ul><li><a href="../67-hochhaeuser/index.html">High-Rise Buildings</a></li><li><a href="../12-bildung/index.html">Education</a></li><li><a href="../8-buero/index.html">Office</a></li><li><a href="../10-hotel-und-handel/index.html">Hotel and Commerce</a></li><li><a href="../11-industrie/index.html">Industry</a></li><li><a href="../19-sonderbau/index.html">Special Constructions</a></li><li><a href="../9-wohnungsbau/index.html">Residential Buildings</a></li></ul></li><li class="navigation--filter-level1"><a href="../3-stadtplanung/index.html">Urban Planning</a><ul><li><a href="../16-bebauungsplan/index.html">Development Plan</a></li><li><a href="../13-rahmenplanung/index.html">Framework Planning</a></li><li><a href="../17-stadtentwicklung/index.html">Urban Development</a></li><li><a href="../15-studien/index.html">Studies</a></li></ul></li><li class="navigation--filter-level1"><a href="../68-wettbewerbsmanagement/index.html">Competition Management</a></li></ul></div><div class="navigation--filter hidden-xs"><ul class="page-container navigation--filter-container" id="project-locality"><li class="navigation--filter-level1"><a href="locality/64/index.html">Germany</a></li><li class="navigation--filter-level1"><a href="locality/65/index.html">International</a></li></ul></div></nav></header>

	
<div class="site-wrap"><div class="page-container main-content main-content__submenu-visible"><!--TYPO3SEARCH_begin--><a id="c9"></a><a id="c418"></a>
	<div class="projects">
		<?php
                include('../../../admin/conn.php');
               
             
                $vals = mysqli_query($con,$sqlp);
                $i = 0;    
                while($row = mysqli_fetch_assoc($vals)) {
                  $url="details/show/";
                     $imagess = $row['images'];



$images1 =  explode(' ', $imagess)[1];
$images ="../../../admin/assets/img/blogimg/".$images1;
                   $i++
                          
              ?>
		<a href="../../details/9-2015-rheinufergarage/show/index.php?id=<?php echo $row['id']; ?>" class="project-list__project"><span class="project-list__project-name"><?php echo $row['blogtitle'] ?></span><img src="<?php echo $images ?>"></a>
 <?php } ?>

	


	<!--TYPO3SEARCH_end--></div>

	<footer class="page-container main-footer"><div class="main-footer__col"><p><strong>planquadrat</strong><br><strong>Elfers Geskes Krämer PartG mbB</strong><br>Architekten und Stadtplaner<br>BDA / DASL / dwb<br><a href="javascript:linkTo_UnCryptMailto('ocknvq,ctejkvgmvgpBrncpswcftcv0eqo');" class="mail">architekten<span>&#64;</span><span style="display: none;">remove.this.</span>planquadrat.com</a></p></div><div class="main-footer__col"><p><strong>Head office</strong><br><a href="https://www.google.de/maps/place/Platz+der+Deutschen+Einheit+21,+64293+Darmstadt/@49.87299,8.63186,17z/data=!3m1!4b1!4m2!3m1!1s0x47bd70906d0f4479:0x32b14c2e64817bd0" target="_blank">Platz der Deutschen Einheit 21<br>D-64293&nbsp;Darmstadt</a><br>Tel. +49-6151-81969-0<br>Fax +49-6151-81969-99</p></div><div class="main-footer__col"><p><strong>Subsidiary</strong><br><a href="https://www.google.de/maps/place/Hansaallee+2,+60322+Frankfurt+am+Main" target="_blank">Hansaallee 2<br>D-60322&nbsp;Frankfurt am Main</a><br>Tel. +49-69-9050273-0<br>Fax +49-69-9050273-217</p></div><nav class="footer"><ul class="footer-navigation"><li class="footer-navigation--block"><a href="../../../profile/index.html" class="footer-navigation--link__level1">Profile</a><ul><li><a href="../../../profile/pq-story/index.html">pq Story</a></li><li><a href="../../../profile/pq-international/index.html">pq international</a></li><li><a href="../../../profile/services/index.html">Services</a></li><li><a href="../../../profile/clients/index.html">Clients</a></li><li><a href="../../../profile/awards/index.html">Awards</a></li></ul></li><li class="footer-navigation--block"><a href="../../index.html" class="active footer-navigation--link__level1">Projects</a><ul><li><a href="../66-beratung/index.html">Beratung</a></li><li><a href="../6-wettbewerbe/index.html">Wettbewerbe</a></li><li><a href="index.html" class="active">Architecture</a></li><li><a href="../4-generalplanung/index.html">General Planning</a></li><li><a href="../3-stadtplanung/index.html">Urban Planning</a></li><li><a href="../68-wettbewerbsmanagement/index.html">Competition Management</a></li></ul></li><li class="footer-navigation--block"><a href="../../../people/index.html" class="footer-navigation--link__level1">People</a><ul><li><a href="../../../people/partner/index.html">Partner</a></li><li><a href="../../../people/management/index.html">Management</a></li><li><a href="../../../people/project-managers/index.html">Project managers</a></li><li><a href="../../../people/team/index.html">Team</a></li><li><a href="../../../pin-board/career/index.html">Career</a></li></ul></li><li class="footer-navigation--block"><a href="../../../pin-board/news/index.html" class="footer-navigation--link__level1">Pin board</a><ul><li><a href="../../../pin-board/career/index.html">Career</a></li><li><a href="../../../pin-board/press/index.html">Press</a></li></ul></li><li class="footer-navigation--block"><a href="../../../index.html" class="footer-navigation--link__level1">PQ</a><ul><li><a href="../../../impressum/index.html">Impressum</a></li><li><a href="../../../datenschutz/index.html">Datenschutz</a></li><li><a href="../../../suche/index.html">Suche</a></li></ul></li></ul></nav>


	</footer></div><div class="intro intro--submenu-visible"><div class="intro__overlay"></div><div class="page-container"><div class="intro__container"><div class="intro__content"><a id="c316"></a><a id="c414"></a><p>We are planquadrat. <br />Architects and urban planners. &nbsp; 
</p>
<p>We are competent. <br />We are well-organised. &nbsp; 
</p>
<p>We look forward to meeting you.</p></div></div></div></div>

<script async src="../../../script/planquadrat07a0.js?1494228967" type="text/javascript"></script>
<script type="text/javascript">
/*<![CDATA[*/
/*typo3temp/compressor/merged-2daa2608ace2e9620f0902484752d5d4-5515d922be721954537de0df62398e8a.js*/

document.addEventListener('DOMContentLoaded',function(){window.isReady=true;});

/*]]>*/
</script>

</body>

<!-- Mirrored from www.planquadrat.com/en/projects/category/2-architektur/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 08:11:53 GMT -->
</html>