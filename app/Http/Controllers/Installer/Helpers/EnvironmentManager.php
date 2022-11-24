<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2022-09-30 06:29:58              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Http\Request; class EnvironmentManager { private $envPath; private $envExamplePath; public function __construct() { $this->envPath = base_path("\x2e\x65\x6e\x76"); $this->envExamplePath = base_path("\56\145\156\166\x2e\x65\x78\x61\155\x70\154\145"); } public function getEnvContent() { if (file_exists($this->envPath)) { goto vBqBd; } if (file_exists($this->envExamplePath)) { goto ZXdvB; } touch($this->envPath); goto HFvdZ; ZXdvB: copy($this->envExamplePath, $this->envPath); HFvdZ: vBqBd: return file_get_contents($this->envPath); } public function getEnvPath() { return $this->envPath; } public function getEnvExamplePath() { return $this->envExamplePath; } public function saveFileClassic(Request $input) { $message = trans("\x69\x6e\x73\164\141\154\x6c\145\162\x5f\155\x65\x73\163\141\147\x65\x73\x2e\145\x6e\x76\151\x72\x6f\x6e\155\145\x6e\164\56\x73\165\143\143\145\163\x73"); try { file_put_contents($this->envPath, $input->get("\x65\x6e\x76\x43\x6f\x6e\146\151\x67")); } catch (Exception $e) { $message = trans("\151\x6e\x73\164\x61\x6c\x6c\x65\162\x5f\x6d\145\163\x73\141\x67\145\163\x2e\145\156\166\151\162\x6f\x6e\155\145\x6e\x74\x2e\x65\x72\x72\157\162\x73"); } return $message; } }
