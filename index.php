<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//FR"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
   	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1.4; user-scalable=1;" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
	<title>GeoMagna</title>
	<script type="text/javascript"
	    src="http://maps.google.com/maps/api/js?sensor=true">
	</script>
	<script type="text/javascript">
	  function initialize() {
	    var latlng = new google.maps.LatLng(43.4885, -1.4736);
	    var myOptions = {
	      zoom: 17,
	      center: latlng,
	      mapTypeId: google.maps.MapTypeId.SATELLITE
	    };
	    var map = new google.maps.Map(document.getElementById("map_canvas"),
	        myOptions);
	  }
	</script>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	
	<script src="http://cdn.jquerytools.org/1.2.5/all/jquery.tools.min.js" type="text/javascript"></script>
	
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" title="main" charset="utf-8">
</head>
<body onload="initialize()">
	<div id="layout">
		<div id="header">
			<div id="menu">
				<ul class="menu">
					<li><a id="t1" class="" href="#accueil" title="Accueil">Accueil</a>&#124;</li>
					<li><a id="t2" class="" href="#prerequis" title="Pré-requis">Pr&eacute;-requis</a>&#124;</li>
					<li><a id="t3" class="" href="#plusdinfo" title="Plus d'info">Tout savoir</a>&#124;</li>
					<li><a id="t4" class="" href="#reglement" title="Réglement">R&egrave;glement</a>&#124;</li>
					<li><a id="t5" class="" href="#contact" title="Contacts">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="separators top"></div>
		<div id="content">
			<span id="col1">
				<div class="panes">
					<div class="pane accueil">
						<p>Pour sa première édition la GeoMagna s’habille aux couleurs 
						de la ville de Bayonne et de l’association «1 Maillot Pour la Vie»
						avec la complicité de sportifs de haut niveau.</p>
						<img src="img/parrain.png" alt="Parrainée par Nathalie Tauziat et Pepito Elhorga" />
						<p>Serez-vous capable de résoudre les énigmes, seul ou en équipe
						en un minimum de temps ?</p>
						<h3>De nombreux lots à gagner !</h3>
						<p class="marge">Promesse de don 2€* minimum par participant</p>
						<h3 class="slim">Les fonds collectés seront versés à l’association
						«1 Maillot Pour la Vie» au profit des enfants malades.</h3>
						<p>Animations gratuites pour les enfants pendant toute la durée de la course.</p>
						<h6>* Règlement des dons sur place le jour de l’évènement.</h6>
					</div>

					<div class="pane prerequis">
						<h3>Afin pouvoir participer à la GeoMagna : </h3>
						<p>Il est nécessaire de posséder au moins un iPhone ou iPad compatible, par participant ou par équipe.</p>
<p>Muni d'une connexion internet valide, Edge ou 3G.</p>
						<h3>Liste des iPhone/iPad compatibles :</h3>
						<p class="marge">iPhone 3G</p>
						<p class="marge">iPhone 3GS</p>
						<p class="marge">iPhone 4</p>
						<p class="marge">iPad 3G</p>
						<p class="marge">iPad 2 3G</p>
						<ul class="require">
							<li><img src="img/irequier1.png" /></li>
							<li><img src="img/irequier2.png" /></li>
						</ul>
						<p></p>
						<p>Savoir se servir d'1 iPhone ou d'1 iPad.</p> 
						<p>Possibilité de se mettre en équipe - sans limitation de participant - 1 appareil par équipe.</p>
						<p>Tous les participants doivent s'inscrire !</p>
					</div>
					<div class="pane plusdinfo">
						<div class="justify">
						<p>Concept de la chasse au trésor que nous connaissons tous, amélioré via les nouvelles technologies d'information et de communication (TIC)</p>
						<h3>Originalité :</h3>
						<p>Chasse au Trésor assistée par ordinateur (virtuelle, dématérialisée). Un iPhone 3G ou Tablette iPad 3G sont nécessaire afin d'y participer. Aucune autre matérialisation n'est nécessaire dans le temps et l'espace.</p>
						<h3>Fonctionnement :</h3>
						<p class="slim">Se déroule en extérieur ou en intérieur, sans limitation d'échelle et réalisable de chez soi jusqu'en très haute altitude. Demande des connaissances minimales en informatique ainsi que sur les systèmes de localisation (ex : utilisation d'un système GPS)</p>
						<p>Basé sur la géo localisation des appareils et autres relatifs à des technologies (GPS, Boussole, accéléromètre, Caméra arrière / avant, Réalité augmentée, Gyroscope, ...) et des langages de programmation émergeant du web.</p>
						<p>Les informations sont calculées en quatre dimensions puis, utilisées pour chaque participant en fonction de la date et de l'heure, de sa localisation initiale définie par ses coordonnées GPS, de son altitude par rapport au niveau de la mer, de l'orientation cardinale, de sa vitesse de déplacement. Les participants n'affichent pas le même contenu en fonction des informations calculées précitées.</p>
						<p>Les participants répondent à différentes énigmes stockées sur internet.</p>
						<h3>Déroulement :</h3>
						<p>Le tracé du parcours est défini et se fait à pied. Le nombre de participant est illimité. Ces derniers sont invités à se connecter seul où en équipe, à lancer l’application depuis une zone commune, afin de commencer la course. Les dates et heures du top départ sont préalablement stockées sur les iPad et les iPhone des participants inscrits.</p>
						<p>Chaque énigme résolue entraine la suivante permettant ainsi au participant d'avancer dans la « GeoMagna »</p>
						<p>Est déclaré gagnant, le premier participant qui a résolu toutes les énigmes ... exemples :</p>
						<ul>
						<li><p>Enigme d'Orientation :<br/>« Vous êtes à 120 mètres de la cible »</p></li>
						<li><p>Mathématiques :<br/> « Combien y a t-il d'arêtes dans une pyramide ? »</p></li>
						<li><p>Logique :<br/> « 5 égale combien ? Si 1=5 / 2=25 / 3=325 / 4=4325 / 5=? »</p></li>
						<li><p>Déduction :<br/> « Dans un tiroir se trouvent 10 chaussettes bleues et 10 chaussettes rouges. Combien dois- je prendre de chaussettes dans mon tiroir pour être certain d'en avoir une paire de la même couleur ? »</p></li>
						<li class="clear"><p>Patience :<br/> « Attendez 2 mn !»</p></li>
						<li class="clear"><p>Rapidite :<br/> « Allez à plus de 30 km/h »</p></li>
						</ul></div>
					</div>
					<div class="pane reglement">
						<div class="justify">
						<h3 id="reglement">REGLEMENT</h3>
						<p>Déposé chez Maîtres Samain et Ricard - Huissiers de Justice– 31/33 Rue Deparcieux, 75014 Paris.</p>

						<h3>Article 1 :</h3>
						<p>Organisation d'une course au trésor dite : « GeoMagna » à but caritatif, en partenariat avec la Mairie de Bayonne et avec la participation de partenaires privés.</p>
						<h3>Article 2 : Définition d'une GeoMagna :</h3>
						<p class="slim">Chasse au Trésor assistée par ordinateur (virtuelle, dématérialisée) demande des connaissances minimales en informatique ainsi que sur les systèmes de localisation. Basée sur la géo localisation des appareils et autres relatifs à des technologies (GPS, Boussole, accéléromètre, Caméra arrière / avant, Réalité augmentée,Gyroscope, ...) et des langages de programmation émergeant du web (ex : html, JavaScript, PHP, etc...) Un iPhone 3G minimum ou tablette iPad 3G, sont obligatoires afin de pouvoir y participer. Aucune autre matérialisation n'est nécessaire dans le temps ou l'espace. Les participants répondent à différentes énigmes qui sont stockées sur internet (une connexion internet valide est requise). Les informations sont calculées en quatre dimensions puis utilisées pour chaque participant en fonction de la date et de l'heure, de sa localisation initiale définie par ses coordonnées GPS, de son altitude par rapport au niveau de la mer, de l'orientation portrait et paysage de l'appareil, de sa vitesse de déplacement de son orientation cardinal, de l'angle de l'appareil, donc ceux du participant. Les participants n'affichent pas le même contenu selon les paramètres précités.</p>
						<h3>Article 3 :</h3>
						<p>Le nombre de participant est illimité. La participation à cette GeoMagna est ouverte à toute personne majeure ou mineure accompagnée, quelque soit sa nationalité à l'exception des organisateurs ou partenaires et de leur personnel. Le participant atteste qu'il n'a pas fait l'objet d'une interdiction de séjour, par décision de justice, dans la commune de Bayonne et/ou dans le département des Pyrénées Atlantique. L'attention des candidats est attiré sur le fait que la participation à une course peut les exposer à des situations de stress. Aussi, toute personne souhaitant participer à cet évènement et sachant qu'elle présente une hypersensibilité au stress ou d'autres problèmes de santé que cette course pourrait aggraver, est expressément invité à ne pas participer au jeu, les organisateurs ne pouvant être tenus pour responsables.
						Toute personne voulant participer au jeu devra obligatoirement, individuellement et préalablement s'inscrire sur le site : http://inscription.devoralive.com . Une promesse de don d'un minimum de deux euros (2€) est demandée à chaque inscription et sera versé dans son intégralité, à l'association « Un Maillot pour la Vie ». Le versement de la participation aura lieu le 8 mai 2011, Place Mail Chaho Pelletier 64100 Bayonne.</p>
						<h3>Article 4 :</h3>
						<p>La GeoMagna se déroule en extérieur et à pied le dimanche 8 Mai 2011 à 14h30. Le départ se fait en simultané Place Mail Chaho Pelletier. Les participants sont invités à se connecter, seul ou en équipe, au site internet dédié à cet événement, afin de commencer la course. La date et l'heure du départ sont préalablement défini sur ce site internet. Cette course prend fin le même jour à 16h30, Place Mail Chaho Pelletier lorsqu'un joueur à
						satisfait les conditions de l'article 6 du présent règlement. </p>
						<h3>Article 5 :
						Définition des lots récompensant une personne ou son équipe :</h3>
						<p>
							<ul>
								<li><p>* 1er Prix d’une valeur approximative de 540 € TTC : 1 Jéroboam de Veuve Clicquot Brut Carte Jaune (Champagne AOC- Vin blanc – 3L – Vol 12°) Prix public indicatif : 225 euros TTC + 1 Enceinte ALTEC Lansing octiv AIR M812 Transmission sans fil, Syntonisateur FM intégré, Accès distant, Socle universel pour iPod,
						Prise d’entrée Aux, prix public indicatif : 280 euros TTC + 1 iPod Shuffle 4Go 3ème génération (Marque : Apple - Catégorie : Baladeur MP3 - Capacité : 4 Go - Format de support : AAC (16 à 320 kbits/s) - Interface : USB 2.0 - Dimension en mm : 45,2 x 7,8 x 17,5 mm - Poids : 10,7 g - Alimentation : Batterie Lithium Polymer) Prix public indicatif : 35 euros TTC.</p></li>

								<li><p>* 2ème Prix d’une valeur approximative de 249 € TTC : 1 bouteille de Veuve Clicquot Brut Carte Jaune (Champagne AOC – Vin blanc – 75 cl – Vol 12°) Prix public indicatif : 34 euros TTC + 1 Station d’accueil JBL OnStage 400ID Noir (Station d'accueil iPod. Puissance : 2 x 15 watts + 30 watts (subwoofer). Station d’accueil haute performance pour iPod. Compatibilité totale avec iPod et iTunes. Commandes intuitives de la musique et de la navigation et télécommande IR) Prix public indicatif : 180 euros TTC + 1 iPod Shuffle 4Go 3ème génération (Marque : Apple - Catégorie : Baladeur MP3 - Capacité : 4 Go - Format de support : AAC (16 à 320 kbits/s) - Interface : USB 2.0 - Dimension en mm : 45,2 x 7,8 x 17,5 mm - Poids : 10,7 g - Alimentation : Batterie Lithium Polymer) Prix public indicatif : 35 euros TTC.</p></li>

								<li><p>* 3ème Prix d’une valeur approximative de 124 € TTC : 1 bouteille de Veuve Clicquot Brut Carte Jaune (Champagne AOC – Vin blanc – 75 cl – Vol 12°) Prix public indicatif : 34 euros TTC + 2 iPod Shuffle 4Go 3ème génération (Marque : Apple - Catégorie : Baladeur MP3 - Capacité : 4 Go - Format de support : AAC (16 à 320
						kbits/s) - Interface : USB 2.0 - Dimension en mm : 45,2 x 7,8 x 17,5 mm - Poids : 10,7 g - Alimentation : Batterie Lithium Polymer) Prix public indicatif : 70 euros TTC + 1 Coque iPhone 4 Flower Vest (Etui Silicone pour iPhone 4) Prix public indicatif : 20 euros TTC. En aucun cas ces prix ne peuvent être échangés contre leur valeur monétaire. Les prix seront remis aux gagnants ou à leur équipe à la fin de la course, le 08 Mai 2011.</p></li>
							</ul>
						<p>En cas de non présentation d'un lauréat à la remise des prix ou en cas de non réclamation des lots, l'organisateur prendra contact avec lui via les informations relatives à son inscription afin de lui délivrer son lot. En cas d'échec, l'organisateur se réserve le droit de remettre ces derniers en jeu lors d'une prochaine édition.<br />
						</p>
						<h3>Article 6 :</h3>
						<p>A chaque énigme résolue, les participants avancent dans la course, permettant ainsi, l'accès à l'énigme suivante. Les différentes énigmes sont de types d'orientation, de mathématiques, de logique, de déduction, de rapidité, de patience … Sera réputée gagnante la première personne ou la première équipe qui a résolu toutes les énigmes dans un minimum de temps. Cette personne ou cette équipe est l'unique propriétaire du prix.</p>
						<h3>Article 7 :</h3>
						<p>Les organisateurs précisent expressément qu'ils déclinent toute responsabilité si des dégradations étaient commises sur des propriétés privées ou publiques ; ou si des personnes privés ou morales étaient lésées du fait de la recherche des solutions d'énigmes.</p>
						<h3>Article 8 :</h3>
						<p>Le fait de participer à ce jeu, implique l'acceptation pleine et entière du présent règlement déposé chez Maîtres Samain et Ricard – 31/33 Rue Deparcieux – 75014 Paris. Ce règlement peut être consulté sur le site internet : http://inscription.devoralive.com</p>
						<h3>Article 9 :</h3>
						<p>Les gagnants autorisent les organisateurs à publier et à utiliser ses noms et prénoms, sa photo, et le récit de cette course dite « GeoMagna » dans la presse écrite, sur internet et dans les reportages télévisées.</p>
						<h3>Article 10 :</h3>
						<p>Conformément à la loi informatique et liberté du 6 Janvier 1978, les informations concernant les participants ne sont ni vendues, ni louées, ni échangées et restent accessibles et modifiables.</p>
						<h3>Article 11 :</h3>
						<p>Au cas ou le trésor ne serait pas trouvé, le dimanche 8 Mai 2011à Bayonne, celui ci sera remis en jeu lors d'une prochaine manifestation.</p>
						<h3>Article 12 :</h3>
						<p>Il est interdit d'enlever les indices laissés sur les sites.</p>
						<h3>Article 13 :</h3>
						<p>En cas d'égalité entre deux participants ou deux équipes gagnantes, une énigme subsidiaire sera posée.</p>
						<h3>Article 14 :</h3>
						<p>Les organisateurs se réservent le droit de modifier ou d'annuler purement et simplement la « GeoMagna » édition 64, en raison de tout évènement indépendant de leur volonté.</p>
						<h3>Article 15 :</h3>
						<p>Le présent règlement est soumis exclusivement à la loi française.</p>
						<h3>Article 16 :</h3>
						<p>La responsabilité des organisateurs ne peut en aucun cas être engagée en cas de dommages corporels, vols, pertes occasionnées lors de cet évènement. A ce titre les participants peuvent souscrire toutes les polices d'assurance utiles.
						Les dommages trouvant leurs origines dans une faute d'un participant ou fait d'un tiers ne pourront faire l'objet d'une quelconque indemnisation de la part des organisateurs. Le participant au jeu déclare disposer d'une assurance responsabilité civile couvrant l'ensemble des dommages qu'il serait susceptible de causer à lui même ainsi qu'aux tiers.</p>
						</div>
					</div>
					<div class="pane contact">
						<div id="error"></div>
						<form id="contact" action="contact_submit.php" method="post" accept-charset="utf-8">
							<p>
								<label for="service">Service :</label>
								<select name="service" id="service" size="1">
									<option value="presse" select="selected">Presse</option>
									<option value="technique">Technique</option>	
								</select>
							</p>
							<p>
								<label for="email">Votre Email :</label>
								<input class="input" type="email" name="email" id="email" required="required" />
							</p>
							<p>
								<label for="nom">Nom :</label>
								<input class="input" type="text" name="nom" value="" id="nom" />
							</p>
							<p>
								<label for="Prénom">Prénom :</label>
								<input class="input" type="text" name="prenom" value="" id="prenom">
							</p>
							<p>
								<label for="text">Votre question :</label>
							</p>
							<p>
								<textarea name="text" required="required"></textarea>
							</p>
							<p><input class="submit" type="submit" value="Continuer &rarr;"></p>
						</form>
						</div>
				</div>
			</span>
			<span id="col2">
				<a href="http://www.unmaillotpourlavie.com" title="liens pour le site de l'association un maillot ">
					<img src="img/1mplv.png" alt="logo de l'association un maillot pour la vie" />
				</a>
				<img src="img/date.png" class="large" alt="date du rendez-vous le dimanche 8 mai 2011" />
			</span>
			<span id="col3">
				<div class="inscription">
					
					
<?php
if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') ) {
        echo '<div id="inscription_btn"><a href="inscription.html" title="inscription à la GeoMagna"><img src="img/inscription.png" alt="inscription" /></a></div>';
    } else {
        echo '<a href="http://inscription.devoralive.com/inscription_ie.php" target="_blank"><img src="img/inscription.png" alt="inscription" /></a>';
    }
?>
							
						
					<div id="inscription_form" style="display: none;">
						<div id="inscription_error"></div>
						<form class="inscription_form" action="inscription_submit.php" method="post" accept-charset="utf-8">
							<p>
								<label for="email">Email :</label>
							<br />
								<input class="input" type="email" name="email" id="email" required="required" />
							</p>
							<p>
								<select id="euro" name="euro">
									<option value="2">2 &#8364; ( minimum )</option>
									<option value="3" selected> 3 &#8364; ( sur place ) </option>
									<option value="4">4 &#8364;</option>
									<option value="5">5 &#8364;</option>
									<option value="6">6 &#8364;</option>
									<option value="7">7 &#8364;</option>
									<option value="8">8 &#8364;</option>
									<option value="9">9 &#8364;</option>
									<option value="10">10 &#8364;</option>
									<option value="11">11 &#8364;</option>
									<option value="12">12 &#8364;</option>
									<option value="13">13 &#8364;</option>
									<option value="14">14 &#8364;</option>
									<option value="15">15 &#8364;</option>
									<option value="16">16 &#8364;</option>
									<option value="17">17 &#8364;</option>
									<option value="18">18 &#8364;</option>
									<option value="19">19 &#8364;</option>
									<option value="20">20 &#8364;</option>
									<option value="25">25 &#8364;</option>
									<option value="30">30 &#8364;</option>
									<option value="35">35 &#8364;</option>
									<option value="40">40 &#8364;</option>
									<option value="45">45 &#8364;</option>
									<option value="50">50 &#8364;</option>
									<option value="60">60 &#8364;</option>
									<option value="70">70 &#8364;</option>
									<option value="80">80 &#8364;</option>
									<option value="90">90 &#8364;</option>
									<option value="100">100 &#8364;</option>
									<option value="plusde100">+ de 100 &#8364;</option>
								</select>
							</p>
							<p>
								<label for="prenom">Prenom :</label>
							<br />
								<input class="input" type="text" name="prenom" id="prenom" required="required" />
							</p>
							<p>
								<label for="nom">Nom :</label>
							<br />
								<input class="input" type="text" name="nom" id="nom" required="required" />
							</p>
							<p>
								<label for="password">Mot de passe :</label>
							<br />
								<input class="input" type="password" name="password" value="" id="password" />
							</p>
							<p>
								<label for="password_bis">Confirmer mot de passe :</label>
							<br />
								<input class="input" type="password" name="password_bis" value="" id="password_bis">
							</p>
							<input type="checkbox" name="accepte" value="Yes" />J'ai lu et j'accepte les conditions du <a href="#reglement">r&egrave;glement</a>
							<p><input class="submit" type="submit" value="Continuer &rarr;"></p>
						</form>
					</div>
					<div id="map">
						<div id="map_canvas"></div>
					</div>
				</div>
			</span>
			<span class="clear"></span>
		</div>
		<div id="footer">
			<div class="separators bottom"></div>
				<div id="logo">
					<a href="http://www.linternaute.com/restaurant/restaurant/15693/le-chaudron.shtml" title="Lien vers le site L'internaute">
						<img src="img2/chaudron.png" class="img right" id="chaudron" alt="logo du chaudron" />
					</a>
					
					<a href="http://www.bayonne.fr" title="Lien vers le site internet de la ville de Bayonne">
						<img src="img2/Bayonne.png" class="img" id="bayonne" alt="logo ville de Bayonne" />
					</a>

					<a href="http://www.carrefour.fr" title="Lien vers le site internet de Carrefour">
						<img src="img2/carrefourmarket.png" class="img" id="carrefour" alt="logo Carrefour" />
					</a>

					<a href="http://www.devoralive.com" title="Lien vers le site internet de Devoralive">
						<img src="img2/devoralive.png" class="img" id="devoralive" alt="logo devORalive" />
					</a>

					<a href="http://www.iconcept.fr" title="Lien vers le site internet de iconcept">
						<img src="img2/iconcept.png" class="img" id="iconcept" alt="logo de iconcept" />
					</a>
					
					<a href="http://www.facebook.com/NRJCoteBasque" title="Lien vers le site internet de NRJ cote basque">
						<img src="img2/nrj.png" class="img-nrj" id="nrj" alt="logo de NRJ cote basque" />
					</a>

					<br />
					
					<a href="http://www.teratlantik.fr" title="Lien vers le site internet de ter'Atlantik">
						<img src="img2/teratlantik.png" class="img right" id="teratlantik" alt="logo de ter'Atlantik" />
					</a>
					
					<a href="http://www.oquai.com" title="Lien vers le site internet de oquai">
						<img src="img2/oquai.png" class="img" id="oquai" alt="logo de oquai" />
					</a>

					<a href="http://www.duosun.com" title="Lien vers le site internet de duosun">
						<img src="img2/duosun.png" class="img" id="duosun" alt="logo de duosun" />
					</a>
					
					<a href="http://www.boomacom.com" title="Lien vers le site internet de Boomacom">
						<img src="img2/boomacom_logo.png" class="img" id="boomacom" alt="logo de Boomacom" />
					</a>
					
					<a href="http://tokyom.free.fr" title="Lien vers le site internet de tokyom">
						<img src="img2/tokyom.png" class="img" id="tokyom" alt="logo de tokyom" />
					</a>
				</div>
		</div>
	</div>
	<script src="js/ajax.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22467092-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>
