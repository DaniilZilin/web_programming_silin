<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="MainPageStyles.css" type="text/css"/>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="styles/script.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <title>Сайт Губернатора области</title>
    <link rel="icon" href="img/gerb_uo_2%201.png">
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
    <p class="nameOfMainContent">Список госслужащих, являющихся членами Правительства Ульяновской области</p>
      <input id="inputSearch" style="margin-left: 70px;" type="text" placeholder="Поиск...">
    <table id="testTable" class="table-bordered tableParams" cellpadding="10px">
      <tr class="thead tbody">
        <th>#</th><th>Имя</th><th>Фамилия</th><th>Отчество</th>
      </tr>
      <tbody id="alex">
      <?php
        include "script.php";
            foreach ( $result as $data) {
                echo "<tr><td>".$data['offical_id']."</td>";
                echo "<td>".$data['last_name']."</td>";
                echo "<td>".$data['first_name']."</td>";
                echo "<td>".$data['surname']."</td></tr>";
            }
      ?>
      </tbody>
    </table>
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