<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="/icon.png" />

    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script defer src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    
    <title>Mapty // Map your workouts</title>
    
    @vite(['resources/css/worksPagesCSS/app.css', 'resources/scss/worksPagesSCSS/mapty/app.scss', 'resources/js/works/mapty/main.js'])
  </head>
  <body>
    <div class="sidebar">
      <img src="{{ asset('storage\photos\works-page\mapty\logo.png')}}" alt="Logo" class="logo" />

      <ul class="workouts">
        <form class="form hidden">
          <div class="form__row">
            <label class="form__label">Type</label>
            <select class="form__input form__input--type">
              <option value="running">Running</option>
              <option value="cycling">Cycling</option>
            </select>
          </div>
          <div class="form__row">
            <label class="form__label">Distance</label>
            <input class="form__input form__input--distance" placeholder="km" />
          </div>
          <div class="form__row">
            <label class="form__label">Duration</label>
            <input
              class="form__input form__input--duration"
              placeholder="min"
            />
          </div>
          <div class="form__row">
            <label class="form__label">Cadence</label>
            <input
              class="form__input form__input--cadence"
              placeholder="step/min"
            />
          </div>
          <div class="form__row form__row--hidden">
            <label class="form__label">Elev Gain</label>
            <input
              class="form__input form__input--elevation"
              placeholder="meters"
            />
          </div>
          <button class="form__btn">OK</button>
        </form>
      </ul>

      <p class="copyright">
        &copy; Copyright by
        <a
          class="twitter-link"
          target="_blank"
          href="https://twitter.com/jonasschmedtman"
          >Jonas Schmedtmann
        </a>
        <br>
        Made by
        <a
          class="twitter-link"
          target="_blank"
          href="https://kacpercelak.pl"
          >Kacper Celak
        </a>
      </p>
    </div>

    <div id="map"></div>
  </body>
</html>
