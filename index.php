<html lang="en" class="desktop-view not-mobile-device anon js no-touch discourse-no-touch" style="">
<head>
    <?php include_once('_header_meta.php') ?>
</head>
<body class="docked navigation-topics">
    <section id="main" class="ember-application">
        <div id="ember710" class="ember-view">
            <div id="ember753" class="ember-view">
                <?php include_once('_header.php') ?>
            </div>
            <div id="main-outlet" class="wrap">
                <?php include_once('_list_controls.php') ?>
                <div class="container list-container">
                    <div class="row">
                        <div class="full-width">
                            <div id="list-area">
                                <div id="ember1197" class="contents ember-view">
                                    <table id="ember1198" class="topic-list ember-view">
                                        <thead>
                                            <tr>
                                                <th data-sort-order="default" class="default">Topic</th>
                                                <th data-sort-order="category" class="category sortable">Category</th>
                                                <th data-sort-order="posters" class="posters">Users</th>
                                                <th data-sort-order="posts" class="posts sortable num">Replies</th>
                                                <th data-sort-order="views" class="views sortable num">Views</th>
                                                <th data-sort-order="activity" class="activity sortable num">Activity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php include_once('_post_welcome.php') ?>
                                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                                <?php include('_post_common.php') ?>
                                            <?php endfor ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>