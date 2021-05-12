<?php

// if logout buttom is clicked session will distroy
session_start();
session_unset();
session_destroy();

header("Location: index.php");