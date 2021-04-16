const  RightSidePlayer= (props) =>{



return(
   <div id="amplitude-right">
   {props.songs.map((songs, index) => (
     <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index={index}
    //  onClick={()=>('.play-button-container')[0].style.display = 'none'}
    >
       <div class="song-now-playing-icon-container">
         <div class="play-button-container" >
           </div>
           <img class="now-playing" alt="" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg" />
         </div>
         <div class="song-meta-data">
           <span class="song-title">{songs.name}</span>
           <span class="song-artist">{songs.artist}</span>
         </div>
         <a href={songs.url} class="bandcamp-link" target="_blank" rel="noreferrer">
           <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg" />
           <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg" />
         </a>
         <span class="song-duration">3:30</span>
         
       </div>           
 ))
 }
</div>
)
}
export default RightSidePlayer;