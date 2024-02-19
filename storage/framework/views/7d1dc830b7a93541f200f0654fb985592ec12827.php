<!DOCTYPE html>
<html lang="tr">

<head>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KXNHQS2');
    </script>

    <meta charset="utf-8" />
    <title>ARBSYS</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/typeahead.css')); ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

    <?php echo $__env->yieldContent('style'); ?>
    <link rel="shortcut icon" href="<?php echo e(asset('assets/media/logos/favicon.ico')); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mediator')): ?>
                <a href="<?php echo e(route('home')); ?>">
                    <img alt="Logo" src="<?php echo e(asset('assets/media/logos/arbsysLOGO.png')); ?>" width="60" />
                </a>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <a href="<?php echo e(route('admin.home')); ?>">
                    <img alt="Logo" src="<?php echo e(asset('assets/media/logos/arbsysLOGO.png')); ?>" width="60" />
                </a>
            <?php endif; ?>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler">
                <span></span>
            </button>
            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler">
                <i class="flaticon-more"></i>
            </button>
        </div>
    </div>
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
                id="kt_aside">
                <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                    <div class="kt-aside__brand-logo">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mediator')): ?>
                            <a href="<?php echo e(route('home')); ?>">
                                <img alt="Logo" src="<?php echo e(asset('assets/media/logos/arbsysLOGO.png')); ?>"
                                    width="60" />
                            </a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                            <a href="<?php echo e(route('admin.home')); ?>">
                                <img alt="Logo" src="<?php echo e(asset('assets/media/logos/arbsysLOGO.png')); ?>"
                                    width="60" />
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="kt-aside__brand-tools">
                        <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                            <span>
                                <?php echo e(svg('fas-angle-double-left')); ?>
                            </span>
                            <span>
                                <?php echo e(svg('fas-angle-double-right')); ?>
                            </span>
                        </button>
                    </div>
                </div>
                <?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                        <div id="kt_header_menu"
                            class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                            <ul class="kt-menu__nav ">

                            </ul>
                        </div>
                    </div>
                    <div class="kt-header__topbar">
                        <div class="kt-header__topbar-item dropdown">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px"
                                aria-expanded="true">
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
                                <div class="kt-head kt-head--skin-dark kt-head--fit-x kt-head--fit-b"
                                    style="background-image: url(<?php echo e(asset('assets/media/misc/bg-1.jpg')); ?>)">
                                    <h3 class="kt-head__title">
                                        Bildirimler
                                        &nbsp;
                                        <span
                                            class="btn btn-success btn-sm btn-bold btn-font-md"><?php echo e($notifications->count() ?? 0); ?></span>
                                    </h3>
                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-success kt-notification-item-padding-x"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" data-toggle="tab"
                                                href="#topbar_notifications_notifications" role="tab"
                                                aria-selected="true">Bildirimler</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events"
                                                role="tab" aria-selected="false">Hatırlatmalar</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="topbar_notifications_notifications"
                                        role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                                            data-scroll="true" data-height="300" data-mobile-height="200">
                                            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-box-1 kt-font-brand"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            <?php echo e($notification->text); ?>

                                                        </div>
                                                        <div class="kt-notification__item-time">

                                                        </div>
                                                    </div>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="kt-header__topbar-user">
                                    <span class="kt-header__topbar-welcome kt-hidden-mobile">Merhaba,</span>
                                    <span
                                        class="kt-header__topbar-username kt-hidden-mobile"><?php echo e(auth()->user()->name); ?></span>
                                    <img class="kt-hidden" alt="Pic"
                                        src="<?php echo e(asset('assets/media/users/300_25.jpg')); ?>" />
                                    <span
                                        class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><?php echo e(auth()->user()->name[0]); ?></span>
                                </div>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                                    style="background-image: url(<?php echo e(asset('assets/media/misc/bg-1.jpg')); ?>)">
                                    <div class="kt-user-card__avatar">
                                        <img class="kt-hidden" alt="Pic"
                                            src="<?php echo e(asset('assets/media/users/300_25.jpg')); ?>" />
                                        <span
                                            class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">
                                            <?php echo e(auth()->user()->name[0]); ?>

                                        </span>
                                    </div>
                                    <div class="kt-user-card__name">
                                        <?php echo e(auth()->user()->name); ?>

                                    </div>
                                    <?php if(auth()->user()->role_id != 1): ?>
                                        <div class="kt-user-card__badge">
                                            <span class="btn btn-success btn-sm btn-bold btn-font-md">
                                                <?php if(isset($notReadMessages) && $notReadMessages->count() != 0): ?>
                                                    <?php echo e($notReadMessages); ?>

                                                <?php else: ?>
                                                    0
                                                <?php endif; ?> Mesaj
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="kt-notification">
                                    <?php if(auth()->user()->role_id != 1): ?>
                                        <a href="<?php echo e(route('mediator.profile')); ?>" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="flaticon2-calendar-3 kt-font-success"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    Profil
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    Hesap ayarları ve daha fazlası
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/bildirimler" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="flaticon2-mail kt-font-warning"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    Mesajlar <?php if(isset($notReadMessages) && $notReadMessages->count() != 0): ?>
                                                        <span
                                                            class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded font-weight-bold ml-1">
                                                            <?php echo e($notReadMessages); ?>

                                                            okunmamış mesajınız var</span>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    Mesaj kutusu ve görevler
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/faturalar" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="flaticon2-cardiogram kt-font-warning"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    Faturalar
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    Fatura & Rapor
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                    <div class="kt-notification__custom kt-space-between">
                                        <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                            <?php if(auth()->user()->role_id != 1): ?> class="btn btn-label btn-label-brand btn-sm btn-bold" <?php else: ?> class="btn btn-label btn-label-brand btn-sm btn-bold w-100" <?php endif; ?>>Oturumu
                                            Kapat</a>
                                        <?php if(auth()->user()->role_id != 1): ?>
                                            <a href="#" target="_blank"
                                                class="btn btn-clean btn-sm btn-bold">Plan Yükselt</a>
                                        <?php endif; ?>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                            style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php echo $__env->yieldContent('content'); ?>
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-footer__copyright">
                            <?php echo e(date('Y')); ?>&nbsp;&copy;&nbsp;<a href="#" target="_blank"
                                class="kt-link">ARBSYS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="documentModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" style="color:#2C3E50;">İlk Bilgi Girişi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mt-2 ml-2 mr-2">
                        <a class="btn btn-warning btn-block" id="udfModalButton" style="color:white;">
                            BİLGİLERİ .UDF DOSYASINDAN AKTAR
                        </a>
                    </div>
                    <div class="text-center mt-2 ml-2 mr-2">
                        <a class="btn btn-success btn-block" id="manualButton" href="<?php echo e(route('lawsuit.create')); ?>">
                            BİLGİLERİ ELLE GİR
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="udfModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo e(route('lawsuit.save_with_file')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold" style="color:#2C3E50;">.UDF Dosyası ile Bilgi Girişi
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label></label>
                            <div></div>
                            <div class="file-drop-area">
                                <span class="fake-btn">Dosya seçin</span>
                                <span class="file-msg">yada dosyayı buraya sürükleyin.</span>
                                <input class="file-input" type="file" id="customFile" name="file">
                                <div class="item-delete"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">İptal</button>
                        <button type="submit" class="btn btn-success">Yükle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>
    <?php echo $__env->make('layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
    <script src="<?php echo e(asset("js/plugins/summernote/summernote-ext-print.js")); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KXNHQS2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
</body>

</html>
<?php /**PATH C:\laragon\www\arbsys\resources\views/layout/main.blade.php ENDPATH**/ ?>