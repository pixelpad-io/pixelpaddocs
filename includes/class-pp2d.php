<?php

namespace THEME;

use BLUEPRINT\ThemeOptions;

class Docs {

    public function render() {
        $this->renderHeader();
        $this->renderBody();
        $this->renderFooter();
    }

    public function renderHeader() {
        get_header();
        $this->enqueueStyle();
    }

    public function getTopics() {
        return array(
            "introduction",
            "game",
            "start-loop",
            "objects",
            "sprites",
            "animation",
            "sounds",
            "rooms",
            "input",
            "collision",
            "functions",
            "camera",
            "fps",
            "text",
            "filters",
            "multiplayer",
            "legacy",
        );
    }

    public function renderBody() {
        $documentation = $this->getTopics();
        $c = $_GET["c"] ?? "introduction"; ?>

        <div class="my_docs_dashboard container-fluid">
            <?php
            $navbar = new Navbar();
            $navbar->render_navbar();
            ?>
            <div class="row navbar-expand-sm">
                <div class="col-sm-2 col-12 bg-light sidebar-parent p-0 collapse navbar-collapse" id="sidebarContent" style="z-index:100;">
                    <div class="sidebar-inner h-100 w-100">
                        <ul class="nav flex-column">
                            <?php foreach ($documentation as $category) : ?>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($category === $c ? "active" : ""); ?>" href="/pixelpad2d/?c=<?= $category; ?><?= empty($_GET["nonav"]) ? "" : "&nonav=1"; ?>">
                                        <?= ucwords($category); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div id="docs-main" class="col-sm-10 col-12 ml-auto p-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="mt-5 mb-5"> <?php _e("PixelPAD 2D"); ?> - <?= $c; ?> </h2>
                                <?php include_once(dirname(__FILE__) . "/" . $c . ".php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    public static function renderPixiExample($postid) { ?>
        <iframe style="width:100%; height:400px;" src="<?= get_permalink($postid) . "?docview=1"; ?>"></iframe>
    <?php
    }

    public static function renderSummaryTemplate($title, $summary, $img = null, $functionName = null) {
        $example = "";
        if ($functionName != null) {
            $example = json_decode(ThemeOptions::pixelpad_get_theme_setting("docs"))->{$functionName};
        } ?>
        <div class="row">
            <div class="col-12">
                <h4 class="mb-4"><?= $title; ?></h4>

                <div class="mb-5">
                    <?= $summary; ?>
                </div>
                <?php if (strlen($img) > 0) { ?>
                    <div class="mb-5">
                        <img src="<?= $img; ?>">
                    </div>
                <?php } ?>

                <?php if (strlen($example) > 0) { ?>
                    <div class="mb-5">
                        <?php self::renderPixiExample($example); ?>
                    </div>
                <?php } ?>
            </div>
        </div>

    <?php
    }

    public static function renderSyntaxTemplate($function, $description, $parameters, $return, $functionName) {
        if ($functionName != null) {
            $postid = json_decode(ThemeOptions::pixelpad_get_theme_setting("docs"))->{$functionName};
            //can hardcode postid; but this makes it easier to change 
        } ?>
        <div class="row mb-5">
            <div class="col-12 mb-2 mt-2">
                <h4><?= $function; ?></h4>

                <div class="mb-2">
                    <div>
                        <strong>Example</strong>
                    </div>
                    <div>
                        <?php self::renderPixiExample($postid); ?>
                    </div>
                </div>
                <div class="mb-2">
                    <div>
                        <strong>Description</strong>
                    </div>
                    <div>
                        <?= $description; ?>
                    </div>
                </div>
                <div class="mb-2">
                    <div>
                        <strong>Parameters</strong>
                    </div>
                    <div>
                        <?php
                        foreach ($parameters as $parameter => $def) {
                            echo "<em>" . $parameter . "</em><br/>";
                            echo $def . "<br/>";
                            echo "<br/>";
                        }

                        ?>
                    </div>
                </div>
                <div class="mb-2">
                    <div>
                        <strong>Return</strong>
                    </div>
                    <div>
                        <?= $return; ?>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }

    public function enqueueStyle() { ?>
        <style>
            .doc-code {
                color: white;
                background: #0a0a0a;
                font-family: monospace;
                padding: 1rem;
            }

            .sidebar-parent {
                position: fixed;
                top: 4rem;
                bottom: 0;
            }

            .sidebar-inner {
                overflow-x: hidden;
                overflow-y: hidden;
            }

            .sidebar-inner:hover {
                overflow-y: auto;
            }

            #docs-main {
                top: 4rem;
                /*account for navbar*/

            }

            .sidebar-inner .active {
                background: #E85DB6;
                color: white;
            }

            .sidebar-inner a {
                color: #343a40;
            }

            #footer {
                margin-top: 4rem;
            }

            iFrame {
                border: none;
            }
        </style>

        <?php

        if (!empty($_GET["nonav"])) { ?>
            <style>
                .sidebar-parent {
                    top: 0;
                }

                footer {
                    display: none;
                }
            </style>
<?php }
    }

    public function renderFooter() {
        get_footer();
    }
}
