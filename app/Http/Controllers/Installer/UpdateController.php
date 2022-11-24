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
 namespace App\Http\Controllers\Installer; use App\Http\Controllers\Installer\Helpers\DatabaseManager; use App\Http\Controllers\Installer\Helpers\InstalledFileManager; use Illuminate\Routing\Controller; class UpdateController extends Controller { use \App\Http\Controllers\Installer\Helpers\MigrationsHelper; public function welcome() { return view("\151\x6e\x73\x74\141\x6c\154\145\162\x2e\x75\x70\144\x61\x74\145\x2e\167\145\x6c\143\x6f\x6d\x65"); } public function overview() { $migrations = $this->getMigrations(); $dbMigrations = $this->getExecutedMigrations(); return view("\151\x6e\163\x74\141\x6c\x6c\x65\162\x2e\x75\160\x64\141\x74\x65\56\x6f\x76\145\162\x76\151\145\167", ["\x6e\165\155\x62\x65\162\117\146\125\x70\144\141\x74\x65\x73\120\145\156\x64\151\156\147" => count($migrations) - count($dbMigrations)]); } public function database() { $databaseManager = new DatabaseManager(); $response = $databaseManager->migrateAndSeed(); return redirect()->route("\114\141\162\x61\x76\145\x6c\x55\x70\x64\x61\x74\x65\x72\x3a\72\146\x69\156\x61\154")->with(["\x6d\x65\x73\x73\x61\147\145" => $response]); } public function finish(InstalledFileManager $fileManager) { $fileManager->update(); return view("\151\x6e\163\x74\141\154\154\x65\x72\56\x75\160\x64\141\164\145\x2e\x66\x69\x6e\x69\x73\150\x65\144"); } }
