<?php
session_start();

session_destroy();
header('Location: /projektas/sessions.php');