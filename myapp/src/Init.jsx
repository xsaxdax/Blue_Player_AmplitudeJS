import Amplitude from 'amplitudejs/dist/amplitude';
import { useEffect, useState } from 'react';
import Player from './Player';
import axios from 'axios';

export default function Init(){
  const [song_data, setSong_data] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      const result = await  axios.get   ('http://articon-music.com/songs.json');
 
      setSong_data(result.data);
    };
 
    fetchData();
  }, []);


useEffect(() => {
  console.log("Amplitude", song_data)
  Amplitude.init({
    "songs": [
      song_data
    ],
   /*  "songs": [
      {
        "name": "3.Articon_-_Ktoto",
        "artist": "Articon",
        "url": "http://articon-music.com/3.Articon_-_Ktoto.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "1.Articon_-_Intro",
        "artist": "Articon",
        "url": "http://articon-music.com/1.Articon_-_Intro.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "2.Articon_-_oj_moroz",
        "artist": "Articon",
        "url": "http://articon-music.com/2.Articon_-_oj_moroz.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "5.Articon_-_80_Dnej",
        "artist": "Articon",
        "url": "http://articon-music.com/5.Articon_-_80_Dnej.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "4.Articon_-_u_podjezda",
        "artist": "Articon",
        "url": "http://articon-music.com/4.Articon_-_u_podjezda.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "6.Articon_-_Ljudi_Naschi",
        "artist": "Articon",
        "url": "http://articon-music.com/6.Articon_-_Ljudi_Naschi.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "9.Articon_-_A_na_zemle_mi",
        "artist": "Articon",
        "url": "http://articon-music.com/9.Articon_-_A_na_zemle_mi.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "8.Articon_-_odin",
        "artist": "Articon",
        "url": "http://articon-music.com/8.Articon_-_odin.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "7.Articon_-_Skit1",
        "artist": "Articon",
        "url": "http://articon-music.com/7.Articon_-_Skit1.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "10.Articon_-_Ne_mogu_zasnut",
        "artist": "Articon",
        "url": "http://articon-music.com/10.Articon_-_Ne_mogu_zasnut.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "11.Articon_-_ne_pomo4",
        "artist": "Articon",
        "url": "http://articon-music.com/11.Articon_-_ne_pomo4.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "12.Articon_-_skit2",
        "artist": "Articon",
        "url": "http://articon-music.com/12.Articon_-_skit2.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "15.Articon_-_Rekviem",
        "artist": "Articon",
        "url": "http://articon-music.com/15.Articon_-_Rekviem.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "13.Articon_-_Mexiko",
        "artist": "Articon",
        "url": "http://articon-music.com/13.Articon_-_Mexiko.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "14.Articon_-_articon",
        "artist": "Articon",
        "url": "http://articon-music.com/14.Articon_-_articon.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "16.Articon_-_Outro",
        "artist": "Articon",
        "url": "http://articon-music.com/16.Articon_-_Outro.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Arion_Articon_-_wsego_lish_son",
        "artist": "Articon",
        "url": "http://articon-music.com/Arion_Articon_-_wsego_lish_son.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "28",
        "artist": "Articon",
        "url": "http://articon-music.com/28.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon&Cemck_-_Sirota",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon&Cemck_-_Sirota.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Arion_-_ustal_zaparilsya",
        "artist": "Articon",
        "url": "http://articon-music.com/Arion_-_ustal_zaparilsya.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_4to_ti_xo4esh(160Kbs)",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_4to_ti_xo4esh(160Kbs).mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_4to_ti_xo4esh",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_4to_ti_xo4esh.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_4to_ti_xo4esh(320Kbs)",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_4to_ti_xo4esh(320Kbs).mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_4to_ti_xo4esh_remix",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_4to_ti_xo4esh_remix.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_DingDong_www.articon-music.com",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_DingDong_www.articon-music.com.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_BaunceShit2",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_BaunceShit2.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_Juli_07_1",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_Juli_07_1.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_Ljudi_Naschi_accapella",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_Ljudi_Naschi_accapella.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_RealShitBQ",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_RealShitBQ.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_Stroim_Dom",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_Stroim_Dom.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_RealShit",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_RealShit.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_Soldat",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_Soldat.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_freestyle2",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_freestyle2.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_dve_storoni",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_dve_storoni.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_guitar_rec",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_guitar_rec.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_hit_oda",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_hit_oda.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_jamajka_raj(320Kbps)",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_jamajka_raj(320Kbps).mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_mi_zdes",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_mi_zdes.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_jamajka_raj",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_jamajka_raj.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_vanja(VillagePeople)",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_vanja(VillagePeople).mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_stroim_dom_www.articon-music.com",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_stroim_dom_www.articon-music.com.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_wsjo_proxodit",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_wsjo_proxodit.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_-_vanja",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_-_vanja.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_August06_03_vers2",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_August06_03_vers2.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_freestyle_arion",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_freestyle_arion.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_BAUNC",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_BAUNC.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_trance_minus",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_trance_minus.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_hit_oda",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_hit_oda.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "Articon_trance_minus_AR",
        "artist": "Articon",
        "url": "http://articon-music.com/Articon_trance_minus_AR.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "arion_-_80dnej_wokrug_sweta",
        "artist": "Articon",
        "url": "http://articon-music.com/arion_-_80dnej_wokrug_sweta.mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "atomic_-_rekviem(BattleVers)",
        "artist": "Articon",
        "url": "http://articon-music.com/atomic_-_rekviem(BattleVers).mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      },
      {
        "name": "2Pac_-_Hit_Em_Up__Instrumental___www.RapGOLD.net_(44100Hz)",
        "artist": "Articon",
        "url": "http://articon-music.com/2Pac_-_Hit_Em_Up__Instrumental___www.RapGOLD.net_(44100Hz).mp3",
        "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"
      }
    ], */
    "callbacks": {
      'play': function () {
        document.getElementById('album-art').style.visibility = 'hidden';
        document.getElementById('large-visualization').style.visibility = 'visible';
      },

      'pause': function () {
        document.getElementById('album-art').style.visibility = 'visible';
        document.getElementById('large-visualization').style.visibility = 'hidden';
      },
      'initialized': console.log("Buffered: ", Amplitude.getBuffered(), Amplitude.getConfig()),//+ setState(Amplitude),
                
    },
    waveforms: {
      sample_rate: 50
    }
  })
}, [song_data] )


return (
  <Player Amplitude={Amplitude} song_data={ song_data}/>
)
}
export { Amplitude }
