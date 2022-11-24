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
 namespace App\Http\Controllers\Installer\Helpers; class RequirementsChecker { private $_minPhpVersion = "\x37\56\62\56\60"; public function check(array $requirements) { $results = []; foreach ($requirements as $type => $requirement) { switch ($type) { case "\x70\x68\x70": foreach ($requirements[$type] as $requirement) { $results["\x72\x65\161\165\x69\x72\x65\155\145\156\164\x73"][$type][$requirement] = true; if (extension_loaded($requirement)) { goto j7UlA; } $results["\x72\145\161\165\x69\162\145\155\145\156\164\163"][$type][$requirement] = false; $results["\x65\x72\x72\157\162\x73"] = true; j7UlA: fgy8A: } RXpSa: goto ihk35; case "\x61\160\x61\x63\x68\145": foreach ($requirements[$type] as $requirement) { if (!function_exists("\x61\160\141\x63\x68\x65\137\147\145\x74\x5f\155\157\x64\x75\154\x65\x73")) { goto IQl0b; } $results["\162\145\161\x75\x69\x72\145\155\145\156\164\x73"][$type][$requirement] = true; if (in_array($requirement, apache_get_modules())) { goto dDeEu; } $results["\x72\x65\161\x75\151\x72\145\x6d\x65\x6e\164\x73"][$type][$requirement] = false; $results["\x65\162\x72\157\x72\163"] = true; dDeEu: IQl0b: UpDS_: } P1qQK: goto ihk35; } YTtUJ: ihk35: LE_nI: } YeA3O: return $results; } public function checkPHPversion(string $minPhpVersion = null, string $maxPhpVersion = null) { $currentPhpVersion = $this->getPhpVersionInfo(); $supported = false; if (!($minPhpVersion == null)) { goto SrRFn; } $minPhpVersion = $this->getMinPhpVersion(); SrRFn: if ($maxPhpVersion == null && version_compare($currentPhpVersion["\166\x65\x72\x73\151\157\x6e"], $minPhpVersion, "\x3e\x3d")) { goto CIxh2; } if (version_compare($currentPhpVersion["\x76\x65\162\163\x69\157\x6e"], $minPhpVersion, "\76\x3d") && version_compare($currentPhpVersion["\166\x65\162\x73\151\157\x6e"], $maxPhpVersion, "\74\x3d")) { goto ugnTt; } goto KY_Xt; CIxh2: $supported = true; goto KY_Xt; ugnTt: $supported = true; KY_Xt: $phpStatus = ["\146\x75\x6c\x6c" => $currentPhpVersion["\x66\x75\x6c\154"], "\143\x75\162\162\145\x6e\164" => $currentPhpVersion["\x76\x65\162\163\151\157\x6e"], "\x6d\x69\x6e\x69\x6d\165\155" => $minPhpVersion, "\x6d\x61\x78\151\155\165\x6d" => $maxPhpVersion, "\163\x75\160\160\157\x72\x74\x65\x64" => $supported]; return $phpStatus; } private static function getPhpVersionInfo() { $currentVersionFull = PHP_VERSION; preg_match("\43\x5e\134\144\x2b\50\134\x2e\134\144\x2b\x29\x2a\43", $currentVersionFull, $filtered); $currentVersion = $filtered[0]; return ["\146\x75\x6c\x6c" => $currentVersionFull, "\x76\x65\162\163\x69\157\156" => $currentVersion]; } protected function getMinPhpVersion() { return $this->_minPhpVersion; } }