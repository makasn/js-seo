<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            <a href="/">
                <div>猫神社・猫みくじ</div>
            </a>
            <h1>
                猫に愛を、猫から癒しを
            </h1>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <main class="main column column-65">
                <div class="content">
                    <div class="row">
                        <div class="column text-center">
                            <h2>
                                神社へ参拝
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="message default text-center">
                                <small>お気に入りの猫ちゃんにお賽銭をどうぞ</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column text-center">
                            <h2>
                                おみくじ
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="message default text-center">
                                <small>お好きなおみくじをどうぞ</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="/img/omikuji.jpg" />
                            <div class="text-center">猫みくじ</div>
                        </div>
                        <div class="column">
                            <img src="/img/omikuji.jpg" />
                            <div class="text-center">猫みくじ</div>
                        </div>
                        <div class="column">
                            <img src="/img/omikuji.jpg" />
                            <div class="text-center">猫みくじ</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column text-center">
                            <h2>カレンダー</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="message default text-center">
                                <small>あなたの猫さまにとって大切な日や猫さまと触れあえた日にスタンプをどうぞ</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div id="calendar" class="text-center"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column text-center">
                            <h2>
                                参拝する際の注意事項
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column text-center">
                            <div>
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                <ul>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column text-center">
                            <h2>
                                リアル猫さまに好かれる方法
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column text-center">
                            <div>
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                <ul>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column text-center">
                            <h2>
                                猫さまのご機嫌の見分け方
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column text-center">
                            <div>
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                <ul>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                    <li>
                                        testテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column text-center">
                            <h2>
                                猫さまへの最新のコメント
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column text-center">
                            <div>ほんわかさん</div>
                            <div>
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                            </div>
                        </div>
                        <div class="column text-center">
                            <div>ニヤニヤさん</div>
                            <div>
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                            </div>
                        </div>
                        <div class="column text-center">
                            <div>おすましさん</div>
                            <div>
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                                testテストtestテストtestテストtestテストtestテストtestテストtestテストtestテストtestテスト
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column text-center">
                            <h2>
                                閲覧履歴
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                        <div class="column">
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                            <div>
                                フリー素材サイトで拾ってきた猫さま。
                                とても可愛かったので一目惚れした子。
                                どうでもいいが壁紙がおしゃれ。
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="aside column column-25">
                <div class="content">
                    <div class="row">
                        <div class="column text-center">
                            <h4>
                                人気の猫神さま
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆1位☆
                            </div>
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆2位☆
                            </div>
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆3位☆
                            </div>
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column text-center">
                            <h4>
                                人気の猫おやつ
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆1位☆
                            </div>
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆2位☆
                            </div>
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆3位☆
                            </div>
                            <img src="/img/634d4594667405776a41734528f8a7d5_s.jpg" />
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</body>
</html>
