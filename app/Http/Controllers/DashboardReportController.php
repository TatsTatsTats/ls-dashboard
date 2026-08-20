<?php

namespace App\Http\Controllers;

use App\Models\ADMReport;
use App\Models\AECReport;
use App\Models\BADGReport;
use App\Models\CMAPLDReport;
use App\Models\CPIRReport;
use App\Models\DashboardReport;
use App\Models\DOCDEFSReport;
use App\Models\DTIReport;
use App\Models\ISReport;
use App\Models\ORCRSReport;
use App\Models\PDCSReport;
use App\Models\PDReport;
use App\Models\TADReport;
use App\Models\TBMReport;
use App\Models\TPPCReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class DashboardReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $size = 0;

        $aec_headers = AECReport::getCleanHeaders();
        $aec_reports = AECReport::all();
        $adm_headers = ADMReport::getCleanHeaders();
        $adm_reports = ADMReport::all();
        $BADG_headers = BADGReport::getCleanHeaders();
        $BADG_reports = BADGReport::all();
        $cmapld_headers = CMAPLDReport::getCleanHeaders();
        $cmapld_reports = CMAPLDReport::all();
        $cpir_headers = CPIRReport::getCleanHeaders();
        $cpir_reports = CPIRReport::all();
        $docdefs_headers = DOCDEFSReport::getCleanHeaders();
        $docdefs_reports = DOCDEFSReport::all();
        $dti_headers = DTIReport::getCleanHeaders();
        $dti_reports = DTIReport::all();
        $is_headers = ISReport::getCleanHeaders();
        $is_reports = ISReport::all();
        $orcrs_headers = ORCRSReport::getCleanHeaders();
        $orcrs_reports = ORCRSReport::all();
        $pdcs_headers = PDCSReport::getCleanHeaders();
        $pdcs_reports = PDCSReport::all();
        $pd_headers = PDReport::getCleanHeaders();
        $pd_reports = PDReport::all();
        $tad_headers = TADReport::getCleanHeaders();
        $tad_reports = TADReport::all();
        $tbm_headers = TBMReport::getCleanHeaders();
        $tbm_reports = TBMReport::all();
        $tppcs_headers = TPPCReport::getCleanHeaders();
        $tppcs_reports = TPPCReport::all();

        // dd($aec_reports);
        return view('dashboard', compact(
            'size',
            'aec_headers',
            'aec_reports',
            'adm_headers',
            'adm_reports',
            'BADG_headers',
            'BADG_reports',
            'cmapld_headers',
            'cmapld_reports',
            'cpir_headers',
            'cpir_reports',
            'docdefs_headers',
            'docdefs_reports',
            'dti_headers',
            'dti_reports',
            'is_headers',
            'is_reports',
            'orcrs_headers',
            'orcrs_reports',
            'pdcs_headers',
            'pdcs_reports',
            'pd_headers',
            'pd_reports',
            'tad_headers',
            'tad_reports',
            'tbm_headers',
            'tbm_reports',
            'tppcs_headers',
            'tppcs_reports',

        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardReport $dashboardReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardReport $dashboardReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DashboardReport $dashboardReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardReport $dashboardReport)
    {
        //
    }
}
