function toggle()
{
	if (document.getElementsByClassName("carre--form-connexion")[0].classList.contains('invisible'))
	{
		document.getElementsByClassName("carre--form-connexion")[0].classList.remove("invisible");
		document.getElementsByClassName("carre--form-inscription")[0].classList.add("invisible");
		document.getElementsByTagName("h1")[0].innerHTML = "Connexion";
	}
	else
	{
		document.getElementsByClassName("carre--form-inscription")[0].classList.remove("invisible");
		document.getElementsByClassName("carre--form-connexion")[0].classList.add("invisible");
		document.getElementsByTagName("h1")[0].innerHTML = "Inscription";
	}
}