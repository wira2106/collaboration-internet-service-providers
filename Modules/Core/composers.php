<?php

use Modules\Core\Composers\PermissionsViewComposer;

view()->creator('partials.sidebar-nav', \Modules\Core\Composers\SidebarViewCreator::class);
view()->composer('partials.footer', \Modules\Core\Composers\ApplicationVersionViewComposer::class);
view()->composer([
    'layouts.master',
    'layouts.master-presale',
    'layouts.print'
], \Modules\Core\Composers\SiteNameViewComposer::class);

view()->composer('core::fields.select-theme', \Modules\Core\Composers\ThemeComposer::class);
view()->composer('core::fields.select-locales', \Modules\Core\Composers\SettingLocalesComposer::class);
view()->composer('*', \Modules\Core\Composers\LocaleComposer::class);
view()->composer('*', \Modules\Core\Composers\CurrentUserViewComposer::class);
view()->composer([
    'layouts.master',
    'layouts.master-presale',
    'layouts.print'
], \Modules\Core\Composers\AssetsViewComposer::class);
view()->composer('*', \Modules\Core\Composers\EditorViewComposer::class);

view()->composer([
    'layouts.master',
    'layouts.master-presale',
    'layouts.print'
], PermissionsViewComposer::class);

view()->composer([
    'layouts.master',
    'layouts.master-presale',
    'layouts.print'
], \Modules\Core\Composers\TranslationsViewComposer::class);
