<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Js;
use PDF;

/*


Available options and their defaults:

rootDir: "{app_directory}/vendor/dompdf/dompdf"
tempDir: "/tmp" (available in config/dompdf.php)
fontDir: "{app_directory}/storage/fonts/" (available in config/dompdf.php)
fontCache: "{app_directory}/storage/fonts/" (available in config/dompdf.php)
chroot: "{app_directory}" (available in config/dompdf.php)
logOutputFile: "/tmp/log.htm"
defaultMediaType: "screen" (available in config/dompdf.php)
defaultPaperSize: "a4" (available in config/dompdf.php)
defaultFont: "serif" (available in config/dompdf.php)
dpi: 96 (available in config/dompdf.php)
fontHeightRatio: 1.1 (available in config/dompdf.php)
isPhpEnabled: false (available in config/dompdf.php)
isRemoteEnabled: true (available in config/dompdf.php)
isJavascriptEnabled: true (available in config/dompdf.php)
isHtml5ParserEnabled: false (available in config/dompdf.php)
isFontSubsettingEnabled: false (available in config/dompdf.php)
debugPng: false
debugKeepTemp: false
debugCss: false
debugLayout: false
debugLayoutLines: true
debugLayoutBlocks: true
debugLayoutInline: true
debugLayoutPaddingBox: true
pdfBackend: "CPDF" (available in config/dompdf.php)
pdflibLicense: ""
adminUsername: "user"
adminPassword: "password"



*/

class PdfController extends Controller
{
    //
    public function download(Request $request)
    {
        // 794x1123 @96dpi
        PDF::setoptions([ "dpi" => 96 ]);

        $pdf = PDF::loadView('pdf.a4', [
            "calculation" => $request->input("calculation", null)
        ]);

        return $pdf->download('calc.pdf');
    }
}
