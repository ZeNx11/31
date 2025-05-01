<?php
// Kullanıcı oturum kontrolü
if (($AuthUser['id'] && \Delight\Cookie\Cookie::exists('Auth') && \Delight\Cookie\Cookie::get('Auth') == $AuthUser['token']) || in_array($Route->target[1], $Permissions)) {

    // Admin paneli navigasyonu
    $DashboardNav = array(
        array(
            'name' => __('Dashboard'),
            'icon' => 'fas fa-house',
            'url' => 'admin',
            'main' => 'main',
        ),
array(
    'name' => __('İçerik'),
    'url'   => 'admin/content',
    'main' => 'content',
    'sub' => array_filter(array(
        array(
            'name' => __('Animeler'),
            'url' => 'admin/series',
            'main' => 'content',
        ),
        array(
            'name' => __('Anime Filmleri'),
            'url' => 'admin/movies',
            'main' => 'content',
        ),
        array(
            'name' => __('Kategoriler'),
            'url' => 'admin/categories',
            'main' => 'content',
        ),
        array(
            'name' => __('Aktörler'),
            'url'   => 'admin/actors',
            'main'  => 'content',
        ),
        array(
            'name' => __('Ülkeler'),
            'url' => 'admin/countries',
            'main' => 'content',
        ),
        array(
            'name' => __('Koleksiyonlar'),
            'url'   => 'admin/collections',
            'main'  => 'content',
        ),
        array(
            'name' => __('Sayfalar'),
            'url' => 'admin/pages',
            'main' => 'content',
        ),
        array(
            'name' => __('Slider'),
            'url' => 'admin/slider',
            'main' => 'content',
        ),
        array(
            'name' => __('Hikayeler'),
            'url' => 'admin/stories',
            'main' => 'content',
        ),
    ), function ($item) use ($AuthUser) {
        if ($AuthUser['account_type'] == 'uploader') {
            return in_array($item['name'], [__('Animeler'), __('Anime Filmleri')]);
        }
        return true;
    })
),

        array(
            'name' => __('Topluluk'),
            'url'   => 'admin/community',
            'main' => 'community',
            'sub' => array_filter(array(
                array(
                    'name' => __('Kullanıcılar'),
                    'url' => 'admin/users',
                    'main' => 'community',
                ),
                array(
                    'name' => __('Yorumlar'),
                    'url' => 'admin/comments',
                    'main' => 'community',
                ),
                array(
                    'name' => __('Raporlar'),
                    'url' => 'admin/reports',
                    'main' => 'community',
                ),
                array(
                    'name' => __('İstekler'),
                    'url' => 'admin/requests',
                    'main' => 'community',
                ),
                array(
                    'name' => __('Mağaza'),
                    'url' => 'admin/store',
                    'main' => 'community',
                ),
), function ($item) use ($AuthUser) {
        if ($AuthUser['account_type'] == 'uploader') {
            return in_array($item['name'], [__('Raporlar'), __('İstekler')]);
        }
        return true;
    }),
),
        array(
            'name' => __('Araçlar'),
            'url' => 'admin/tools',
            'main' => 'other',
        ),
array(
    'name' => __('Ayarlar'),
    'url'   => 'admin/settings',
    'main' => 'settings',
    'sub' => array_filter(array(
        array(
            'name' => __('Genel'),
            'url' => 'admin/settings',
            'main' => 'settings',
        ),
        array(
            'name' => __('Cron Jobs'),
            'url' => 'admin/cron',
            'main' => 'settings',
        ),
        array(
            'name' => __('Diller'),
            'url'   => 'admin/languages',
            'main' => 'settings',
        ),
        array(
            'name' => __('Reklamlar'),
            'url' => 'admin/ads',
            'main' => 'settings',
        ),
        array(
            'name' => __('Fansublar'),
            'url' => 'admin/videos',
            'main' => 'settings',
        ),
    ), function ($item) use ($AuthUser) {
        if ($AuthUser['account_type'] == 'uploader') {
            return $item['name'] == __('Fansublar');
        }
        return true;
    })
),
        array(
            'name'  => __('Logout'),
            'url'   => 'logout',
            'main'  => 'logout',
        ),
    );
    
    $path = PATH . "/view/" . $view . ".php";

} else {
    header('Location: ' . APP . '/login');
    exit();
}
?>
