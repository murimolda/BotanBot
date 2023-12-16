<?php get_header('photo') ?>

<main class="main">
      <div class="container main-container flex-container">
        <section class="content-section">
          <h2 class="title">Решение примеров и задач по фото</h2>
          <p class="content-text">Вы можете отправить задание в виде фотографии. Ботан распознаёт изображение через новейшую нейросеть gpt-4-vision, что позволяет понимать ему интегралы, геометрию, химические формулы и прочие сложные задачи.</p>
          <div class="content-button-wrap">
            <button class="content-button bot-button">
              <a href="https://t.me/Botan_gdz_bot" target="_blank" class="bot-link">
                перейти к боту
              </a>
            </button>
            <a href="opportunity.html" class="opportunity-link">
              Подробнее про возможности &#8594;
            </a>
          </div>
        </section>
        <aside class="aside-block">
          <div class="mobile-screen">
            <img src="<?php echo BOT_ASSETS_DIR ?>/images/image/screen-image-photo.png" alt="mobile screen" class="screen-image">
          </div>
        </aside>
        </div>
    </main>


<?php get_footer() ?>