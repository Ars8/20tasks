<?php

    $elements = [
        [
            "classElement" => "progress progress-sm mb-3",
            "classDflex" => "d-flex mt-2",
            "description" => "Мои задачи",
            "value" => "7 / 10",
            "style" => "65",
            "color" => "bg-fusion-400",
        ],
        [
            "classElement" => "progress progress-sm mb-3",
            "classDflex" => "d-flex",
            "description" => "Емкость диска",
            "value" => "440 TB",
            "style" => "34",
            "color" => "bg-success-500",
        ],
        [
            "classElement" => "progress progress-sm mb-3",
            "classDflex" => "d-flex",
            "description" => "Пройдено уроков",
            "value" => "77%",
            "style" => "77",
            "color" => "bg-info-400",
        ],
        [
            "classElement" => "progress progress-sm mb-g",
            "classDflex" => "d-flex",
            "description" => "Осталось дней",
            "value" => "2 дня",
            "style" => "84",
            "color" => "bg-primary-300",
        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php foreach ($elements as $element): ?>

                                <div class="<?php echo $element['classDflex'] ;?>">
                                <?php echo $element['description'] ;?>
                                <span class="d-inline-block ml-auto"><?php echo $element['value'] ;?></span>
                            </div>
                            <div class="<?php echo $element['classElement'] ;?>">
                                <div class="progress-bar <?php echo $element['color'];?>" role="progressbar" style="width: <?php echo $element['style'];?>%;" aria-valuenow="<?php echo $element['style'];?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <?php endforeach; ?>


                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
