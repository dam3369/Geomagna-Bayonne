<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Géomagna</title>
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;" />
	<link rel="apple-touch-icon" href="img/icone/icon.png" />
	<style type="text/css" media="screen">@import "jqtouch.min.css";</style>
	<style type="text/css" media="screen">@import "theme.min.css";</style>
	<script src="jquery.1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="jqtouch.min.js" type="application/x-javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		var jQT = new $.jQTouch({
			icon: 'jqtouch.png',
			addGlossToIcon: false,
			startupScreen: 'jqt_startup.png',
			statusBar: 'black',
		});
		// Some sample Javascript functions:
		$(function(){
			// Show a swipe event on swipe test
			$('#swipeme').swipe(function(evt, data) {                
				$(this).html('You swiped <strong>' + data.direction + '</strong>!');	
			});
			$('a[target="_blank"]').click(function() {
				if (confirm('This link opens in a new window.')) {
	 				return true;
	 			} else {
					$(this).removeClass('active');
					return false;
				}
			});	
			// Page animation callback events
	 		$('#pageevents').
	  		bind('pageAnimationStart', function(e, info){ 
				$(this).find('.info').append('Started animating ' + info.direction + '&hellip; ');
	  		}).
	 		bind('pageAnimationEnd', function(e, info){
				$(this).find('.info').append(' finished animating ' + info.direction + '.<br /><br />');
	 		});
	 		// Page animations end with AJAX callback event, example 1 (load remote HTML only first time)
			$('#callback').bind('pageAnimationEnd', function(e, info){
	 			if (!$(this).data('loaded')) {	                      // Make sure the data hasn't already been loaded (we'll set 'loaded' to true a couple lines further down)
					$(this).append($('<div>Loading</div>').         // Append a placeholder in case the remote HTML takes its sweet time making it back
					load('ajax.html .info', function() {        // Overwrite the "Loading" placeholder text with the remote HTML
						$(this).parent().data('loaded', true);  // Set the 'loaded' var to true so we know not to re-load the HTML next time the #callback div animation ends
		  			}));
				}
			});
	        // Orientation callback event
	        $('body').bind('turn', function(e, data){
	        	$('#orient').html('Orientation: ' + data.orientation);
	        });
		});
	</script>
	<style type="text/css" media="screen">
		body.fullscreen #home .info {
	    	display: none;
		}
	    #about {
	    	padding: 100px 10px 40px;
	        text-shadow: rgba(255, 255, 255, 0.3) 0px -1px 0;
	        font-size: 13px;
	        text-align: center;
	        background: #161618;
		}
	    #about p {
	    	margin-bottom: 8px;
	    }
	    #about a {
	       color: #fff;
	       font-weight: bold;
	       text-decoration: none;
	   }
	</style>
</head>
<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
	<div id="animations">
	<!-- RIEN TOUCHER AU DESSUS -->            
	    <ul>
			<li id="grille8"><center><a class="flip" href="#presentation"><img src=../img/ip-presentation.png><br /><h6>Présentation</h6></a></center></li>
			<li id="grille7"><center><a class="flip" href="#toutsavoir"><img src=../img/ip-presentation.png><br /><h6>Tout savoir</h6></a></center></li>
			<li id="grille3"><center><a class="flip" href="#inscription_tmp"><img src=../img/ip-presentation.png><br /><h6>Inscription</h6></a></center></li>
			<li id="grille6"><center><a class="flip" href="#reglement"><img src=../img/ip-presentation.png><br /><h6>Règlement</h6></a></center></li>
			<li id="grille5"><center><a class="flip" href="#partenaire"><img src=../img/ip-presentation.png><br /><h6>Partenaires</h6></a></center></li>
			<li id="grille2"><center><a class="flip" href="#plan"><img src=../img/ip-maps.png><br /><h6>Plan</h6></a></center></li>
			<li id="grille9"><center><a class="flip" href="#facebook"><img src=../img/ip-fbicon.png><br /><h6>Facebook</h6></a></center></li>
		</ul>
	</div>
            
	<div id="presentation" style="background-image:url(../img/ip-background-revers.jpg);padding:10px;">
		<a href="#" class="goback">retour</a>
		<p>Pour sa première édition la GéoMagna s’habille aux couleurs 
		de la ville de Bayonne et de l’association «1 Maillot pour la Vie»
		avec la complicité de sportifs de haut niveau.</p>
		<h3>Parrainée par Nathalie Tauziat et Pepito Elhorga</h3>
		<p>Serez-vous capable de résoudre les énigmes, seul ou en équipe
		en un minimum de temps ?</p>	
		<h3>De nombreux lots à gagner !</h3>
		<p class="marge">Promesse de don 2€* minimum par participant</p>
		<h3 class="slim">Les fonds collectés seront versés à l’association
		«1 Maillot Pour la Vie» au profit des enfants malades.</h3>
		<p>Animations gratuites pour les enfants pendant toute la durée de la course.</p>
		<h6>* Règlement des dons sur place le jour de l’évènement.</h6>	
	</div>

	<div id="toutsavoir" style="background-image:url(../img/ip-background-revers.jpg);padding:10px;align:justify;">
		<a href="#" class="goback">retour</a>
		<div class="justify">
		<p>Concept de la chasse au trésor que nous connaissons tous, amélioré via les nouvelles technologies d'information et de communication (TIC)</p>
		<h3>Originalité :</h3>
		<p>Chasse aux Trésors assistée par ordinateur (virtuelle, dématérialisée). Un iPhone 3G ou Tablette iPad 3G sont nécessaire afin d'y participer. Aucune autre matérialisation n'est nécessaire dans le temps et l'espace.</p>
		<h3>Fonctionnement</h3>
		<p class="slim">Se déroule en extérieur ou en intérieur, sans limitation d'échelle et réalisable de chez soi jusqu'en très haute altitude. Demande des connaissances minimales en informatique ainsi que sur les systèmes de localisation (ex : utilisation d'un système GPS)</p>
		<p>Basé sur la géo localisation des appareils et autres relatifs à des technologies (GPS, Boussole, accéléromètre, Caméra arrière / avant, Réalité augmentée, Gyroscope, ...) et des langages de programmation émergeant du web.</p>
		<p>Les informations sont calculées en quatre dimensions puis, utilisées pour chaque participant en fonction de la date et de l'heure, de sa localisation initiale définie par ses coordonnées GPS, de son altitude par rapport au niveau de la mer, de l'orientation cardinal, de sa vitesse de déplacement. Les participants n'affichent pas le même contenu en fonction des informations calculées précitées.</p>
		<p>Les participants répondent à différentes énigmes stockées sur internet.</p>
		<h3>Déroulement :</h3>
		<p>Le tracé du parcours est défini et se fait à pied. Le nombre de participant est illimité. Ces derniers sont invités à se connecter seul où en équipe, à lancer l’application depuis une zone commune, afin de commencer la course. Les dates et heures du top départ sont préalablement stockées sur les iPad et les iPhone des participants inscrits.</p>
		<p>Chaque énigme résolue entraine la suivante permettant ainsi au participant d'avancer dans la « GeoMagna »</p>
		<p>Est déclaré gagnant, le premier participant qui a résolu toutes les énigmes ... exemples :</p>
		<ul>
		<li><p>Enigme d'Orientation :<br/>« Vous êtes à 120 mètres de la cible »</p></li>
		<li><p>Mathématiques :<br/> « Combien y a t-il d'arrêtes dans une pyramide ? »</p></li>
		<li><p>Logique :<br/> « 5 égale combien ? Si 1=5 / 2=25 / 3=325 / 4=4325 / 5=? »</p></li>
		<li><p>Déduction :<br/> « Dans un tiroir se trouvent 10 chaussettes bleues et 10 chaussettes rouges. Combien dois- je prendre de chaussettes dans mon tiroir pour être certain d'en avoir une paire de la même couleur ? »</p></li>
		<li class="clear"><p>Patience :<br/> « Attendez 2 mn !»</p></li>
		<li class="clear"><p>Rapidite :<br/> « Allez à plus de 30 km/h »</p></li>
		</ul></div>
	</div>

	<!--<div id="inscription" style="background-image:url(../img/ip-background-revers.jpg);padding:10px;">
			<div id="inscription_error"></div>
			<form class="inscription_form" action="../inscription_submit.php" method="post" accept-charset="utf-8">
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
					<input type="checkbox" name="accepte" value="Yes" /> J'ai lu et j'accepte les conditions du <a class="fade" href="#reglement">r&egrave;glement</a>
					<p><input class="submit" type="submit" value="Continuer &rarr;"></p>
				</form>
	</div>-->
	
	<div id="inscription_tmp" style="background-image:url(../img/ip-background-revers.jpg);padding:10px;">
			<a href="#" class="goback">retour</a>
			<center>
				<h1>
					<strike>Enchanté</strike><br />
					En chantier<br />
					<img src=http://vendee.mariettatrichet.fr/__oneclick_uploads/2009/10/travaux.png style="width:50%;">
				</h1>
			</center>
		</div>
	
	<div id="reglement" style="background-image:url(../img/ip-background-revers.jpg);padding:10px;align:justify;">
		<a href="#" class="goback">retour</a>
		<div class="justify">
		<h3>REGLEMENT</h3>
		<p>Déposé chez Maitres Samain et Ricard - Huissiers de Justice– 31/33 Rue Deparcieux, 75014 Paris.</p>

		<h3>Article 1 :</h3>
		<p>Organisation d'une course au trésor dite : « GeoMagna » à but caritatif, en partenariat avec la Mairie de Bayonne et avec la participation de partenaires privés.</p>
		<h3>Article 2 : Définition d'une GeoMagna :</h3>
		<p class="slim">Chasse au Trésor assistée par ordinateur (virtuelle, dématérialisée) demande des connaissances minimales en informatique ainsi que sur les systèmes de localisation. Basée sur la géo localisation des appareils et autres relatifs à des technologies (GPS, Boussole, accéléromètre, Caméra arrière / avant, Réalité augmentée,Gyroscope, ...) et des langages de programmation émergeant du web (ex : html, JavaScript, PHP, etc...) Un iPhone 3G minimum ou tablette iPad 3G, sont obligatoires afin de pouvoir y participer. Aucune autre matérialisation n'est nécessaire dans le temps ou l'espace. Les participants répondent à différentes énigmes qui sont stockées sur internet (une connexion internet valide est requise). Les informations sont calculées en quatre dimensions puis utilisées pour chaque participant en fonction de la date et de l'heure, de sa localisation initiale définie par ses coordonnées GPS, de son altitude par rapport au niveau de la mer, de l'orientation portrait et paysage de l'appareil, de sa vitesse de déplacement de son orientation cardinal, de l'angle de l'appareil, donc ceux du participant. Les participants n'affichent pas le même contenu selon les paramètres précités.</p>
		<h3>Article 3 :</h3>
		<p>Le nombre de participant est illimité. La participation à cette GeoMagna est ouverte à toute personne majeur ou mineur accompagnée, quelque soit sa nationalité à l'exception des organisateurs ou partenaires et de leur personnel. Le participant atteste qu'il n'a pas fait l'objet d'une interdiction de séjour, par décision de justice, dans la commune de Bayonne et/ou dans le département des Pyrénées Atlantique. L'attention des candidats est attiré sur le fait que la participation à une course peut les exposer à des situations de stress. Aussi, toutes personnes souhaitant participer à cet évènement et sachant qu'elle présente une hypersensibilité au stress ou d'autres problèmes de santé que cette course pourrait aggraver, sont expressément invités à ne pas participer au jeu, les organisateurs ne pouvant être tenus pour responsables.
		Toutes personnes voulant participer au jeu devra obligatoirement, individuellement et préalablement s'inscrire sur le site : http://inscription.devoralive.com. Une promesse de don d'un minimum de deux euros (2€) est demandée à chaque inscription et sera versé dans son intégralité, à l'association « Un Maillot pour la Vie ». Le versement de la participation aura lieu le 8 mai 2011, Place Mail Chaho Pelletier 64100 Bayonne.</p>
		<h3>Article 4 :</h3>
		<p>La GeoMagna se déroule en extérieur et à pieds le dimanche 8 Mai 2011 à 14h30. Le départ se fait en simultané Place Mail Chaho Pelletier. Les participants sont invités à se connecter, seul ou en équipe, au site internet dédié à cet événement, afin de commencer la course. La date et l'heure du départ sont préalablement défini sur ce site internet. Cette course prend fin le même jour à 16h30, Place Mail Chaho Pelletier lorsqu'un joueur à
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
		<p>Le fait de participer à ce jeu, implique l'acceptation pleine et entière du présent règlement déposé chez Maitres Samain et Ricard – 31/33 Rue Deparcieux – 75014 Paris. Ce règlement peut être consulté sur le site internet : http://inscription.devoralive.com</p>
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

	<div id="partenaire" style="background-image:url(../img/ip-background-revers.jpg);padding:10px;">
		<a href="#" class="goback">retour</a>
		<center>
		<ul>
			<li>
				<a href="http://www.bayonne.fr" title="Lien vers le site internet de la ville de Bayonne">
					<img src="../img/Bayonne.png" alt="logo ville de Bayonne" />
				</a>
			</li>
			<li>
				<a href="http://www.devoralive.com" title="Lien vers le site internet de Devoralive">
					<img src="../img/devoralive.png" alt="logo devORalive" />
				</a>
			</li>
			<li>
				<a href="http://www.iconcept.fr" title="Lien vers le site internet de iconcept">
					<img src="../img/iconcept.png" style="margin-top:10px;" alt="logo de iconcept" />
				</a>
			</li>
			<li>
				<a href="http://www.oquai.com" title="Lien vers le site internet de oquai">
					<img src="../img/oquai.png" alt="logo de oquai" />
				</a>
			</li>
			<li>
				<a href="http://www.duosun.com" title="Lien vers le site internet de duosun">
					<img src="../img/duosun.png" alt="logo de duosun" />
				</a>
			</li>
			<li>
				<a href="http://www.teratlantik.fr" title="Lien vers le site internet de ter'Atlantik">
					<img src="../img/teratlantik.png" style="margin-top:10px;" alt="logo de terAtlantik" />
				</a>
			</li>
			<li>
				<a href="http://www.carrefour.fr" title="Lien vers le site internet de Carrefour">
					<img src="../img/carrefourmarket.png" alt="logo Carrefour" />
				</a>
			</li>
		</ul>
		</center>
	</div>
	
	<div id="plan" style="background-image:url(../img/ip-background-revers.jpg);padding:10px;">
		Ouvrir dans l'app ?<a href="maps://maps.google.fr/maps?gl=fr&ll=43.488399,-1.473348&spn=0.001607,0.00379&t=h&z=19" target="_blank">Oui </a> - <a href="#" class="goback">Non</a>
	</div>

	<div id="facebook" style="background-image:url(../img/ip-background-revers.jpg);padding:10px;">
		<center><h2>
		<p style="margin-top:200px;">Avez vous l'appli facebook ?</p>
		<p><a href="fb://event/158480900869174" target="_blank">Oui</a> - 
		<a href="http://www.facebook.com/event.php?eid=158480900869174" target="_blank">Non</a></p>
		</h2></center>
	</div>

</body>
</html>