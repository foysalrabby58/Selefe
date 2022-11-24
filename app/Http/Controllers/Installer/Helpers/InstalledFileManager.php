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
 namespace App\Http\Controllers\Installer\Helpers; class InstalledFileManager { public function create() { $installedLogFile = storage_path("\151\x6e\163\x74\x61\154\154\145\x64"); $dateStamp = date("\131\57\x6d\57\144\x20\150\72\151\x3a\x73\141"); if (!file_exists($installedLogFile)) { goto BhW7_; } $message = trans("\x69\156\x73\x74\141\x6c\154\145\x72\137\155\x65\x73\x73\x61\x67\x65\163\x2e\x75\x70\144\x61\164\145\162\56\x6c\157\147\x2e\x73\x75\143\143\x65\x73\x73\137\155\x65\x73\x73\x61\147\145") . $dateStamp; file_put_contents($installedLogFile, $message . PHP_EOL, FILE_APPEND | LOCK_EX); goto hyGeD; BhW7_: $message = trans("\151\x6e\163\164\x61\x6c\x6c\145\x72\137\155\145\163\163\141\x67\x65\163\x2e\x69\x6e\x73\x74\141\154\x6c\145\x64\56\x73\x75\x63\x63\x65\163\163\x5f\x6c\157\147\137\x6d\145\x73\163\141\147\145") . $dateStamp . "\12"; file_put_contents($installedLogFile, $message); hyGeD: return $message; } public function update() { return $this->create(); } }
