<?php

session_start();

session_destroy(); // cerramos la session => l'utilisateur est déconnecté

header('Location: /');

