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
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Support\Facades\Artisan; use Symfony\Component\Console\Output\BufferedOutput; class FinalInstallManager { public function runFinal() { $outputLog = new BufferedOutput(); $this->generateKey($outputLog); $this->publishVendorAssets($outputLog); return $outputLog->fetch(); } private static function generateKey($outputLog) { try { if (!config("\151\156\163\164\141\154\x6c\145\x72\x2e\x66\151\156\x61\154\56\x6b\145\x79")) { goto TS7Ew; } Artisan::call("\x6b\x65\x79\72\147\145\156\145\x72\x61\164\x65", ["\55\55\x66\x6f\162\143\145" => true], $outputLog); TS7Ew: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function publishVendorAssets($outputLog) { try { if (!config("\x69\x6e\163\x74\141\154\x6c\x65\x72\x2e\146\151\x6e\x61\x6c\56\160\x75\142\x6c\151\163\150")) { goto C5Lsa; } Artisan::call("\x76\x65\x6e\144\157\162\72\160\165\142\x6c\x69\x73\150", ["\x2d\x2d\141\154\154" => true], $outputLog); C5Lsa: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function response($message, $outputLog) { return ["\163\x74\x61\x74\165\x73" => "\x65\x72\x72\x6f\162", "\x6d\145\163\163\141\x67\x65" => $message, "\144\142\117\165\164\x70\165\x74\x4c\x6f\147" => $outputLog->fetch()]; } }
