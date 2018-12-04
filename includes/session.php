<?php
	if (empty($_SESSION['login']) or empty($_SESSION['id']))
	{
		echo "Ви увійшли на сайт, як гість <br> <a href='#'> Це посилання доступне тільки зареєстрованим користувачам </a>";
	}
		else
			{
			 echo "Ви увійшли на сайт, як ". $_SESSION ['login']. "<br> <a href='https://github.com/DianaKucheriava/Cometa_/deployments'> Це посилання доступна тільки зареєстрованим користувачам </a>";
			} ?>