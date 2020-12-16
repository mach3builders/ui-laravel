<!DOCTYPE html>
<html>
<head>
<title>Mach3Builders</title>
<meta charset="utf-8">
<style type="text/css">
    /* elements */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        color: #2D3748;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        font-size: 0.875rem;
        line-height: 1.25rem;
        padding: 0;
        text-align: left;
        vertical-align: top;
    }

    th {
        color: #718096;
        font-size: 0.625rem;
        font-weight: bold;
        padding: 0.5rem 0;
        text-transform: uppercase;
    }

    img {
        display: block;
    }

    /* utilities */
    .align-middle { vertical-align: middle !important; }

    .bg-gray-200 { background-color: #EDF2F7 !important; }

    .border { border-style: solid !important; border-width: 1px !important; }
    .border-b { border-bottom-style: solid !important; border-bottom-width: 1px !important; }

    .border-gray-400 { border-color: #CBD5E0 !important; }

    .font-bold { font-weight: bold !important; }

    .h-4 { height: 1rem !important; }

    .mb-8 { margin-bottom: 2rem !important; }

    .mt-2 { margin-top: 0.5rem !important; }
    .mt-4 { margin-top: 1rem !important; }
    .mt-8 { margin-top: 2rem !important; }
    .mt-12 { margin-top: 3rem !important; }

    .ml-auto { margin-left: auto !important; }

    .p-0 { padding: 0 !important; }

    .pr-2 { padding-right: 0.5rem !important; }
    .pr-4 { padding-right: 1rem !important; }

    .py-1 { padding-bottom: 0.25rem !important; padding-top: 0.25rem !important; }
    .py-4 { padding-bottom: 1rem !important; padding-top: 1rem !important; }

    .px-3 { padding-left: 0.75rem !important; padding-right: 0.75rem !important; }

    .pb-4 { padding-bottom: 1rem !important; }

    .pt-4 { padding-top: 1rem !important; }
    .pt-9 { padding-top: 2.375rem !important; }

    .text-xs { font-size: 0.5rem !important; }
    .text-sm { font-size: 0.75rem !important; }
    .text-lg { font-size: 1.25rem !important; }

    .text-gray-700 { color: #4A5568 !important; }

    .text-center { text-align: center !important; }
    .text-right { text-align: right !important; }

    .tracking-widest { letter-spacing: 0.1rem; }

    .uppercase { text-transform: uppercase !important; }

    .w-auto { width: auto !important; }
    .w-0 { width: 0px !important; }
</style>
</head>
<body>
    <table>
        <tr>
            <td class="pt-9">
                <div class="font-bold">{{ $customer_company_name }}</div>
                <div class="text-gray-700 text-sm">
                    {{ $customer_name }}<br>
                    {{ $customer_street }}<br>
                    {{ $customer_zipcode }} {{ $customer_city }}<br>
                    {{ $customer_country }}
                </div>
			</td>
			<td class="w-0">
                <svg viewBox="0 0 278 24" height="16">
                    <g>
                        <path fill="#2D3748" d="M18.1,23.7V7.5h-0.2l-4.3,16.2H9.4L5.2,7.5H5v16.2H0V0.3h7.6l3.9,15h0.2l3.9-15h7.5v23.5L18.1,23.7L18.1,23.7z"/>
                        <path fill="#2D3748" d="M40.2,23.7L39,19H32l-1.1,4.7h-5.3l6.3-23.5h7.4l6.2,23.5H40.2z M35.6,5h-0.2l-2.3,9.6h4.8L35.6,5z"/>
                        <path fill="#2D3748" d="M58.9,23.8c-1,0.1-1.9,0.2-2.8,0.2c-2.6,0-4.5-0.4-5.7-1.1c-1.2-0.7-2-1.9-2.4-3.5c-0.4-1.6-0.6-4.1-0.6-7.4c0-3.2,0.2-5.7,0.6-7.3c0.4-1.6,1.2-2.8,2.4-3.6C51.7,0.4,53.6,0,56.1,0c0.9,0,1.8,0.1,2.7,0.2s1.7,0.3,2.3,0.4v4.1c-1.9-0.2-3.2-0.3-3.9-0.3c-1.5,0-2.6,0.2-3.2,0.5c-0.6,0.3-0.9,0.9-1.1,1.9s-0.2,2.7-0.2,5.3c0,2.6,0.1,4.3,0.2,5.3s0.5,1.6,1.1,1.9c0.6,0.3,1.6,0.5,3.2,0.5c1.3,0,2.6-0.1,4-0.3v4.1C60.7,23.6,59.9,23.7,58.9,23.8z"/>
                        <path fill="#2D3748" d="M76.3,23.7v-9.5H70v9.5h-5.3V0.3H70v9.3h6.3V0.3h5.3v23.5L76.3,23.7L76.3,23.7z"/>
                        <path fill="#2D3748" d="M88.4,23.8c-1.3-0.1-2.4-0.3-3.3-0.5v-4c2.3,0.2,4.2,0.3,5.9,0.3c1.1,0,1.9,0,2.4-0.2c0.5-0.1,0.9-0.3,1.1-0.7c0.2-0.4,0.3-1,0.3-1.9c0-0.8-0.1-1.5-0.3-1.9c-0.2-0.4-0.5-0.7-0.9-0.8c-0.4-0.1-1-0.2-1.8-0.2h-3.6V9.8h3.6c0.7,0,1.2-0.1,1.6-0.2c0.4-0.1,0.6-0.4,0.8-0.8c0.2-0.4,0.3-1,0.3-1.8c0-0.8-0.1-1.4-0.3-1.8c-0.2-0.4-0.6-0.6-1.1-0.7c-0.5-0.1-1.3-0.2-2.5-0.2c-1.7,0-3.6,0.1-5.6,0.4v-4c0.9-0.2,2-0.4,3.2-0.5C89.6,0.1,90.7,0,91.8,0c2,0,3.6,0.2,4.8,0.6c1.2,0.4,2,1.1,2.5,2s0.8,2.1,0.8,3.5c0,1.7-0.3,2.9-0.9,3.8c-0.6,0.9-1.5,1.5-2.7,1.8v0.1c1.3,0.3,2.2,0.9,2.9,1.7c0.6,0.8,0.9,2.1,0.9,4c0,1.5-0.2,2.7-0.7,3.6c-0.5,0.9-1.3,1.6-2.5,2.1c-1.2,0.5-2.9,0.7-5.1,0.7C90.8,24,89.6,23.9,88.4,23.8z"/>
                    </g>
                    <g>
                        <path fill="#A0AEC0" d="M105,23.7l5.5-23.5h4.4l-5.5,23.5H105z"/>
                        <path fill="#A0AEC0" d="M114.1,23.7l5.5-23.5h4.4l-5.5,23.5H114.1z"/>
                        <path fill="#A0AEC0" d="M123.3,23.7l5.5-23.5h4.4l-5.5,23.5H123.3z"/>
                    </g>
                    <g>
                        <path fill="#2D3748" d="M138.1,0.3h10c2.1,0,3.7,0.5,4.7,1.5c1,1,1.6,2.5,1.6,4.4c0,1.7-0.3,2.9-0.9,3.8c-0.6,0.9-1.5,1.4-2.8,1.7v0.1c1.4,0.3,2.3,0.9,2.9,1.7c0.6,0.8,0.9,2.1,0.9,3.9c0,2-0.5,3.6-1.5,4.7c-1,1.1-2.6,1.6-4.9,1.6h-10L138.1,0.3L138.1,0.3zM148,9.5c0.4-0.1,0.6-0.4,0.8-0.7c0.1-0.4,0.2-0.9,0.2-1.6c0-0.8-0.1-1.3-0.2-1.6c-0.1-0.3-0.4-0.6-0.7-0.7c-0.4-0.1-0.9-0.2-1.7-0.2h-3v5h3C147.1,9.7,147.6,9.6,148,9.5z M148.2,19.1c0.4-0.1,0.6-0.4,0.7-0.7s0.2-0.9,0.2-1.7c0-0.8-0.1-1.3-0.2-1.7s-0.4-0.6-0.8-0.8c-0.4-0.1-0.9-0.2-1.7-0.2h-3.2v5.3h3.2C147.3,19.3,147.8,19.3,148.2,19.1z"/>
                        <path fill="#2D3748" d="M174.4,0.3v13c0,3.1-0.2,5.4-0.5,6.8c-0.3,1.4-1,2.4-2.2,3c-1.1,0.6-3,0.9-5.6,0.9c-2.6,0-4.5-0.3-5.6-0.9c-1.1-0.6-1.9-1.6-2.2-3.1c-0.3-1.4-0.5-3.7-0.5-6.8v-13h5.3v14.4c0,1.7,0.1,2.8,0.2,3.4c0.1,0.6,0.3,1.1,0.7,1.3c0.4,0.2,1.1,0.3,2.1,0.3s1.7-0.1,2.1-0.3c0.4-0.2,0.6-0.6,0.7-1.2c0.1-0.6,0.2-1.8,0.2-3.5V0.3H174.4z"/>
                        <path fill="#2D3748" d="M178.6,23.7V0.3h5.3v23.5L178.6,23.7L178.6,23.7z"/>
                        <path fill="#2D3748" d="M188.2,23.7V0.3h5.3v18.9h7.8v4.6L188.2,23.7L188.2,23.7z"/>
                        <path fill="#2D3748" d="M204.1,0.3h7.4c3,0,5.1,0.3,6.3,1c1.3,0.7,2,1.8,2.4,3.3c0.3,1.5,0.5,4,0.5,7.4s-0.2,5.9-0.5,7.4c-0.3,1.5-1.1,2.6-2.4,3.3c-1.3,0.7-3.4,1-6.3,1h-7.4V0.3z M211.3,19.3c1.4,0,2.4-0.1,2.8-0.3c0.5-0.2,0.8-0.8,0.9-1.7c0.1-0.9,0.2-2.7,0.2-5.3s-0.1-4.4-0.2-5.3c-0.1-0.9-0.4-1.5-0.9-1.7c-0.5-0.2-1.4-0.3-2.8-0.3h-1.9v14.7C209.4,19.3,211.3,19.3,211.3,19.3z"/>
                        <path fill="#2D3748" d="M224.4,23.7V0.3h14.1v4.4h-8.8v5h7.6v4.4h-7.6v5.3h8.8v4.4L224.4,23.7L224.4,23.7z"/>
                        <path fill="#2D3748" d="M253.7,23.7l-2.7-8.2h-3.4v8.2h-5.3V0.3h9.6c1.9,0,3.4,0.3,4.4,0.9c1,0.6,1.6,1.4,2,2.5c0.3,1.1,0.5,2.5,0.5,4.3c0,1.7-0.2,3.1-0.5,4.2c-0.4,1.2-1.1,2-2.2,2.6l3.3,9H253.7z M252.3,10.9c0.4-0.2,0.7-0.4,0.8-0.9c0.1-0.4,0.2-1.1,0.2-2.1c0-1-0.1-1.7-0.2-2.2c-0.1-0.4-0.4-0.7-0.8-0.9c-0.4-0.1-1.1-0.2-2.1-0.2h-2.7v6.5h2.7C251.2,11.1,251.9,11.1,252.3,10.9z"/>
                        <path fill="#2D3748" d="M262.1,23.4v-4.2c2.8,0.2,4.8,0.3,6,0.3c0.9,0,1.7,0,2.2-0.1c0.5-0.1,0.9-0.2,1.1-0.5c0.2-0.2,0.3-0.5,0.4-0.8c0.1-0.3,0.1-0.7,0.1-1.3c0-0.7,0-1.2-0.1-1.6c-0.1-0.3-0.3-0.5-0.6-0.7c-0.3-0.1-0.8-0.3-1.4-0.4l-3.8-0.5c-1.7-0.2-2.9-0.9-3.5-2c-0.6-1.1-0.9-2.7-0.9-4.7c0-2,0.3-3.5,1-4.5c0.7-1,1.6-1.7,2.7-2.1c1.1-0.3,2.6-0.5,4.3-0.5c2.2,0,4.4,0.2,6.6,0.7v4.1c-2-0.2-3.9-0.4-5.5-0.4c-1.7,0-2.8,0.2-3.2,0.5c-0.3,0.2-0.4,0.4-0.5,0.7c-0.1,0.3-0.1,0.7-0.1,1.3c0,0.7,0,1.1,0.1,1.4c0.1,0.3,0.2,0.5,0.5,0.6c0.2,0.1,0.7,0.2,1.2,0.3l4.1,0.6c0.9,0.1,1.7,0.4,2.3,0.7c0.6,0.3,1.1,0.9,1.5,1.6c0.5,1,0.7,2.4,0.7,4.3c0,2.2-0.3,3.8-0.9,4.9c-0.6,1.1-1.4,1.8-2.5,2.2c-1.1,0.3-2.4,0.5-4.1,0.5C266.8,24,264.3,23.8,262.1,23.4z"/>
                    </g>
                </svg>
                <br><br>
                <div class="font-bold">Mach3Builders BV</div>
                <div class="text-gray-700 text-sm">
                    Oslo 2b<br>
                    2993 LD Barendrecht<br>
                    Nederland<br>
                    010 - 820 88 90<br>
                    administratie@mach3builders.nl
                </div>

                <table class="w-auto mt-4">
                    <tr>
                        <td class="pr-2 text-gray-700 text-sm">KvK</td>
                        <td class="text-gray-700 text-sm">52909840</td>
                    </tr>
                    <tr>
                        <td class="pr-2 text-gray-700 text-sm">BTW</td>
                        <td class="text-gray-700 text-sm">NL850660476B01</td>
                    </tr>
                </table>
			</td>
		</tr>
    </table>

    <table class="mt-4">
		<tr>
            <td class="align-middle font-bold pr-4 text-lg tracking-widest uppercase w-0">{{ strtoupper(__('ui::invoice.invoice')) }}</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="align-middle font-bold pr-2 pt-4 text-sm w-0">{{ __('ui::invoice.number') }}</td>
            <td class="align-middle pt-4 text-gray-700 text-sm">{{ $invoice_number }}</td>
        </tr>
        <tr>
            <td class="align-middle font-bold pr-2 text-sm w-0">{{ __('ui::invoice.date') }}</td>
            <td class="align-middle text-gray-700 text-sm">{{ $invoice_date }}</td>
        </tr>
        <tr>
            <td class="align-middle font-bold pr-2 text-sm w-0">{{ __('ui::invoice.payment_reference') }}</td>
            <td class="align-middle text-gray-700 text-sm">{{ $payment_id }}</td>
        </tr>
    </table>

    <table id="order" class="mt-12">
        <tr>
            <th class="border-b border-gray-400">{{ __('ui::invoice.plan') }}</th>
            <th class="border-b border-gray-400 text-right">{{ __('ui::invoice.period') }}</th>
            <th class="border-b border-gray-400 text-right">{{ __('ui::invoice.price') }}</th>
        </tr>
        <tr>
            <td class="border-b border-gray-400 py-4">
                <div class="font-bold">{{ $platform_name }}</div>
                <div>{{ $plan_name }}</div>
                @if ($plan_info)
                    <div class="text-gray-700 text-sm">{{ $plan_info }}</div>
                @endif
            </td>
            <td class="border-b border-gray-400 py-4 text-right">{{ $plan_period }}</td>
            <td class="border-b border-gray-400 py-4 text-right">{{ $plan_price }}</td>
        </tr>
        <tr>
            <td class="border-bottom-none font-bold py-4 text-right" colspan="2">{{ __('ui::invoice.subtotal') }}</td>
            <td class="border-bottom-none font-bold py-4 text-right">{{ $plan_price }}</td>
        </tr>
        <tr>
            <td class="border-b border-gray-400 pb-4 text-right" colspan="2">{{ __('ui::invoice.tax') }}</td>
            <td class="border-b border-gray-400 pb-4 text-right">{{ $invoice_tax }}</td>
        </tr>
        <tr>
            <td class="font-bold py-4 text-lg text-right" colspan="2">{{ __('ui::invoice.total') }}</td>
            <td class="font-bold py-4 text-lg text-right">{{ $invoice_total }}</td>
        </tr>
    </table>

    <table class="bg-gray-200 mt-8">
        <tr>
            <td class="py-1 px-3 text-center">
                <span class="font-bold">{{ __('ui::invoice.warning') }}</span> {{ __('ui::invoice.paid_with') }} {{ $payment_method }}.
            </td>
        </tr>
    </table>
</body>
</html>
