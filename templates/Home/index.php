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
$message = '猫神社｜猫を愛する人たちの集うところ。猫神社で猫を愛で、猫に好かれる人生を送ろう。';
$this->assign('title', $message);
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon', '/favicon.ico?ver=0001') ?>
    <?= $this->Html->meta('keywords', '猫, ねこ, 猫神さま, ペット, 神社, 人気の猫') ?>

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
                    <?php foreach($catGods as $key => $catGod): ?>
                    <?php if($key % 3 === 0): ?>
                    <div class="row">
                    <?php endif; ?>
                        <div class="column">
                            <div class="text-center">
                                <?= $catGod['name'] ?>
                            </div>
                            <img
                                src="https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/<?= $catGod['image_name'] ?>"
                            />
                            <div>
                                <?= $catGod['description'] ?>
                            </div>
                        </div>
                    <?php if($key % 3 === 2): ?>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
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
                            <h2>
                                参拝する際の注意事項
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column text-center">
                            <div>
                            神社に着いたなら、まずは必ず鳥居をくぐります。神社の玄関にあたります。
                            日常の世界と神域とを区切る結界でもあると言われています。
                            正式な訪問には鳥居をきちんと通るのが、神様に対しての礼儀です。
                            鳥居の前では立ち止まって軽く一礼し、その後鳥居をくぐって参道へと進みます。
                            帽子をかぶっている場合は帽子を取ってから一礼し、鳥居をくぐるようにします。
                            駐車場から直接参道へとつながっている神社もありますが、できれば鳥居の外へ回りくぐり直した方が丁寧な参拝となります。
                            鳥居を通ればそこからは神様のいらっしゃる神域となります。拝殿までの参道は心を落ち着けてゆっくり歩きます。
                            また参道の中央は神様の通る道「正中（せいちゅう）」であると言われています。
                            参道を歩く時は中央を空けて、参道の両端を歩くのが決まり事となっています。
                                <ul>
                                    <li>
                                        柄杓を右手に持って水をすくい、左手にかけて清める。
                                    </li>
                                    <li>
                                        柄杓を左手に持ち替え、右手に水をかけて清める。
                                    </li>
                                    <li>
                                        再び柄杓を右手で持ち、左手で水を受け、その水で口をすすぐ。すすいだ水は飲みこまずに吐き出す。
                                    </li>
                                    <li>
                                        もう一度、左手に水をかけて清める。
                                    </li>
                                    <li>
                                        柄杓を静かに元の位置に戻す。
                                    </li>
                                    <p>参考:<a href="https://syukatsulabo.jp/article/8187">https://syukatsulabo.jp/article/8187</a></p>
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
                            ｢猫は犬ではない｣と『Total Cat Mojo』の著者であり、アニマルプラネットの『My Cat From Hell（地獄からやってきたうちの猫）』のホストを務めるJackson Galaxy氏は言っています。
                            ｢差別的に聞こえるかもしれませんが、私たちはいつも猫を犬色のメガネで見てしまっています。猫には人間に対するのと同じだけの尊厳を与えなければなりません｣それは、導入プロセスに時間をかけること、猫は今でも自ら獲物を狩るハンターとしてプログラムされているという事実を尊重するということでもあります。
                            あなたが家に入ると、猫はすぐにシグナルを拾い始めます。そして、あなたが接触したほかの動物の匂いに気づきます。
                            ｢あなたがさっき道で犬とすれ違ったこともわかります｣と、猫行動の専門家で『The Cat Whisperer』の著者であるMieshelle Nagelschneider氏は言います。ですので、これから猫に会うことがわかっているなら、ほかの動物の匂いをできるだけつけないようにしてください。
                            慎重を期すなら、Comfort ZoneやFeliwayなどのフェロモンを靴に吹きかけるとよいでしょう。こうしたスプレーは、縄張り行動を妨げるために売られていますが、猫を興奮させず、落ち着かせる作用もあります。
                            家に入ったら出口を塞がないように、とGalaxy氏。猫はなわばり意識が高く、注意深いので、部屋全体を戦略的に観察しています。
                            あなたを脅威ではなく味方として認識させるようにしてください。猫の近くにいるときはあらゆる行動に気を配らなければなりません。
                                <ul>
                                    <li>
                                        猫と目を合わせない：また、猫をまっすぐ見てもいけません。床に視線を落として、猫が近づいてくるのを待ちましょう。
                                    </li>
                                    <li>
                                        高いところから見下さない：背を屈めて膝に手をあてるか、床に座ってください。｢飼い主の隣に座ってください｣とMcNamee氏。｢そうすれば、猫はあなたを味方だと認識します｣
                                    </li>
                                    <li>
                                        騒音をたてない：静かにしてください。また、騒がしい子どもや犬を近づけないように。
                                    </li>
                                    <li>
                                        猫に手を突き出さない：猫があなたの存在に慣れてきたら、指をそっと差し出し、匂いをかがせます。なるべくゆっくりと動いてください。指を指したり、手のひらを見せたりしないこと。
                                    </li>
                                    <p>参考：<a href="https://www.lifehacker.jp/2018/09/how-to-get-a-cat-to-like-you.html">https://www.lifehacker.jp/2018/09/how-to-get-a-cat-to-like-you.html</a></p>
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
                                猫の鳴き声と言えば「ニャーニャー」や「ニャーオー」などが代表的ですよね。これは、食事が欲しいときや、遊んでほしい、かまってほしいなど、
                                飼い主さまの関心を引きたい時に使われる鳴き声と言われています。
                                ただ、この鳴き声は、何かしたいのにできないなど不満がある時にも発する場合もあるので、猫の行動や声の抑揚で気持ちを察してあげる必要があります。
                                簡単な見分け方として、低い声の場合は威嚇、警戒、不安を、高い声の場合は要求、甘え、危険信号を訴えていると思いましょう。
                                自由気ままに見える猫ですが、実はとっても繊細でデリケート。ちょっとした環境の変化にも過敏に反応するので、ストレスで大きな声を出してしまうこともあります。
                                いらいら、ウロウロしながら怒ったような鳴き声をしている場合は、ストレスがたまっていると察してあげてください。ストレスがたまっているな、と思ったら、
                                上下運動ができるようなキャットタワーを用意して適度に運動させたり、スキンシップを取ったりして、ストレスを発散させてあげましょう。
                                また、引っ越しなど環境が大きく変わって、落ち着きがなく大きな声で鳴き続ける場合があります。
                                その時は、猫の臭いがついた毛布やベッドを使って、猫が安心して隠れる場所を作ってあげるといいでしょう。この場合も、やさしくなでるなどのスキンシップも効果的です。
                                発情期のサイン
                                <ul>
                                    <li>
                                        おなかを見せてクネクネする
                                    </li>
                                    <li>
                                        しっぽのつけ根をなでると、おしりを突き上げる
                                    </li>
                                    <li>
                                        人やものに頭や首をこすりつける
                                    </li>
                                    <p>参考：<a href="https://www.axa-direct.co.jp/pet/pet-ms/detail/83/">https://www.axa-direct.co.jp/pet/pet-ms/detail/83/</a></p>
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
                    <?php foreach($comments as $key => $comment): ?>
                    <?php if($key % 3 === 0): ?>
                    <div class="row">
                    <?php endif; ?>
                        <div class="column text-center">
                            <div><?= $comment['name'] ?></div>
                            <div>
                                <?= $comment['comment'] ?>
                            </div>
                        </div>
                    <?php if($key % 3 === 2): ?>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
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
                            <img src="https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/<?= $catGods[0]['image_name'] ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆2位☆
                            </div>
                            <img src="https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/<?= $catGods[1]['image_name'] ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆3位☆
                            </div>
                            <img src="https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/<?= $catGods[2]['image_name'] ?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column text-center">
                            <h4>
                                コメントの多い猫神さま
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆1位☆
                            </div>
                            <img src="https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/<?= $catGods[3]['image_name'] ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆2位☆
                            </div>
                            <img src="https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/<?= $catGods[4]['image_name'] ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="text-center">
                                ☆3位☆
                            </div>
                            <img src="https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/<?= $catGods[5]['image_name'] ?>" />
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</body>
</html>
