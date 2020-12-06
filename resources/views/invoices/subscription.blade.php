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

    /* components */
    .icon {
        height: 0.75rem;
        margin-top: 0.25rem;
        width: 0.75rem;
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
    .pt-12 { padding-top: 3rem !important; }

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
			<td class="pt-12">
                <div class="font-bold">{{ $customer_company_name }}</div>
                <div class="text-gray-700 text-sm">
                    {{ $customer_name }}<br>
                    {{ $customer_street }}<br>
                    {{ $customer_zipcode }} {{ $customer_city }}<br>
                    {{ $customer_country }}
                </div>
			</td>
			<td class="w-0">
                <img src="{{ config('app.url') }}{{ config('ui.logo_onvoice') }}" class="h-4 mb-8">
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
                <span class="font-bold">{{ __('ui::invoice.warning') }}</span>: {{ __('ui::invoice.paid_with') }} {{ $payment_method }}.
            </td>
        </tr>
    </table>
</body>
</html>
