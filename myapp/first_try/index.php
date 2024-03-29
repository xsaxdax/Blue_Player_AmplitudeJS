<!DOCTYPE html>
<html>
<head>
  <title>Articon</title>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/amplitudejs@latest/dist/amplitude.js"></script>
   <meta charset="utf-8" />
   
   <meta content="width=device-width, initial-scale=1" name="viewport" />

   <!-- Include Style Sheet -->
   <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
  <link rel="stylesheet" type="text/css" href="css/app.css" />
 </head>
<body>
  <!-- Blue Playlist Container -->
  <div id="blue-playlist-container">

    <!-- Amplitude Player -->
    <div id="amplitude-player">
      <!-- Left Side Player -->
      <div id="amplitude-left">
        <img data-amplitude-song-info="cover_art_url" class="album-art" />
        <div class="amplitude-visualization" id="large-visualization">

        </div>
        <div id="player-left-bottom">
          <div id="time-container">
            <span class="current-time">
              <span class="amplitude-current-minutes"></span>:<span class="amplitude-current-seconds"></span>
            </span>
            <div id="progress-container">
              <div class="amplitude-wave-form">

              </div>
              <input type="range" class="amplitude-song-slider" />
              <progress id="song-played-progress" class="amplitude-song-played-progress"></progress>
              <progress id="song-buffered-progress" class="amplitude-buffered-progress" value="0"></progress>
            </div>
            <span class="duration">
              <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
            </span>
          </div>

          <div id="control-container">
            <div id="repeat-container">
              <div class="amplitude-repeat" id="repeat"></div>
              <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle"></div>
            </div>

            <div id="central-control-container">
              <div id="central-controls">
                <div class="amplitude-prev" id="previous"></div>
                <div class="amplitude-play-pause" id="play-pause"></div>
                <div class="amplitude-next" id="next"></div>
              </div>
            </div>

            <div id="volume-container">
              <div class="volume-controls">
                <div class="amplitude-mute amplitude-not-muted"></div>
                <input type="range" class="amplitude-volume-slider" />
                <div class="ms-range-fix"></div>
              </div>
              <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle-right"></div>
            </div>
          </div>

          <div id="meta-container">
            <span data-amplitude-song-info="name" class="song-name"></span>

            <div class="song-artist-album">
              <span data-amplitude-song-info="artist"></span>
              <span data-amplitude-song-info="album"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Left Side Player -->

      <!-- Right Side Player -->
      <div id="amplitude-right"> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">2.Articon_-_oj_moroz</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">4.Articon_-_u_podjezda</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">1.Articon_-_Intro</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">3.Articon_-_Ktoto</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">6.Articon_-_Ljudi_Naschi</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">5.Articon_-_80_Dnej</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">7.Articon_-_Skit1</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="7">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">8.Articon_-_odin</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="8">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">9.Articon_-_A_na_zemle_mi</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">11.Articon_-_ne_pomo4</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="9">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">10.Articon_-_Ne_mogu_zasnut</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="12">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">13.Articon_-_Mexiko</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="11">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">12.Articon_-_skit2</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="13">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">14.Articon_-_articon</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="15">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">16.Articon_-_Outro</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="18">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Arion_Articon_-_wsego_lish_son</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="14">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">15.Articon_-_Rekviem</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="16">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">28</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="17">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Arion_-_ustal_zaparilsya</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="20">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_4to_ti_xo4esh(160Kbs)</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="21">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_4to_ti_xo4esh(320Kbs)</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="19">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon&Cemck_-_Sirota</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="22">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_4to_ti_xo4esh</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="23">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_4to_ti_xo4esh_remix</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="24">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_BaunceShit2</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="25">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_DingDong_www.articon-music.com</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="26">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_Juli_07_1</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="27">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_Ljudi_Naschi_accapella</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="29">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_RealShitBQ</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="28">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_RealShit</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="30">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_Soldat</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="31">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_Stroim_Dom</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="32">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_dve_storoni</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="36">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_jamajka_raj(320Kbps)</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="33">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_freestyle2</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="34">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_guitar_rec</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="37">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_jamajka_raj</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="35">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_hit_oda</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="40">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_vanja(VillagePeople)</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="38">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_mi_zdes</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="39">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_stroim_dom_www.articon-music.com</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="42">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_wsjo_proxodit</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="43">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_August06_03_vers2</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="41">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_-_vanja</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="45">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_freestyle_arion</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="44">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_BAUNC</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="46">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_hit_oda</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="48">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_trance_minus_AR</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="47">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Articon_trance_minus</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="50">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">atomic_-_rekviem(BattleVers)</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="51">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">2Pac_-_Hit_Em_Up__Instrumental___www.RapGOLD.net_(44100Hz)</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div> 
        <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="49">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">arion_-_80dnej_wokrug_sweta</span>
          <span class="song-artist">Articon</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div>	</div>
<!-- End Amplitdue Player -->

      </div>
      <!-- End Right Side Player -->
    </div>
    <!-- End Amplitdue Player -->

  
  <!--
			Include UX functions JS

			NOTE: These are for handling things outside of the scope of AmplitudeJS
		-->
  <script type="text/javascript" src="js/functions.js"></script>
</body>

</html>