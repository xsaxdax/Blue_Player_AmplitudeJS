import React, { useState, useEffect } from 'react';
import Amplitude from 'amplitudejs/dist/amplitude';

export default function Example() {
  const [count, setCount] = useState(0);

  
  useEffect(() => {
    console.log('Init useEffect 1');

    Amplitude.init({
        continue_next: true,
        "songs": [
            {
                "name": "28",
                "artist": "Articon",
                "url": "http://articon-music.com/28.mp3"
            },
            {
                "name": "Jamaica",
                "artist": "Articon",
                "url": "http://articon-music.com/Articon_-_jamajka_raj.mp3"
            }
        ],
        callbacks: {        
            initialized: console.log("Buffered: ", Amplitude.getBuffered()) ,
            readyState: console.log("Ready", Amplitude.getBuffered())
        }
    })

}, [])

  // Similar to componentDidMount and componentDidUpdate:  useEffect(() => {    // Update the document title using the browser API    document.title = `You clicked ${count} times`;  });
  return (
    <div>
      <p>You clicked {count} times</p>
      <span class="song-title">  song {Amplitude.songs}</span>

      <button onClick={() => setCount(count + 1)}>
        Click me
      </button>
    </div>
  );
}