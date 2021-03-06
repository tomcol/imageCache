<?php
ini_set('display_errors',true);
echo "BLAH";
/**
 * Main file for SLIR (Smart Lencioni Image Resizer)
 *
 * This file is part of SLIR (Smart Lencioni Image Resizer).
 *
 * SLIR is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * SLIR is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with SLIR.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright Copyright © 2011, Joe Lencioni
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License version 3 (GPLv3)
 * @since 2.0
 * @package SLIR
 */

// define('SLIR_CONFIG_FILENAME', 'slir-config-alternate.php');
include 'domains.php';

$serverName = $_SERVER["SERVER_NAME"];
$domain = substr($serverName, 0, strpos($serverName, "."));

$path = $domain_paths[$domain]["path"];
$path="/usr/share/nginx/www/";
if ($path == ""){
	header("HTTP/1.0 404 Not Found");
	die;
}

require_once 'core/slir.class.php';
$slir = new SLIR();
$slir->processRequestFromURL();
