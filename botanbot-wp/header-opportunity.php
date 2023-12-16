<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>BotanBot</title>
    <link rel="shortcut icon" href="<?php echo BOT_ASSETS_DIR ?>/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/style/main.css">

    <?php wp_head(); ?>

  </head>
  <body>
    <header class="header">
      <div class="container header-container flex-container">
        <a href="../index.html" class="main-link">
          <img src="<?php echo BOT_ASSETS_DIR ?>/images/icons/main_logo.svg" alt="logo" class="logo-icon">
        </a>
        <div class="nav-wrap">
          <nav class="nav">
            <ul class="nav-list">
              <li class="nav-item"><a href="https://botanbot.ru/opportunity/" class="nav-link active">Возможности</a></li>
              <li class="nav-item"><a href="../nav/photo.html" class="nav-link">Решение задач по фото</a></li>
              <li class="nav-item"><a href="../nav/voice.html" class="nav-link">Распознавание голосовых сообщений</a></li>
              <li class="nav-item mobile-bot-button">
                <button class="bot-button">
                  <a href="https://t.me/Botan_gdz_bot" target="_blank" class="bot-link">
                    перейти к боту
                  </a>
                </button>
              </li>
            </ul>
          </nav>
          <div class="hamburger-wrap">
            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="hamburger-cross">
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </header>