<?php get_header('opportunity') ?>

<main class="main">
      <div class="container main-container flex-container">
        <section class="opportunity-section">
          <h2 class="title">Возможности телеграм бота</h2>
          <div class="opportunity-button-wrap">
            <button class="bot-button">
              <a href="https://t.me/Botan_gdz_bot" target="_blank" class="bot-link">
                перейти к боту
              </a>
            </button>
          </div>
          <div class="opportunity-content-wrap">
            <ul class="opportunity-items-wrap">
              <li class="opportunity-item">
                <span class="opportunity-icon">
                  <img src="<?php echo BOT_ASSETS_DIR ?>/images/icons/camera-svg.svg" alt="microphone-svg" class="icon-svg">
                </span>
                <div class="opportunity-item-content">
                  <h4 class="title opportunity-title">Решение заданий по фото</h4>
                  <p class="opportunity-text">Вы можете отправить задание в виде фотографии.</p>
                  <p class="opportunity-text">Ботан распознаёт изображение через новейшую нейросеть gpt-4-vision, что позволяет понимать ему интегралы, геометрию, химические формулы и прочие сложные задачи.</p>
                  </div>
              </li>
              <li class="opportunity-item">
                <span class="opportunity-icon">
                  <img src="<?php echo BOT_ASSETS_DIR ?>/images/icons/microphone-svg.svg" alt="microphone-svg" class="icon-svg">
                </span>
                <div class="opportunity-item-content">
                  <h4 class="title opportunity-title">Распознавание голосовых сообщений</h4>
                  <p class="opportunity-text">Ботан способен расшифровать голосовые сообщения, преобразовать их в текст и отправить транскрипцию аудиозаписи.</p>
                  <p class="opportunity-text">Если в сообщении есть вопрос или задача, бот ответит развернуто.</p>
                  </div>
              </li>
            </ul>
            <ul class="opportunity-items-wrap">
              <li class="opportunity-item">
                <span class="opportunity-icon">
                  <img src="<?php echo BOT_ASSETS_DIR ?>/images/icons/translate-svg.svg" alt="translate-svg" class="icon-svg">
                </span>
                <div class="opportunity-item-content">
                  <h4 class="title opportunity-title">Перевод c любых языков</h4>
                  <p class="opportunity-text">Используйте мощь нейросетей для более точных и осмысленных переводов.</p>
                  </div>
              </li>
              <li class="opportunity-item">
                <span class="opportunity-icon">
                  <img src="<?php echo BOT_ASSETS_DIR ?>/images/icons/openai-svg.svg" alt="openai-svg" class="icon-svg">
                </span>
                <div class="opportunity-item-content">
                  <h4 class="title opportunity-title">Общение с ChatGPT</h4>
                  <p class="opportunity-text">Наш бот базируется на ChatGPT и принимает такие же инструкции и запросы.</p>
                  </div>
              </li>
            </ul>
            <ul class="opportunity-items-wrap">
              <li class="opportunity-item">
                <span class="opportunity-icon">
                  <img src="<?php echo BOT_ASSETS_DIR ?>/images/icons/idea-svgrepo-com.svg" alt="idea-svg" class="icon-svg">
                </span>
                <div class="opportunity-item-content">
                  <h4 class="title opportunity-title">Разъяснить сложный текст</h4>
                  <p class="opportunity-text">Ботан поможет вам разъяснить сложные тексты, делая их более простыми и понятными.</p>
                  </div>
              </li>
              <li class="opportunity-item">
                <span class="opportunity-icon">
                  <img src="<?php echo BOT_ASSETS_DIR ?>/images/icons/writer-svg.svg" alt="writer-svg" class="icon-svg">
                </span>
                <div class="opportunity-item-content">
                  <h4 class="title opportunity-title">Переписать текст</h4>
                  <p class="opportunity-text">С помощью телеграм-бота вы сможете легко переписать тексты, сохраняя смысл и структуру, но делая их более эффективными и убедительными.</p>
                  </div>
              </li>
            </ul>
          </div>
        </section>
      </div>
    </main>



<?php get_footer() ?>