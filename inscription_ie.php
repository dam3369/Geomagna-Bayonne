<?php
if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') ) {
			header("location:./iphone");
		}
?>
<HTML>
   <HEAD>
   	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
   	<meta name="viewport" content="width=device-width; initial-scale=1.4; maximum-scale=1.4; user-scalable=0;" />
      <TITLE>Accueil Inscription</TITLE>
   </HEAD>
   <BODY style="min-width:533px;">
		<center><img src=img/geomagnatitle.png style="margin-top:10px;"><br /><img src=img/8mai.png>
			<div style="background-image:url(img/ipadlandscape.png);width:528px;height:414px;margin-left:auto;margin-right:auto;margin-top:30px;">
			 	<br />
				    <a href="http://inscription.devoralive.com/#prerequis" style="text-decoration:none;">
				       <div style="background:pink;border:1px solid red;width:419px;color:red;margin-top:37px;">
				          Assurez vous <span style="color:green;">ici</span> d'avoir les pr&eacute;requis &eacute;nonc&eacute;s
						  	   </div>
				   </a>
				   <h4>
		          <em>	
				        <div class="cache" style="display:none;margin-top:-20px;"><form action="./requete/create.php" method="post">
			          <table border="0" cellspacing="10" cellpadding="0" style="text-align: right;color:#FFFFFF;font-family:Zapf Chancery, cursive;">
						           <tr>
					            <td>
					Nom : 
					           </td>
					           <td>
					<input type="text" name="nom" value="" />
					          </td>
					         </tr>
						         <tr>
					          <td>
					Pr&eacute;nom : 
					          </td>
					          <td>
					<input type="text" name="prenom" value="" />
					          </td>
					        </tr>
						        <tr>
					          <td>
					Mot de passe : 
					          </td>
					          <td>
					<input type="password" name="password" value="" />
					          </td>
					        </tr>
						        <tr>
					          <td>
					Confirmation : 
					          </td>
					          <td>
					<input type="password" name="confirm_password" value="" />
					          </td>
					        </tr>
					     	<tr>
					          <td>
					Adresse mail : 
					          </td>
					          <td>
					<input type="email" name="mail" value="" />
					          </td>
					     </tr>
					     	<tr>
					          <td>
					Promesse de don :
					          </td>
					          <td align=center>
							<SELECT name="euro">
							<OPTION VALUE="2">2 &#8364; ( minimum )</OPTION>
							<OPTION VALUE="3" SELECTED> 3 &#8364; ( sur place ) </OPTION>
							<OPTION VALUE="4">4 &#8364;</OPTION>
							<OPTION VALUE="5">5 &#8364;</OPTION>
							<OPTION VALUE="6">6 &#8364;</OPTION>
							<OPTION VALUE="7">7 &#8364;</OPTION>
							<OPTION VALUE="8">8 &#8364;</OPTION>
							<OPTION VALUE="9">9 &#8364;</OPTION>
							<OPTION VALUE="10">10 &#8364;</OPTION>
							<OPTION VALUE="11">11 &#8364;</OPTION>
							<OPTION VALUE="12">12 &#8364;</OPTION>
							<OPTION VALUE="13">13 &#8364;</OPTION>
							<OPTION VALUE="14">14 &#8364;</OPTION>
							<OPTION VALUE="15">15 &#8364;</OPTION>
							<OPTION VALUE="16">16 &#8364;</OPTION>
							<OPTION VALUE="17">17 &#8364;</OPTION>
							<OPTION VALUE="18">18 &#8364;</OPTION>
							<OPTION VALUE="19">19 &#8364;</OPTION>
							<OPTION VALUE="20">20 &#8364;</OPTION>
							<OPTION VALUE="25">25 &#8364;</OPTION>
							<OPTION VALUE="30">30 &#8364;</OPTION>
							<OPTION VALUE="35">35 &#8364;</OPTION>
							<OPTION VALUE="40">40 &#8364;</OPTION>
							<OPTION VALUE="45">45 &#8364;</OPTION>
							<OPTION VALUE="50">50 &#8364;</OPTION>
							<OPTION VALUE="60">60 &#8364;</OPTION>
							<OPTION VALUE="70">70 &#8364;</OPTION>
							<OPTION VALUE="80">80 &#8364;</OPTION>
							<OPTION VALUE="90">90 &#8364;</OPTION>
							<OPTION VALUE="100">100 &#8364;</OPTION>
							<OPTION VALUE="plusde100">+ de 100 &#8364;</OPTION>
						</SELECT>
					         </td>
					     </tr>
				</table>
				<INPUT TYPE="CHECKBOX" NAME="accepte" VALUE="Yes"><span style="color:#444444;">J'ai lu et j'accepte les conditions du <a href=reglement.php>r&egrave;glement</a></span><br />
			<INPUT border=0 src="http://www.e2evolution.com/images/valider.png" type=image Value=submit align="middle" ></div>
			</div>
			</form>
		</center>	
		</em>
		<script type="text/javascript">
		var delai=1000, //le délai en ms de l'arrivée de la div
		lesDiv=[];
		for(var i=0;i<document.getElementsByTagName('div').length;i++){
			if(document.getElementsByTagName('div')[i].className=='cache'){
				lesDiv[i]=document.getElementsByTagName('div')[i];
			}
		}
		for(i=0;i<lesDiv.length;i++){
		    setTimeout((function(arg){return function(){lesDiv[arg].style.display='block';}})(i),delai);
		}
		</script>	
   </BODY>
</HTML>