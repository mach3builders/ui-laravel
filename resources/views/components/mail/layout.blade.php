<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style type="text/css">
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        body {
            background-color: #EFF3F6;
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;

            color: #273142;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; 
            font-size: 16px; 
            line-height: 24px;
            -webkit-text-size-adjust: none;
        }

        table {
            box-sizing: border-box;
        }

        td, th {
            border-collapse:collapse;
            box-sizing: border-box;
        }

        h1 {
            font-size: 32px;
            font-weight: 500;
            line-height: 1.1;
            margin: 0 0 32px 0;
            padding: 0;
        }

        h2 {
            font-size: 28px;
            font-weight: 500;
            line-height: 1.1;
            margin: 0 0 32px 0;
            padding: 0;
        }

        h3 {
            font-size: 24px;
            font-weight: 500;
            line-height: 1.1;
            margin: 0 0 16px 0;
            padding: 0;
        }

        h4 {
            font-size: 22px;
            font-weight: 500;
            line-height: 1.1;
            margin: 0 0 16px 0;
            padding: 0;
        }

        h5 {
            font-size: 20px;
            font-weight: 500;
            line-height: 1.1;
            margin: 0 0 8px 0;
            padding: 0;
        }

        h6 {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.1;
            margin: 0 0 8px 0;
            padding: 0;
        }

        p {
            margin: 0 0 32px 0;
            padding: 0;
        }

        ul, ol {
            margin: 0 0 32px 0;
            padding: 0 0 0 20px;
        }

        h1:last-child, 
        h2:last-child, 
        h3:last-child, 
        h4:last-child, 
        h5:last-child, 
        h6:last-child, 
        p:last-child, 
        ol:last-child, 
        ul:last-child,
        .last {
            margin-bottom: 0;
        }

        a {
            color: #2EA1F8;
            text-decoration: underline;
        }

        img {
            border-style: none;
            display: inline-block;
            outline-style: none;
            text-decoration: none;
        }

        .main-wrapper {
            background-color: #EFF3F6;
            height: 100%;
            width: 100%;
        }

        .main-wrapper-content {
            height: 100%;
            margin: 0;
            padding: 0;
            vertical-align: top;
            width: 100%;
        }

        .sub-wrapper {
            width: 100%;
        }

        .sub-wrapper-content {
            margin: 0;
            padding: 48px 0 16px 0;
            vertical-align: top;
            width: 100%;
        }

        .content-wrapper {
            width: 600px;
        }

        .content-wrapper-header {
            background-color: transparent;
            padding: 16px 0 32px 0;
        }

        .content-wrapper-content {
            background-color: #FFF;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); 
            margin: 0; 
            padding: 32px 32px 0 32px; 
            vertical-align: top; 
            text-align: left;
        }

        .content-wrapper-body {
            margin: 0 0 32px 0;
        }

        .content-wrapper-signature {
            font-size: 14px;
            margin: 0 0 32px 0;
        }

        .content-wrapper-footer {
            color: #888;
            font-size: 11px;
            padding: 9px 0 32px 0;
        }

        .content-wrapper-footer a {
            color: #888;
            text-decoration: underline;
        }

        .button-wrapper {
            padding-bottom: 16px;
            width: 100%;
        }

        .button {
            box-sizing: border-box; 
            border-radius: 3px; 
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); 
            color: #FFF; 
            display: inline-block; 
            margin: 0 16px 16px 16px;
            text-decoration: none;  
        }

        .button-primary {
            background-color: #2EA1F8; 
            border-top: 10px solid #2EA1F8; 
            border-right: 16px solid #2EA1F8; 
            border-bottom: 10px solid #2EA1F8; 
            border-left: 16px solid #2EA1F8;
        }

        .button-secondary {
            background-color: #6c757d; 
            border-top: 10px solid #6c757d; 
            border-right: 16px solid #6c757d; 
            border-bottom: 10px solid #6c757d; 
            border-left: 16px solid #6c757d;
        }

        .button-danger {
            background-color: #dc3545; 
            border-top: 10px solid #dc3545; 
            border-right: 16px solid #dc3545; 
            border-bottom: 10px solid #dc3545; 
            border-left: 16px solid #dc3545;
        }

        .button-success {
            background-color: #28a745; 
            border-top: 10px solid #28a745; 
            border-right: 16px solid #28a745; 
            border-bottom: 10px solid #28a745; 
            border-left: 16px solid #28a745;
        }

        .table {
            margin-bottom: 32px;
            width: 100%;
        }

        .table th,
        .table td {
            border-top: 1px solid #DEE2E6;
            padding: 5px 10px;
            vertical-align: top;
        }

        .table th {
            border-bottom: 2px solid #DEE2E6;
            vertical-align: bottom;
        }

        .table tfoot td {
            font-weight: 500;
            border-top: 2px solid #555555;
            border-bottom: 2px solid #555555;
        }

        .divider {
            background-color:#dee2e6; 
            border:none; 
            color:#dee2e6; 
            height:1px; 
            margin: 22px 0;
        }

        .content-wrapper-content-footer {
            color: #666; 
            font-size: 12px;
            margin: 0 0 22px 0; 
            padding: 0; 
            vertical-align: top;
        }

        .content-wrapper-content-footer a {
            color: #666;
            text-decoration: underline;
        }
    </style>
    @yield('style')
</head>
<body>
    <table class="main-wrapper" border="0"  cellspacing="0" cellpadding="0" bgcolor="#EFF3F6">
        <tbody>
            <tr>
                <td class="main-wrapper-content">
                    
                    <table class="sub-wrapper" border="0"  cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="sub-wrapper-content" align="center">

                                    <table class="content-wrapper" border="0"  cellspacing="0" cellpadding="0">
                                        <tbody>
                                            @hasSection('logo')
                                                <tr>
                                                    <td class="content-wrapper-header" align="center">
                                                        @yield('logo')
                                                    </td>
                                                </tr>
                                            @endif

                                            <tr>
                                                <td class="content-wrapper-content" bgcolor="#FFFFFF">
                                                    @hasSection('salutation')
                                                        <h3>
                                                            @yield('salutation')
                                                        </h3>
                                                    @endif

                                                    @hasSection('content')
                                                        <div class="content-wrapper-body">
                                                            @yield('content')
                                                        </div>
                                                    @endif
                                                    
                                                    @hasSection('body')
                                                        <div class="content-wrapper-body">
                                                            @yield('body')
                                                        </div>
                                                    @endif

                                                    @hasSection('signature')
                                                        <div class="content-wrapper-signature">
                                                            @yield('signature')
                                                        </div>
                                                    @endif

                                                    @hasSection('footer')
                                                        <hr class="divider"/>

                                                        <table class="content-wrapper-content-footer" border="0"  cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        @yield('footer')
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                    
                                                </td>
                                            </tr>
                                            @hasSection('unsubscribe')
                                                <tr>
                                                    <td class="content-wrapper-footer" align="center">
                                                        @yield('unsubscribe')
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
	</table>
</body>
</html>