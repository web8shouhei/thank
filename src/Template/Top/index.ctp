<header class="l-header">
  <div class="d-flex flex-nowrap container">
    <a href="/" class="l-header__sitename mr-3">Thank</a>
    <h1 class="l-header__description">大切な人が笑顔になるプレゼントを</h1>
  </div>
</header><!-- /header -->

<article class="l-container">
  <nav class="l-nav--header">
    <ul class="l-nav--header__wrap d-flex flex-nowrap flex-start">
      <li class="js-navigation" data-relation="js-top--ranking">ランキング</li>
      <li class="js-navigation" data-relation="js-top--recommended">おすすめ</li>
      <li class="js-navigation" data-relation="js-top--trend">トレンド</li>
      <li class="js-navigation" data-relation="js-top--category">カテゴリー</li>
    </ul>
    <span class="l-nav--header__underline js-navigation-underline"></span>
  </nav>
  
  <section class="l-content--top container py-3">
    <div class="d-none js-top--ranking">
      <?= $this->element('post/itemlist') ?>
      <?= $this->element('post/itemlist') ?>
      <?= $this->element('post/itemlist') ?>
      <?= $this->element('post/itemlist') ?>
      <?= $this->element('post/itemlist') ?>
      <?= $this->element('post/itemlist') ?>
      <?= $this->element('post/itemlist') ?>
      <?= $this->element('post/itemlist') ?>
      <?= $this->element('post/itemlist') ?>
      <?= $this->element('post/itemlist') ?>
    </div>
    <div class="d-none js-top--recommended">
      a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>
      a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>
      a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>
    </div>
    <div class="d-none js-top--trend">
      トレンド
    </div>
    <div class="d-none js-top--category">
      カテゴリー
    </div>
  </section>
</article>