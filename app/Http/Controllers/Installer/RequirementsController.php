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
 namespace App\Http\Controllers\Installer; use App\Http\Controllers\Installer\Helpers\RequirementsChecker; use Illuminate\Routing\Controller; class RequirementsController extends Controller { protected $requirements; public function __construct(RequirementsChecker $checker) { $this->requirements = $checker; } public function requirements() { $phpSupportInfo = $this->requirements->checkPHPversion(config("\151\x6e\x73\x74\141\x6c\154\x65\162\56\x63\157\x72\x65\56\155\x69\x6e\120\150\x70\x56\x65\x72\x73\151\x6f\x6e"), config("\151\156\163\x74\x61\154\x6c\145\x72\x2e\143\x6f\162\145\56\x6d\141\170\x50\x68\160\126\x65\162\x73\151\157\156")); $requirements = $this->requirements->check(config("\151\x6e\x73\x74\141\x6c\154\145\162\56\x72\145\x71\165\151\x72\x65\155\145\156\164\163")); return view("\151\x6e\x73\164\141\154\x6c\145\x72\x2e\x72\145\161\165\x69\162\145\155\x65\156\x74\x73", compact("\162\x65\161\165\x69\x72\x65\155\145\156\164\163", "\x70\x68\x70\123\x75\160\x70\x6f\x72\164\x49\156\146\x6f")); } }
