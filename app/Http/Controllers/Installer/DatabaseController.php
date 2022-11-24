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
 namespace App\Http\Controllers\Installer; use App\Http\Controllers\Installer\Helpers\DatabaseManager; use Exception; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\DB; class DatabaseController extends Controller { private $databaseManager; public function __construct(DatabaseManager $databaseManager) { $this->databaseManager = $databaseManager; } public function database() { if ($this->checkDatabaseConnection()) { goto eiEY3; } return redirect()->back()->withErrors(["\144\x61\164\141\142\141\x73\145\x5f\143\x6f\x6e\156\x65\143\x74\151\x6f\x6e" => trans("\151\156\163\164\141\154\154\145\x72\x5f\155\x65\163\163\141\x67\x65\x73\x2e\145\156\166\x69\162\x6f\156\155\x65\x6e\x74\56\x77\151\172\x61\x72\144\x2e\x66\x6f\x72\155\x2e\144\x62\137\143\x6f\156\x6e\x65\x63\x74\151\x6f\x6e\137\x66\x61\151\154\x65\x64")]); eiEY3: ini_set("\x6d\x61\170\137\x65\x78\145\x63\x75\164\x69\157\x6e\137\x74\x69\155\145", 600); $response = $this->databaseManager->migrateAndSeed(); return redirect()->route("\111\156\163\164\141\x6c\x6c\145\x72\56\146\151\x6e\x61\x6c")->with(["\x6d\x65\163\163\x61\147\x65" => $response]); } private function checkDatabaseConnection() { try { DB::connection()->getPdo(); return true; } catch (Exception $e) { return false; } } }
