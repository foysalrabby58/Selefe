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
 namespace App\Http\Controllers\Installer; use App\Http\Controllers\Installer\Helpers\DatabaseManager; use App\Http\Controllers\Installer\Helpers\EnvironmentManager; use App\Http\Controllers\Installer\Helpers\FinalInstallManager; use App\Http\Controllers\Installer\Helpers\InstalledFileManager; use Illuminate\Routing\Controller; class FinalController extends Controller { public function final(FinalInstallManager $finalInstall, EnvironmentManager $environment) { $finalMessages = $finalInstall->runFinal(); $finalEnvFile = $environment->getEnvContent(); return view("\151\x6e\x73\x74\141\154\x6c\x65\162\56\146\x69\x6e\x69\163\x68\x65\x64", compact("\x66\151\x6e\x61\154\115\145\163\163\141\x67\x65\163", "\x66\151\156\141\154\105\x6e\x76\x46\x69\154\x65")); } public function seedDemo(DatabaseManager $databaseManager) { $response = $databaseManager->seedDemoData(); return redirect()->route("\x49\156\163\164\x61\x6c\x6c\x65\162\x2e\146\151\x6e\151\x73\150"); } public function finish(InstalledFileManager $fileManager) { $finalStatusMessage = $fileManager->update(); return redirect()->to(config("\x69\156\x73\x74\141\x6c\154\x65\x72\x2e\162\145\x64\151\162\145\143\164\x55\x72\154"))->with("\x6d\x65\163\163\141\x67\x65", $finalStatusMessage); } }
