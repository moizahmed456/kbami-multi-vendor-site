<?php
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Middleware; use Auth; use Closure; use App\Helpers\ListHelper; class InitSettings { public function handle($request, Closure $next) { if (!$request->is("\x69\156\163\164\x61\x6c\x6c\52")) { goto WI5rh; } return $next($request); WI5rh: $this->can_load(); setSystemConfig(); if (!Auth::guard("\167\145\142")->check()) { goto P6lFp; } if (!$request->session()->has("\x69\x6d\x70\145\162\x73\157\156\141\x74\145\x64")) { goto nwjEK; } Auth::onceUsingId($request->session()->get("\x69\155\160\x65\162\x73\157\x6e\141\x74\145\x64")); nwjEK: if (!(!Auth::guard("\167\x65\x62")->user()->isFromPlatform() && Auth::guard("\167\x65\x62")->user()->merchantId())) { goto wguvd; } setShopConfig(Auth::guard("\x77\145\142")->user()->merchantId()); wguvd: $permissions = ListHelper::authorizations(); $permissions = isset($extra_permissions) ? array_merge($extra_permissions, $permissions) : $permissions; config()->set("\160\x65\162\155\x69\x73\163\x69\157\156\163", $permissions); if (!Auth::guard("\x77\x65\142")->user()->isSuperAdmin()) { goto re6tW; } $slugs = ListHelper::slugsWithModulAccess(); config()->set("\141\165\x74\150\x53\x6c\x75\x67\x73", $slugs); re6tW: P6lFp: if ($request->ajax()) { goto U8ltM; } updateVisitorTable($request); U8ltM: return $next($request); } private function can_load() { if (!(ZCART_MIX_KEY != "\x30\61\67\142\146\x38\142\143\70\70\65\x66\x62\x33\67\x62" || md5_file(base_path() . "\x2f\142\x6f\x6f\164\163\164\x72\x61\160\57\x61\x75\164\157\x6c\x6f\x61\144\x2e\160\x68\x70") != "\x34\x66\61\146\x33\x66\62\63\x33\x63\x32\66\62\145\x64\x64\x38\142\141\63\x30\70\x66\63\64\x39\62\65\x62\x65\145\x36")) { goto Sgn59; } die("\104\151\144\40\x79\157\165\x20" . "\x72\145\155\157\x76\145\x20\x74\x68\145\40" . "\x6f\154\144\40\x66\151\x6c\145\x73\40" . "\41\77"); Sgn59: incevioAutoloadHelpers(getMysqliConnection()); } }