<base href="../../../">
<meta charset="utf-8" />
<title>
  @if ( !empty($page) && $page == 'dashboard') Dashboard
  @else Dashboard | @stack('title')
  @endif
</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<link href="/assets/backend/plugins/custom/datatables/datatables.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
<link href="/assets/backend/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
<link href="/assets/backend/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
<link href="/assets/backend/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
<link href="/assets/backend/css/themes/layout/header/base/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
<link href="/assets/backend/css/themes/layout/header/menu/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
<link href="/assets/backend/css/themes/layout/brand/dark.css?v=7.0.5" rel="stylesheet" type="text/css" />
<link href="/assets/backend/css/themes/layout/aside/dark.css?v=7.0.5" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/assets/backend/media/logos/favicon.ico" />
@stack('head')
