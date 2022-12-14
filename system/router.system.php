<?php

$f3 = require('module/router/base.php');

$f3->route(
    'GET /hehe',
    function () {
        echo 'Hello, world!';
    }
);

$f3->route(
    'GET /',
    function () {
        include './index.php';
    }
);

$f3->route(
    'POST ./notes/like',
    function () {
        include 'like_dislike.php';
    }
);

$f3->route(
    'POST ./admin',
    function () {
        include 'admin.php';
    }
);

$f3->route(
    'POST /admin/delete',
    function () {
        include 'system/delete.admin.php';
    }
);

$f3->route(
    'POST /admin/unban',
    function () {
        include 'system/unban.admin.php';
    }
);

$f3->route(
    'POST /admin/ban',
    function () {
        include 'system/ban.admin.php';
    }
);

$f3->route(
    'POST /admin/notes',
    function () {
        include 'system/notes.admin.php';
    }
);

$f3->route(
    'POST /admin/users',
    function () {
        include 'system/users.admin.php';
    }
);

$f3->route(
    'POST /reg',
    function () {
        include 'reg.php.php';
    }
);

$f3->route(
    'POST ./notes/dislike',
    function () {
        include 'like_dislike.php';
    }
);

$f3->route(
    'GET ./login',
    function () {
        include '../login.php';
    }
);

$f3->route(
    'GET /login/auth',
    function () {
        include 'vk.system.php';
    }
);

$f3->route(
    'GET ./logout',
    function () {
        include 'logout.system.php';
    }
);

$f3->route(
    'GET ./notes/create',
    function () {
        include 'page/publ.notes.php';
    }
);

$f3->route(
    'GET ./notes/all',
    function () {
        include 'page/all.notes.php';
    }
);

$f3->route(
    'POST ./notes/create/go',
    function () {
        include 'publ.sys.php';
    }
);

$f3->route(
    'GET ./u/@userid',
    function ($f3, $params) {
        include '../user.php';
    }
);

$f3->route(
    'GET ./site/my',
    function () {
        include '../my.php';
    }
);

$f3->route(
    'GET /go',
    function () {
        include '../go.php';
    }
);

$f3->route(
    'GET ./site/logout',
    function () {
        include '../logout.php';
    }
);



$f3->run();
