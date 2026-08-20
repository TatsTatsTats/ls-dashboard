<x-app-layout>

    {{-- vv Consumer Loan vv --}}
    <x-dashboard-table :headers="$aec_headers" :items="$aec_reports" title='Account Endorsed to Credit' size="12" />
    <x-dashboard-table :headers="$adm_headers" :items="$adm_reports" title='Approved and Decline Monitoring' size="12" />
    <x-dashboard-table :headers="$BADG_headers" :items="$BADG_reports" title='Booked Accounts by Dealer Group' size="12" />
    <x-dashboard-table :headers="$cmapld_headers" :items="$cmapld_reports" title='CMAP NFIS LOANDEX Request' size="12" />
    <x-dashboard-table :headers="$cpir_headers" :items="$cpir_reports" title='Classification Per Industry Report' size="12" />
    <x-dashboard-table :headers="$dti_headers" :items="$dti_reports" title='Daily Turn Ins' size="12" />
    <x-dashboard-table :headers="$pdcs_headers" :items="$pdcs_reports" title='Post-Dated Check Monitoring' size="12" />
    <x-dashboard-table :headers="$is_headers" :items="$is_reports" title='Insurance Monitoring' size="12" />
    <x-dashboard-table :headers="$orcrs_headers" :items="$orcrs_reports" title='OR/CR Monitoring' size="12" />
    <x-dashboard-table :headers="$docdefs_headers" :items="$docdefs_reports" title='Document Deficiency' size="12" />



    {{-- have to change the days due columns --}}
    {{-- <x-dashboard-table :headers="$pd_headers" :items="$pd_reports" title='Past Due Report' size="12" /> --}}



    <x-dashboard-table :headers="$tad_headers" :items="$tad_reports" title='Total and Average Report' size="12"
        id="tadTables" />
    <x-dashboard-table :headers="$tbm_headers" :items="$tbm_reports" title='Total Bookings Monitoring' size="12" id="tbmTables" />
    <x-dashboard-table :headers="$tppcs_headers" :items="$tppcs_reports" title='Total Production Per Channel' size="12" />
    {{-- ^^ Consumer Loan ^^ --}}

</x-app-layout>
