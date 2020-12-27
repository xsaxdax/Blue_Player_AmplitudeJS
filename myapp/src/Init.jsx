import Amplitude  from 'amplitudejs/dist/amplitude';

Amplitude.init({
    continue_next: true,
    "songs": [
        {
            "name": "28",
            "artist": "Articon",
            "url": "http://articon-music.com/28.mp3"
        },
        {
            "name": "2",
            "artist": "Articon",
            "url": "http://articon-music.com/28.mp3"
        }
    ],
    callbacks: {
        initialized: console.log("Buffered: ", Amplitude.getBuffered()),
        readyState: console.log("Ready", Amplitude.getBuffered())
    }
})

