<!--begin::Theme Init (prevents flash of incorrect theme on load, #6043)-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        new DataTable('#defaultTables', {
            renderer: 'bootstrap',
            scrollX: true,
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print', ],

                },
                bottomStart: null,
                bottomEnd: null, // Removes default bottom-right pagination
                bottom: ['pageLength', 'info', 'paging']
            }
        });

        new DataTable('#tadTables', {
            renderer: 'bootstrap',
            scrollX: true,
            footerCallback: function(row, data, start, end, display) {
                const api = this.api();

                // Helper to strip currency symbols/commas and convert to number
                const cleanNum = (val) => {
                    if (typeof val === 'string') return val.replace(/[\$,]/g, '') * 1;
                    if (typeof val === 'number') return val;
                    return 0;
                };

                // --- 1. FIRST COLUMN (Index 0): Total number of items as a whole ---
                const totalItems = api.rows({
                    page: 'current'
                }).count();
                const footerCol0 = api.column(0).footer();
                if (footerCol0) {
                    footerCol0.innerHTML = `Total Number of Accounts: ${totalItems}`;
                }

                // --- 2. 6th COLUMN (Index 5): Total Sum ---
                const dataPrice = api.column(5, {
                    page: 'current'
                }).data();
                const totalPrice = dataPrice.reduce((a, b) => cleanNum(a) + cleanNum(b), 0);
                const priceTotal = api.column(5).footer();
                if (priceTotal) {
                    priceTotal.innerHTML = `Total Selling Price: ${totalPrice.toFixed(2)}`;
                }

                // --- 3. 7th COLUMN (Index 6): Total Sum ---
                const dataDownpayment = api.column(6, {
                    page: 'current'
                }).data();
                const totalDownpayment = dataDownpayment.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                const downpaymentTotal = api.column(6).footer();
                if (downpaymentTotal) {
                    downpaymentTotal.innerHTML =
                        `Total Downpayment: ${totalDownpayment.toFixed(2)}`;
                }

                // --- 4. 8th COLUMN (Index 7): Total Sum ---
                const dataFinance = api.column(7, {
                    page: 'current'
                }).data();
                const totalFinance = dataFinance.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                const financeTotal = api.column(7).footer();
                if (financeTotal) {
                    financeTotal.innerHTML =
                        `Total Amount Finance: ${totalFinance.toFixed(2)}`;
                }

                // --- 5. 9th COLUMN (Index 8): Total Sum ---
                const dataAmortization = api.column(8, {
                    page: 'current'
                }).data();
                const totalAmortization = dataAmortization.reduce((a, b) => cleanNum(a) + cleanNum(
                        b),
                    0);
                const amortizationTotal = api.column(8).footer();
                if (amortizationTotal) {
                    amortizationTotal.innerHTML =
                        `Total Monthly Amortization: ${totalAmortization.toFixed(2)}`;
                }

                // --- 6. 10th COLUMN (Index 9): Total Sum ---
                const dataGEY = api.column(9, {
                    page: 'current'
                }).data();
                let totalGEY = dataGEY.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalGEY = totalGEY / totalItems;
                const geyTotal = api.column(9).footer();
                if (geyTotal) {
                    geyTotal.innerHTML =
                        `Average GEY: ${totalGEY.toFixed(2)}`;
                }

                // --- 7. 11th COLUMN (Index 10): Total Sum ---
                const dataNEY = api.column(10, {
                    page: 'current'
                }).data();
                let totalNEY = dataNEY.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalNEY = totalNEY / totalItems;
                const neyTotal = api.column(10).footer();
                if (neyTotal) {
                    neyTotal.innerHTML =
                        `Average NEY: ${totalNEY.toFixed(2)}`;
                }

                // --- 8. 12th COLUMN (Index 11): Total Sum ---
                const dataEIR = api.column(11, {
                    page: 'current'
                }).data();
                let totalEIR = dataEIR.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalEIR = totalEIR / totalItems;
                const eirTotal = api.column(11).footer();
                if (eirTotal) {
                    eirTotal.innerHTML =
                        `Average EIR: ${totalEIR.toFixed(2)}`;
                }

                // --- 9. 13th COLUMN (Index 12): Total Sum ---
                const dataDI = api.column(12, {
                    page: 'current'
                }).data();
                let totalDI = dataDI.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalDI = totalDI / totalItems;
                const diTotal = api.column(12).footer();
                if (diTotal) {
                    diTotal.innerHTML =
                        `Average DI: ${totalDI.toFixed(2)}`;
                }

                // --- 10. 14th COLUMN (Index 13): Total Sum ---
                const dataSI = api.column(13, {
                    page: 'current'
                }).data();
                let totalSI = dataSI.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalSI = totalSI / totalItems;
                const siTotal = api.column(13).footer();
                if (siTotal) {
                    siTotal.innerHTML =
                        `Average SI: ${totalSI.toFixed(2)}`;
                }
                
                // --- 11. 15th COLUMN (Index 14): Total Sum ---
                const dataKI = api.column(14, {
                    page: 'current'
                }).data();
                let totalKI = dataKI.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalKI = totalKI / totalItems;
                const kiTotal = api.column(14).footer();
                if (kiTotal) {
                    kiTotal.innerHTML =
                        `Average KI: ${totalKI.toFixed(2)}`;
                }


            }
        });

        new DataTable('#tbmTables', {
            renderer: 'bootstrap',
            scrollX: true,
            footerCallback: function(row, data, start, end, display) {
                const api = this.api();

                // Helper to strip currency symbols/commas and convert to number
                const cleanNum = (val) => {
                    if (typeof val === 'string') return val.replace(/[\$,]/g, '') * 1;
                    if (typeof val === 'number') return val;
                    return 0;
                };

                // --- 1. FIRST COLUMN (Index 0): Total number of items as a whole ---
                const totalItems = api.rows({
                    page: 'current'
                }).count();
                const footerCol0 = api.column(0).footer();
                if (footerCol0) {
                    footerCol0.innerHTML = `Total Number of Accounts: ${totalItems}`;
                }

                // --- 6. 10th COLUMN (Index 9): Total Sum ---
                const dataGEY = api.column(9, {
                    page: 'current'
                }).data();
                let totalGEY = dataGEY.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalGEY = totalGEY / totalItems;
                const geyTotal = api.column(9).footer();
                if (geyTotal) {
                    geyTotal.innerHTML =
                        `Average Add On Rate: ${totalGEY.toFixed(2)}`;
                }

                // --- 7. 11th COLUMN (Index 10): Total Sum ---
                const dataNEY = api.column(10, {
                    page: 'current'
                }).data();
                let totalNEY = dataNEY.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalNEY = totalNEY / totalItems;
                const neyTotal = api.column(10).footer();
                if (neyTotal) {
                    neyTotal.innerHTML =
                        `Average NEY: ${totalNEY.toFixed(2)}`;
                }

                // --- 8. 12th COLUMN (Index 11): Total Sum ---
                const dataEIR = api.column(11, {
                    page: 'current'
                }).data();
                let totalEIR = dataEIR.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalEIR = totalEIR / totalItems;
                const eirTotal = api.column(11).footer();
                if (eirTotal) {
                    eirTotal.innerHTML =
                        `Average GEY: ${totalEIR.toFixed(2)}`;
                }

                // --- 9. 13th COLUMN (Index 12): Total Sum ---
                const dataDI = api.column(12, {
                    page: 'current'
                }).data();
                let totalDI = dataDI.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalDI = totalDI / totalItems;
                const diTotal = api.column(12).footer();
                if (diTotal) {
                    diTotal.innerHTML =
                        `Average DI: ${totalDI.toFixed(2)}`;
                }

                // --- 10. 14th COLUMN (Index 13): Total Sum ---
                const dataSI = api.column(13, {
                    page: 'current'
                }).data();
                let totalSI = dataSI.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalSI = totalSI / totalItems;
                const siTotal = api.column(13).footer();
                if (siTotal) {
                    siTotal.innerHTML =
                        `Average SI: ${totalSI.toFixed(2)}`;
                }
                
                // --- 11. 15th COLUMN (Index 14): Total Sum ---
                const dataKI = api.column(14, {
                    page: 'current'
                }).data();
                let totalKI = dataKI.reduce((a, b) => cleanNum(a) + cleanNum(b),
                    0);
                totalKI = totalKI / totalItems;
                const kiTotal = api.column(14).footer();
                if (kiTotal) {
                    kiTotal.innerHTML =
                        `Average KI: ${totalKI.toFixed(2)}`;
                }


            }
        });


        (() => {
            'use strict';
            const root = document.documentElement;

            // Applications with their own theming opt out of AdminLTE's color mode
            // entirely, here as well as in the bundle.
            if (root.getAttribute('data-lte-color-mode') === 'off') {
                return;
            }

            const STORAGE_KEY = 'lte-theme';
            let stored = null;
            try {
                stored = localStorage.getItem(STORAGE_KEY);
            } catch {
                // localStorage may be unavailable (private mode, sandboxed iframe).
            }
            // Mirror the precedence in color-mode.ts: the visitor's stored choice
            // wins, then a theme this page declared itself, then the OS preference.
            const authored = root.getAttribute('data-bs-theme');
            let resolved = 'light';
            if (stored === 'dark' || stored === 'light') {
                resolved = stored;
            } else if (authored === 'dark' || authored === 'light') {
                resolved = authored;
            } else if (globalThis.matchMedia('(prefers-color-scheme: dark)').matches) {
                resolved = 'dark';
            }
            root.setAttribute('data-bs-theme', resolved);
            root.style.colorScheme = resolved;
            // Flag values computed here, so the bundle does not mistake them for a
            // theme the page declared and stop following the OS preference.
            if (resolved !== authored) {
                root.setAttribute('data-lte-theme-resolved', '');
            }
        })();

    });
</script>
<!--end::Theme Init-->

<!-- sortablejs -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" crossorigin="anonymous"></script>
<!-- sortablejs -->
<script>
    new Sortable(document.querySelector('.connectedSortable'), {
        group: 'shared',
        handle: '.card-header',
    });

    const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
    cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
    });
</script>

<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
</script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
