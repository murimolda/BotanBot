<?php get_header('voice') ?>

<main class="main">
      <div class="container main-container flex-container">
        <section class="content-section">
          <h2 class="title">Распознавание голосовых сообщений</h2>
          <p class="content-text">Ботан способен расшифровать голосовые сообщения (в том числе пересланные из другого чата), преобразовать их в текст и отправить транскрипцию аудиозаписи.</p>
          <p class="content-text">Если в сообщении есть вопрос или задача, бот ответит развернуто.</p>
          <div class="content-button-wrap">
            <button class="content-button bot-button">
              <a href="https://t.me/Botan_gdz_bot" target="_blank" class="bot-link">
                перейти к боту
              </a>
            </button>
            <a href="https://botanbot.ru/opportunity/" class="opportunity-link">
              Подробнее про возможности &#8594;
            </a>
          </div>
        </section>
        <aside class="aside-block">
          <div class="mobile-screen">
            <img src="<?php echo BOT_ASSETS_DIR ?>/images/image/screen-image-voice.png" alt="mobile screen" class="screen-image">
          </div>
        </aside>
        </div>
    </main>



<?php get_footer() ?>