function menu()
{
	var menu = document.getElementsByClassName("carre--menu-mobile")[0];
	if (menu.classList.contains('active'))
	{
		menu.classList.remove('active');
		$("body").css("overflow", "auto");
	}
	else
	{
		menu.classList.add('active');
		$("body").css("overflow", "hidden");
	}
}