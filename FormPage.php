<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="MainPageStyles.css" type="text/css"/>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Сайт Губернатора области</title>
    <link rel="icon" href="img/gerb_uo_2%201.png">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="styles/script.js" type="text/javascript"></script>
</head>
<body>
<div>
  <Header class="rectangle">
    <div style="display: flex;">
      <img class="logoOfSite" src="img/ulyanovsk_logo.png">
      <div class="nameOfSite">Интернет-приёмная Губернатора Ульяновской области</div>
      <div class="rightSmallContainerFooter">
        <div class="visuallyImparedContainer">
          <img class="comparedVisibilityImage" src="img/Vector.png">
          <div class="comparedVisionText">Версия для слабовидящих</div>
        </div>
        <div class="callUsContainer">
          <div class="callUs">позвони нам</div>
          <div class="callUsNumber">8(8422)41 20 90</div>
        </div>
      </div>
    </div>
    <div class="menuList">
      <div class="firstMenuHalf">
        <div class="btn-secondary menuListButton">Губернатор области</div>
        <div class="btn-secondary menuListButton">Обращения граждан (приёмная)</div>
        <div class="btn-secondary menuListButton">Контакты (телефоны и адреса)</div>
        <div class="btn-secondary menuListButton">Объявления и вакансии</div>
      </div>
      <div class="secondMenuHalf">
        <div class="btn-secondary menuListButton">Правительство  (органы власти)</div>
        <div class="btn-secondary menuListButton">Инвестиции (для инвесторов)</div>
        <div class="btn-secondary menuListButton">Данные об области</div>
        <div class="btn-secondary menuListButton">Органы власти</div>
      </div>
    </div>
  </Header>
  <div class="notificationBar">
    <div class="dearViewers">Уважаемые пользователи интернет-приёмной</div>
    <div class="mainNotification">Пожалуйста, прежде чем направить в интернет-приемную обращение по
        введенным на территории Ульяновской области ограничительным мерам в связи с распространением
        новой коронавирусной инфекцией (COVID-19), внимательно ознакомьтесь с информацией в разделе СТОП КОРОНАВИРУС
    </div>
  </div>
  <Main class="mainContent">
    <p class="nameOfMainContent">Заполните форму для обращения к Губернатору Ульяновской области (Алексей Русских)</p>
    <form style="margin: 50px;" method="post" action="insert.php" id="myForm">
      <div style="margin-bottom: 8px;">Выберите адресата:</div>
      <select id="addressee" class="form-control fieldFormParams" name="addressee" size="1" required>
        <option value="1" selected>Губернатор области - Алексей Русских</option>
        <option value="2">Заместитель губренатора - Эдель</option>
      </select>
      <div>Ваше полное ФИО:</div>
      <input type="text" class="form-control fieldFormParams" id="full_name" name="full_name" placeholder="Введите ваше ФИО" required>
      <div>Введите номер телефона:</div>
      <input type="text" class="form-control fieldFormParams" id="phone_number" name="phone_number" placeholder="Введите номер телефона" required>
      <div>Ваш Email:</div>
      <input type="text" class="form-control fieldFormParams" id="email" name="email" placeholder="Введите Email" required>
      <div>Тема вопроса:</div>
      <input type="text" class="form-control fieldFormParams" id="question" name="question" placeholder="Введите тему вопроса" required>
      <div>Текст вопроса:</div>
      <textarea id="text_of_question" name="text_of_question" class="form-control fieldFormParams" required></textarea>
      <button id="submitButton" type="submit" class="btn-primary blueButton" style="width: 85px;">Отправить</button>

      <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Окно валидации</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary close" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
        </div>
      </div>

    </form>
  </Main>
  <Footer class="footer" style="display: flex;">
      <div style="margin-right: 65px;">
        <div class="footerTitle">Правительство Ульяновской области</div>
        <img class="gerb_ul" src="img/gerb_uo_2%201.png">
      </div>
      <div class="footerTextContainer">
        <div class="smallColumnContainer">
          <div>Пресс-центр</div>
          <ul>
            <li class="liItem">События</li>
            <li class="liItem">Новости</li>
            <li class="liItem">Анонсы</li>
            <li class="liItem">Контакты пресс-служб</li>
          </ul>
        </div>
        <div class="smallColumnContainer">
          <div>Пресс-центр</div>
          <ul>
            <li class="liItem">События</li>
            <li class="liItem">Новости</li>
            <li class="liItem">Анонсы</li>
            <li class="liItem">Контакты пресс-служб</li>
          </ul>
        </div>
        <div class="smallColumnContainer">
          <div class="columnName">Пресс-центр</div>
          <ul>
            <li class="liItem">События</li>
            <li class="liItem">Новости</li>
            <li class="liItem">Анонсы</li>
            <li class="liItem">Контакты пресс-служб</li>
          </ul>
        </div>
      </div>
  </Footer>
</div>
</body>
</html>