<?php

use yii\helpers\Url;
use app\assets\AppAsset;
use yii\helpers\Html;

?>
<div id="breadcrumbs">
    <div class="container is-size-6">
        <?= $breadcrumbs ?>
    </div>
</div>

<section class="section">
    <div class="container">
        <h1 class="title"><?= $blog->blogDescriptions->name ?></h1>
        <div class="content">
            <!--            --><? //= \yii\helpers\Html::decode($blog->blogDescriptions->text) ?>
            <p>При поиске матраса необходимо уделить тщательное внимание выбору его жесткости. Так какой выбрать матрас
                –
                жесткий, средней жесткости или мягкий? Для того, чтобы выбрать матрас, необходимо учитывать свой вес, а
                так
                же свое предпочтение. При этом есть еще много параметров, на которые необходимо обратить внимание при
                выборе:
            <ul>
                <li>- активный или пассивный образ жизни Вы ведете</li>
                <li>- Ваш возраст</li>
                <li>- Ваш вес</li>
                <li>- каким образом Вы привыкли спать</li>
                <li>- продолжительность сна в сутки</li>
            </ul>
            </p>
            <p>Людям с проблемами с верхним отделом позвоночника, необходимо спать на жесткой поверхности, а при болях в
                пояснице – на мягкой, для того, чтобы хорошо поддерживать поясничный отдел.
            </p>
            <p>Со временем качество матраса может ухудшаться, от этого ухудшается качество сна и здоровья.</p>
            <h2 class="subtitle">Жесткий или мягкий матрас?</h2>
            <figure class="image" style="float: right;">
                <?= Html::img("/{$images[1]->getPath('300x')}", ['alt' => $images[1]->urlAlias]) ?>
            </figure>
            <p>
            <p>Для того, чтобы изменить качество жесткости матраса, можно приобрести матрас с кокосовой койрой.
                Наполнитель
                из кокосовой койры считается не только безопасным, но и положительно влияющим на здоровье спящего
                человека.
                Кокосовая койра один из самых чистых материалов, который не вызывает аллергии - он гигиеничен, впитывает
                всю
                влагу и воздухопроницаем. Следовательно, может быть использован даже для новорожденных детей. Матрасы из
                койры можно применять для людей с неограниченным весом - это позволит одинаково и полностью распределить
                вес
                человека и поможет избавиться от нарушений осанки.
            </p>
            <p>Койра является долговечным материалом, так как усиливает износостойкость и продлевает срок службы
                матраса.
                Матрасы из кокосовой койры могут прослужить до 20- 30 лет, при этом не потеряв своих свойств. Поэтому
                для
                увеличения жесткости матраса – матрас из кокосовой койры именно то, что необходимо!
            </p>
            <p>Напротив, для того, чтобы Вашему матрасу придать мягкость и воздушность необходимо обратить внимание на
                наш
                тонкий матрас. Его невесомость и легкость поможет полностью избежать вам жесткости Вашего матраса. Спать
                на
                жесткой поверхности - это дело привычки или требований врача-ортопеда, а вот погрузится в сон на мягком,
                удобном и уютном матрасе - это наивысшая степень удовольствия. Сон на мягком матрасе идеально подойдет
                для
                людей пожилого возраста, что может послужить отличным подарком для Ваших родителей. Если Вы любите спать
                на
                боку или у Вас проблемы с поясницей, Вам тоже подойдет мягкий и тонкий матрас.
            </p>
            <h2 class="subtitle">Какой лучше матрас: жесткий или мягкий?</h2>
            <p>Если у Вас со временем возникла потребность в более мягком и удобном спальном месте, то тонкий матрас это
                идеальный вариант. Он отлично подойдет к любому матрасу, обеспечив Вам новую спальную поверхность. Стоит
                ли
                отмечать, что тонкий матрас выгодно отличается по цене от нового матраса, который понадобится
                приобретать. В
                нашем магазине Вы найдете матрас на любой кошелек. За ним будет удобно ухаживать и легко
                транспортировать в
                любое место. Несмотря на то, что толщина матрасов начинается от 3 см, Вы можете быть уверены что это
                обеспечит мягкость Вашего спального места на 100% благодаря своему наполнению.
            </p>
            <figure class="image" style="float: left;">
                <?= Html::img("/{$images[2]->getPath('300x')}", ['alt' => $images[2]->urlAlias]) ?>
            </figure>
            <p>Еще одним преимуществом является выбор материала, которым может быть наполнен матрас. Для людей с
                аллергическими реакциями есть искусственный материал, для тех кто любит натуральность - пух или перо.
                Если
                Вам нравится спать на жестком, но хотелось бы чуть улучшить мягкость спального места, то на помощь Вам
                придет наш тонкий матрас.
            </p>
            <p>
                Наш день напрямую зависит от того, на сколько хорошо мы спим ночью. Каждое утро мы встаем на работу,
                учебу, по
                своим делам и для того чтобы день был максимально продуктивным и полон энергии и сил, нам необходим
                качественный сон. Хороший сон - это не только энергичный день, а еще и наше здоровье. Для того, чтобы
                именно
                так и происходило каждое утро, необходим хороший матрас топпер.
            </p>
        </div>
    </div>
</section>
