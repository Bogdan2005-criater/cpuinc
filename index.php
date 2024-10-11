<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPU.inc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css"/>
    <link rel="icon" href="/assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script defer src="/script.js"></script>
</head>
<body>
<script>
    async function loadPage(url) {
        try {
            const response = await fetch(url);
            if (response.ok) {
                const text = await response.text();
                document.getElementById('content').innerHTML = text;
            }
        } catch (error) {
            console.error('Ошибка загрузки страницы:', error);
        }
    }

    function handleNavigation() {
        const currentURL = window.location.href;
           if (currentURL.includes("#about")) {
                loadPage(encodeURI('about.php'));
            } else if (currentURL.includes("#contact")) {
                loadPage(encodeURI('contact.php'));
            } else if (currentURL.includes("#web")) {
                loadPage(encodeURI('web.php'));
            } else {
                loadPage(encodeURI('main.php'));
            }
    }

    document.addEventListener('DOMContentLoaded', handleNavigation);
    window.addEventListener('hashchange', handleNavigation);
</script>
<nav class="navbar navbar-expand-lg bg-body-tertiary logo-text fixed-top as-nav">
      <div class="container-fluid logo-text">
        <img src="assets/img/logo.png" alt="Logo" class="d-inline-block align-text-top logo">
        <a class="navbar-brand bold-text" href="#">«ООО СиПиЮ.инк - (CPU.inc)»<br>Аутсорсинговая IT компания</a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon r"></span>
        </button>
        <div class="collapse navbar-collapse nav-vr" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="">
              <a class="nav-link  light1-text" href="#about" id="contact-link" role="button" >
                Кто мы
              </a>
            </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle light1-text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Услуги
              </a>
              <ul class="dropdown-menu">
                  <li><a href="#web" class="dropdown-item">Разработка ПО</a></li>
                  <li><a href="#" class="dropdown-item">ИИ и нейронные сети</a></li>
                  <li><a href="#" class="dropdown-item">3D технологии</a></li>
                  <li><a href="#" class="dropdown-item">Бизнес и консультации</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link  light1-text" href="#contact" role="button">
                Контакты
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle light1-text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Проекты
              </a>
              <ul class="dropdown-menu">
              </ul>
            </li>
          </ul>
        
        <div class="navbar-nav">
            <button class="btn btn-dark" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Вход</button>
            <button class="btn btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Регистрация</button>
        </div>
      </div>
    </div>
    </nav>
<div id="content"></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Добавляем конкретный класс анимации, когда элемент в поле зрения
                    entry.target.classList.add('animate__fadeIn'); // или любой другой класс анимации, который вам нужен
                } else {
                    // Удаляем конкретный класс анимации, когда элемент вне поля зрения
                    entry.target.classList.remove('animate__fadeIn'); // или любой другой класс анимации, который вам нужен
                }
            });
        });

        const elements = document.querySelectorAll('.animate__animated');
        elements.forEach(element => {
            observer.observe(element);
        });
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
