/* eslint-disable jsx-a11y/alt-text */
//import Amplitude from 'amplitudejs/dist/amplitude';
import React, { useState, useEffect } from 'react';
import Amplitude from './Init';
import './css/app.css';
//import './js/functions'
import LeftSidePlayer from './LeftSidePlayer';
import RightSidePlayer from './RightSidePlayer';
import axios from 'axios';



export default function Container(props) {

  const [song_data, setSong_Data] = useState(false);

  const getPosts = async () => {
    try {
      const songList = await axios.get("/songs.json", { crossdomain: true })

      setSong_Data(songList.data);  // set State

    } catch (err) {
      console.error(err.message);
    }
  };

  useEffect(() => {
    getPosts()
  }, [])  // includes empty dependency array
  

  useEffect(() => {
    if (song_data.length !== 0) {  
      Amplitude.init({
        continue_next: true,
        start_song: 0,
        "songs": song_data.songs,
        "default_album_art": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg",
        "callbacks": {
          'initialized': console.log("Buffered: ", Amplitude.getBuffered(), Amplitude.getConfig())
           ,
          'readyState': console.log("Ready", Amplitude.getBuffered()) 
          
    },
  waveforms: {
    sample_rate: 50
        }
      })
    }
  }, [song_data])

 



  return (
    
    <React.Fragment>

     
      {song_data ?
        <div id="blue-playlist-container">

          <div id="amplitude-player">
            
            <LeftSidePlayer />
            <RightSidePlayer songs={song_data.songs}/>
         
        </div>
       
 
      </div>

      
    
      : <p>Loading...</p>
} 
  </React.Fragment   >
  )
      
    
}



/* <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/amplitudejs@latest/dist/amplitude.js"></script>
   <meta charset="utf-8" />
   
   <meta content="width=device-width, initial-scale=1" name="viewport" />

  
   <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  /> */








