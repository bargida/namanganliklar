@extends('layouts.layout')

@section('content')

include('sections.posts')

<div class="container">
      <div class="notification basic-flex">
        <div class="notification__text basic-flex">
          <h3>Хотите узнать новости первыми? подключите уведомления!
          </h3>
        </div>
        <button type="button" class="notification__button btn">
          Включит  уведомления!
        </button>
      </div>
    </div>
include('sections.news')

<div class="apps-block container basic-flex">
      <div class="apps-block__image"></div>
      <div class="apps-block__content">
        <h4>Всегда будьте в курсе последних новостей!</h4>
        <p>Установите мобильное приложение NAMANGANLIKLAR24 и все новости в вашем кармане!</p>
      </div>
      <div class="apps-block__links basic-flex">
        <div class="links__item">
          <a href="#"><img src="assets/img/googleplay.png" alt="googleplay"></a>
        </div>
        <div class="links__item">
          <a href="#"><img src="assets/img/appstore.png" alt="googleplay"></a>
        </div>
      </div>
    </div>

@endsection