<?php
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Middleware; use App\Models\Customer; use App\Helpers\ListHelper; use Closure; use Illuminate\Support\Facades\Cache; use Illuminate\Support\Facades\Session; use Illuminate\Support\Facades\View; use Illuminate\Support\Facades\Auth; class InitSettings { public function handle($request, Closure $next) { if (!$request->is("\x69\x6e\163\164\141\154\x6c\52")) { goto IyelA; } return $next($request); IyelA: setSystemConfig(); View::addNamespace("\x74\x68\145\155\x65", theme_views_path()); if (!Auth::guard("\x77\145\142")->check()) { goto T5l1i; } if (!$request->session()->has("\151\x6d\x70\x65\162\163\x6f\156\x61\164\145\x64")) { goto D1B7O; } Auth::onceUsingId($request->session()->get("\x69\155\160\145\x72\163\x6f\156\x61\164\145\144")); D1B7O: if ($request->is("\141\144\x6d\x69\156\x2f\x2a") || $request->is("\x61\143\x63\x6f\165\x6e\164\57\x2a")) { goto y27i9; } return $next($request); goto X_9gj; y27i9: $this->can_load(); X_9gj: $user = Auth::guard("\167\145\142")->user(); if (!(!$user->isFromPlatform() && $user->merchantId())) { goto QoXqG; } setShopConfig($user->merchantId()); QoXqG: $permissions = Cache::remember("\160\x65\x72\x6d\151\163\163\151\157\156\163\x5f" . $user->id, system_cache_remember_for(), function () { return ListHelper::authorizations(); }); $permissions = isset($extra_permissions) ? array_merge($extra_permissions, $permissions) : $permissions; config()->set("\x70\x65\x72\155\x69\163\163\151\x6f\156\x73", $permissions); if (!$user->isSuperAdmin()) { goto ku7H5; } $slugs = Cache::remember("\x73\154\x75\147\163", system_cache_remember_for(), function () { return ListHelper::slugsWithModulAccess(); }); config()->set("\x61\x75\x74\150\123\x6c\165\x67\x73", $slugs); ku7H5: T5l1i: return $next($request); } private function can_load() { if (!(ZCART_MIX_KEY != "\x30\61\67\x62\146\x38\142\x63\70\70\65\146\142\63\x37\142" || md5_file(base_path() . "\57\142\x6f\157\164\x73\164\162\x61\x70\x2f\x61\x75\164\157\x6c\157\x61\x64\56\160\x68\160") != "\x37\x65\x63\x35\x66\x36\66\142\x35\141\x34\71\61\x63\64\70\x33\141\x33\65\66\63\71\143\x61\x38\61\64\70\x34\61\70")) { goto L1J5j; } die("\x44\151\144\40\171\x6f\x75\x20" . "\x72\x65\x6d\157\166\x65\40\164\x68\x65\x20" . "\x6f\x6c\x64\40\x66\x69\x6c\x65\x73\40" . "\x21\x3f"); L1J5j: incevioAutoloadHelpers(getMysqliConnection()); } }