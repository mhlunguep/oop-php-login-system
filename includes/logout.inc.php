<?php

session_start();
session_unset();
session_destroy();

// Go back to home page
header("location: ../index.php?error=none");
