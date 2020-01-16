<?php
include_once("inc/functions.php");
?>

<header>
    <img id="wordmark" src="img/queens-wordmark.png" alt="Queen's University" />
    <div id="hero-container" class="bee">
        <div class="overlay"></div>
        <img id="logo" src="img/queens-logo.png" alt="Queen's University Coat of Arms" />
        <div id="site-title">
            <a href="index.php">Department of Agriculture</a>
        </div>
        <nav>
            <ul>
                <li><a class="nav-item" href="about.php">About</a></li>
                <li><a class="nav-item" href="programs.php">Programs</a></li>
                <li>
                    <form  id="<?= SEARCH_FORM ?>" method="POST" action="search-results.php">
                        <div>
                            <label for="<?= SEARCH_BAR ?>" class="hide">Search term (required)</label>
                            <div class="nav-item">
                                <input type="text" name="<?= SEARCH_BAR ?>" id="<?= SEARCH_BAR ?>" maxlength="100" placeholder="Search" />
                            </div>
                        </div>
                        <input type="submit" value="Search" class="hide" />

                    </form>
                </li>
            </ul>
        </nav>
        <ul class="social">
            <li>
                <a href="https://www.facebook.com/QueensComputing">
                    <i class="icon-facebook-square" aria-hidden="true" title="Facebook"></i>
                    <span class="sr-only">Facebook</span>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/queenscomputing">
                    <i class="icon-twitter-square" aria-hidden="true" title="Twitter"></i>
                    <span class="sr-only">Twitter</span>
                </a>
            </li>
        </ul>
    </div>
</header>