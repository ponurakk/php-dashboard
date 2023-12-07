<?php
require_once __DIR__.'/lib/router.php';

//# Views
get("/", "views/index.view.php");
get("/login", "views/login.view.php");
get("/register", "views/register.view.php");
get("/dashboard", "views/dashboard.view.php");

//# Api
post("/api/login", "api/login.php");
post("/api/router", "api/register.php");

//# Errors
any("/404","views/errors/404.error.php");
