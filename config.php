<?php
$env = parse_ini_file(".env");

define("BasePath", $env["BASEPATH"]);
define("CropPath", $env["CROPPATH"]);
define("Debug", $env["DEBUG"]);
define("Hostname", $env["HOSTNAME"]);
define("Username", $env["USERNAME"]);
define("Password", $env["PASSWORD"]);
define("DatabaseName", $env["DATABASE"]);

if (Debug == true) {
  ini_set("display_errors", 1);
} else {
  ini_set("display_errors", 0);
}
