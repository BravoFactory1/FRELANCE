<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a39kSJH3x7FBso8O',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/About' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'About.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sections.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sections.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sections/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sections.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/slider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'services.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/parteners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parteners.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'parteners.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/parteners/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parteners.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/product-Categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product-Categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'product-Categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/product-Categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product-Categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/teams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'teams.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/teams/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/activity-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'activity_logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'messages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/setting/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'setting.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/setting/new-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.new_address',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'setting.update_new_address',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/admins/bonned' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.bonned_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/admins/deleted' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.deleted_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/admins/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/admins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admins.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/admins/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BUPriIPXifW4M3M9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/page/([^/]++)(*:21)|/se(?|rvices/([^/]++)(*:49)|t\\-locale/([^/]++)(*:74))|/dashboard/(?|p(?|a(?|ges/([^/]++)(?|/edit(*:124)|(*:132))|rteners/([^/]++)(?|(*:160)|/edit(*:173)|(*:181))|ssword/reset/([^/]++)(*:211))|roduct\\-Categories/([^/]++)(?|(*:250)|/edit(*:263)|(*:271)))|s(?|e(?|ctions/([^/]++)(?|(*:307)|/edit(*:320)|(*:328))|rvices/([^/]++)(?|(*:355)|/edit(*:368)|(*:376)))|lider/([^/]++)(?|(*:403)|/edit(*:416)|(*:424)))|categories/([^/]++)(?|(*:456)|/edit(*:469)|(*:477))|teams/([^/]++)(?|(*:503)|/edit(*:516)|(*:524))|messages/show/([^/]++)(?|(*:558))|admins/(?|([^/]++)/deactive(*:594)|bonned/([^/]++)/reactive(*:626)|deleted/([^/]++)/restore(*:658)|([^/]++)(*:674))))/?$}sDu',
    ),
    3 => 
    array (
      21 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      49 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.details',
          ),
          1 => 
          array (
            0 => 'serviceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      74 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'locale.set',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      124 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.edit',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.update',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parteners.show',
          ),
          1 => 
          array (
            0 => 'partener',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parteners.edit',
          ),
          1 => 
          array (
            0 => 'partener',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parteners.update',
          ),
          1 => 
          array (
            0 => 'partener',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'parteners.destroy',
          ),
          1 => 
          array (
            0 => 'partener',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product-Categories.show',
          ),
          1 => 
          array (
            0 => 'product_Category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product-Categories.edit',
          ),
          1 => 
          array (
            0 => 'product_Category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product-Categories.update',
          ),
          1 => 
          array (
            0 => 'product_Category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'product-Categories.destroy',
          ),
          1 => 
          array (
            0 => 'product_Category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sections.show',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sections.edit',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sections.update',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sections.destroy',
          ),
          1 => 
          array (
            0 => 'section',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.show',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      368 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.edit',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.update',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'services.destroy',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.show',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.edit',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.update',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slider.destroy',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.show',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      516 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.edit',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.update',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'teams.destroy',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'messages.show',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'messages.reply',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.deactive',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.reactive',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.restore',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a39kSJH3x7FBso8O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000059e0000000000000000";}";s:4:"hash";s:44:"wwOkv/gVU0HKh8Ma9hQdMOHlD2I92KACBEp3cR68Cd8=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::a39kSJH3x7FBso8O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Website\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomeController@page',
        'controller' => 'App\\Http\\Controllers\\Website\\HomeController@page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services/{serviceId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomeController@serviceDetails',
        'controller' => 'App\\Http\\Controllers\\Website\\HomeController@serviceDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'services.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomeController@contactMessage',
        'controller' => 'App\\Http\\Controllers\\Website\\HomeController@contactMessage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomeController@contact',
        'controller' => 'App\\Http\\Controllers\\Website\\HomeController@contact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'locale.set' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'set-locale/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:369:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:150:"function ($locale) {

    \\session()->put(\'locale\', $locale);
    \\app()->setLocale(\\session()->get(\'locale\'));
    return \\redirect()->url(\'/end\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005b80000000000000000";}";s:4:"hash";s:44:"ccKeqA7afX42lgNsmXhN5eoWC1Q92ZWgOVQSwH9W56Y=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'locale.set',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'About.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'About',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\About\\AboutController@index',
        'controller' => 'App\\Http\\Controllers\\Website\\About\\AboutController@index',
        'namespace' => NULL,
        'prefix' => '/About',
        'where' => 
        array (
        ),
        'as' => 'About.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard/',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'pages.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PagesController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/{page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'pages.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PagesController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PagesController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'pages.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PagesController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PagesController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sections.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'sections.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sections.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'sections.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sections.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'sections.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sections.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sections/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'sections.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sections.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sections/{section}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'sections.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sections.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/sections/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'sections.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sections.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/sections/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'sections.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SectionsController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'slider.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'slider.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'slider.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'slider.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/slider/{slider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'slider.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'slider.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'slider.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'services.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'services.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'services.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'services.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/{service}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'services.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'services.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'services.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServicesController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'categories.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'categories.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'categories.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'categories.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'categories.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'categories.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parteners.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/parteners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'parteners.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parteners.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/parteners/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'parteners.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parteners.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/parteners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'parteners.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parteners.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/parteners/{partener}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'parteners.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parteners.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/parteners/{partener}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'parteners.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parteners.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/parteners/{partener}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'parteners.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parteners.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/parteners/{partener}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'parteners.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartenersController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product-Categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/product-Categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'product-Categories.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product-Categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/product-Categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'product-Categories.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product-Categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/product-Categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'product-Categories.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product-Categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/product-Categories/{product_Category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'product-Categories.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product-Categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/product-Categories/{product_Category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'product-Categories.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product-Categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/product-Categories/{product_Category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'product-Categories.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product-Categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/product-Categories/{product_Category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'product-Categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\productCategoriesController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/teams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'teams.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/teams/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'teams.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/teams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'teams.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'teams.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/teams/{team}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'teams.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'teams.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'as' => 'teams.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TeamsController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'activity_logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/activity-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\HomeController@activtyLogs',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\HomeController@activtyLogs',
        'namespace' => NULL,
        'prefix' => '/dashboard/',
        'where' => 
        array (
        ),
        'as' => 'activity_logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'messages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageController@index',
        'as' => 'messages.index',
        'namespace' => NULL,
        'prefix' => 'dashboard/messages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'messages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/messages/show/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageController@show',
        'as' => 'messages.show',
        'namespace' => NULL,
        'prefix' => 'dashboard/messages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'messages.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/messages/show/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\MessageController@reply',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\MessageController@reply',
        'as' => 'messages.reply',
        'namespace' => NULL,
        'prefix' => 'dashboard/messages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/setting/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingController@edit',
        'as' => 'setting.edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/setting/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingController@update',
        'as' => 'setting.update',
        'namespace' => NULL,
        'prefix' => 'dashboard/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.new_address' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/setting/new-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingController@editNewAddress',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingController@editNewAddress',
        'as' => 'setting.new_address',
        'namespace' => NULL,
        'prefix' => 'dashboard/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.update_new_address' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/setting/new-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingController@updateNewAddress',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingController@updateNewAddress',
        'as' => 'setting.update_new_address',
        'namespace' => NULL,
        'prefix' => 'dashboard/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.deactive' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/admins/{admin}/deactive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@deActive',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@deActive',
        'as' => 'admins.deactive',
        'namespace' => NULL,
        'prefix' => 'dashboard/admins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.bonned_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/admins/bonned',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@bonned',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@bonned',
        'as' => 'admins.bonned_list',
        'namespace' => NULL,
        'prefix' => 'dashboard/admins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.reactive' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/admins/bonned/{admin}/reactive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@reActive',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@reActive',
        'as' => 'admins.reactive',
        'namespace' => NULL,
        'prefix' => 'dashboard/admins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.deleted_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/admins/deleted',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@deleted',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@deleted',
        'as' => 'admins.deleted_list',
        'namespace' => NULL,
        'prefix' => 'dashboard/admins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/admins/deleted/{admin}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@restore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@restore',
        'as' => 'admins.restore',
        'namespace' => NULL,
        'prefix' => 'dashboard/admins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/admins/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@export',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@export',
        'as' => 'admins.export',
        'namespace' => NULL,
        'prefix' => 'dashboard/admins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'as' => 'admins.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/admins/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'as' => 'admins.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'as' => 'admins.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admins.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
          4 => 'auth',
          5 => 'is_superadmin',
        ),
        'as' => 'admins.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdminsController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/dashboard/',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BUPriIPXifW4M3M9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/dashboard/',
        'where' => 
        array (
        ),
        'as' => 'generated::BUPriIPXifW4M3M9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/dashboard/',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/dashboard/',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/dashboard/',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/dashboard/',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'localeSessionRedirect',
          1 => 'localizationRedirect',
          2 => 'localeViewPath',
          3 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/dashboard/',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
