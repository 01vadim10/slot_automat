<?php
session_start();
unset($l);
session_destroy();

header('Location: ../index.php');