// MESSAGES D'ERREUR
var messages = new Array();

messages['nom_court'] = "Votre nom doit contenir au moins deux lettres.";
messages['nom_mauvais'] = "Votre nom ne peut contenir que lettres et tirets.";
messages['prenom_court'] = "Votre prénom doit contenir au moins deux lettres.";
messages['prenom_mauvais'] = "Votre prénom ne peut contenir que lettres et tirets.";
messages['trop_jeune'] = "Vous êtes trop jeune pour utiliser ce site.";
messages['date_invalide'] = "La date n'existe pas.";
messages['cp_court'] = "Veuillez renseigner votre code postal à 5 chiffres.";
messages['email_mauvais'] = "Veuillez saisir une adresse e-mail valide.";
messages['mdp_mauvais'] = "Veuillez utiliser un mot de passe d'au moins 10 caractères dont un chiffre.";
messages['mdp2_mauvais'] = "Vos deux mots de passe ne sont pas identiques.";
messages['pas_de_ville'] = "Veuillez renseigner votre code postal de domicile.";

messages['erreur_connexion'] = "Ces informations n'existent pas chez nous.";

// FONCTIONS
function ucFirst(string) 
{
    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
}

$('#ville').keyup(function (e) {
  if(e.keyCode == 13) {
    var $ville = $(this);
    $.vicopo($ville.val(), function (input, cities) {
      if(input == $ville.val() && cities[0]) {
        $ville.val(cities[0].city).vicopoTargets().vicopoClean();
      }
    });
    e.preventDefault();
    e.stopPropagation();
  }
});

function estRegExp(chaine, exp)
{
	var regex = new RegExp(exp);
	return regex.test(chaine);
}

function verifierNom()
{
	var erreur = "";
	var nom = $('[name="nom"]').val();
	
	if (nom.length < 2) erreur = messages['nom_court'];
	if (erreur == "" && !estRegExp(nom, "^[a-zA-Zéèêàç-]{2,}$")) erreur = messages['nom_mauvais'];
	
	return erreur;
}

function verifierPrenom()
{
	var erreur = "";
	var prenom = $('[name="prenom"]').val();
	
	if (prenom.length < 2) erreur = messages['prenom_court'];
	if (erreur == "" && !estRegExp(prenom, "^[a-zA-Zéèêàç-]{2,}$")) erreur = messages['prenom_mauvais'];
	
	return erreur;
}

function verifierEmail()
{
	var erreur = "";
	var email = $('[name="email_i"]').val();
	
	if (erreur == "" && !estRegExp(email, "^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$")) erreur = messages['email_mauvais'];
	
	return erreur;
}

function verifierMDP()
{
	var erreur = "";
	var mdp = $('[name="mdp_i"]').val();
	
	if (mdp.length < 10) erreur = messages['mdp_mauvais'];
	if (erreur == "" && !estRegExp(mdp, "[0-9]{1,}")) erreur = messages['mdp_mauvais'];
	
	return erreur;
}

function verifierMDP2()
{
	var erreur = "";
	var mdp = $('[name="mdp_i"]').val();
	var mdp2 = $('[name="mdp2_i"]').val();
	
	if (mdp != mdp2) erreur = messages['mdp2_mauvais'];
	
	return erreur;
}

function getAge(dateString)
{
	var birthday = +new Date(dateString);
	return ~~((Date.now() - birthday) / (31557600000));
}

function verifierDate()
{
	if ((($("[name='mois']").val() == '2') && (parseInt($("[name='jour']").val()) >= 30)) || (($("[name='mois']").val() == '2') && ($("[name='annee']").val()/4 != Math.trunc($("[name='annee']").val()/4)) && ($("[name='jour']").val() == '29'))) erreur = messages['date_invalide'];
	
	if ((parseInt($("[name='jour']").val()) >= 30) && ($("[name='mois']").val() == '4' || $("[name='mois']").val() == '6' || $("[name='mois']").val() == '9' || $("[name='mois']").val() == '11')) erreur = messages['date_invalide'];
	
	return erreur;
}

function verifierAge()
{
	var erreur = "";
	
	var dateNaissance = $('[name="annee"] option:selected').val() + "-" + $('[name="mois"] option:selected').val() + "-" + $('[name="jour"] option:selected').val();
	if (getAge(dateNaissance) < 16) erreur = messages['trop_jeune'];

	return erreur;
}

function verifierVille()
{
	var erreur = "";
	
	var ville = $('#ville2 option:selected').text();
	if (!estRegExp(ville, "[a-zA-Z]{1,}")) erreur = messages['pas_de_ville'];

	return erreur;
}

function boutonVert()
{
	$('.carre--bouton').css("background-color", "rgb(90, 180, 110)");
	$('.carre--bouton').text("Rejoindre Le Carré");
}

function refuser(erreur)
{
	$('.erreur').css("display", "block");
	$('.erreur').text(erreur);
}

function refuserConnexion()
{
	$('.erreur').css("display", "block");
	$('.erreur').text(messages['erreur_connexion']);
}

function accepter()
{
	$("#dateNaissance").val($('[name="annee"]').val() + "-" + $('[name="mois"]').val().toString().replace(/^(\d)$/,'0$1') + "-" + $('[name="jour"]').val().toString().replace(/^(\d)$/,'0$1'));
	
	$("#submit").click();
}

function validation()
{
	erreur = "";
	if (erreur == "") erreur = verifierPrenom();
	if (erreur == "") erreur = verifierNom();
	if (erreur == "") erreur = verifierDate();
	if (erreur == "") erreur = verifierAge();
	if (erreur == "") erreur = verifierVille();
	if (erreur == "") erreur = verifierEmail();
	if (erreur == "") erreur = verifierMDP();
	if (erreur == "") erreur = verifierMDP2();

	if (erreur != "") refuser(erreur)
		else accepter();
}

var interval = setInterval(codePostal, 100);

function cpChoisi()
{
	clearInterval(interval);
}

function connexion()
{
	$("#submit_c").click();
}