<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.1   |
    |              on 2020-05-31 05:32:54              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Support\Facades\Artisan; use Symfony\Component\Console\Output\BufferedOutput; class FinalInstallManager { public function runFinal() { $outputLog = new BufferedOutput(); $this->generateKey($outputLog); $this->publishVendorAssets($outputLog); return $outputLog->fetch(); } private static function generateKey($outputLog) { try { if (!config("\x69\156\x73\164\141\x6c\x6c\x65\x72\56\x66\x69\156\141\154\56\x6b\x65\x79")) { goto xztsd; } Artisan::call("\x6b\145\171\72\x67\145\x6e\145\162\141\164\x65", ["\x2d\x2d\146\x6f\162\x63\x65" => true], $outputLog); xztsd: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function publishVendorAssets($outputLog) { try { if (!config("\151\x6e\x73\164\141\154\154\x65\x72\56\x66\151\156\141\154\x2e\x70\165\142\x6c\151\163\150")) { goto Pitdd; } Artisan::call("\166\x65\156\144\157\162\x3a\x70\x75\x62\x6c\151\x73\150", ["\x2d\55\x61\x6c\154" => true], $outputLog); Pitdd: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function response($message, $outputLog) { return ["\x73\x74\141\164\165\163" => "\145\x72\162\x6f\x72", "\155\x65\163\163\141\147\x65" => $message, "\x64\142\117\165\x74\160\x75\164\114\x6f\147" => $outputLog->fetch()]; } }
