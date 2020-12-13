var Amplitude = require('./amplitude')

Amplitude.init({
    continue_next: false,
    "songs": [
        {
            "name": "Risin' High (feat Raashan Ahmad)",
            "artist": "Ancient Astronauts",
            "album": "We Are to Answer",
            "url": "../songs/Ancient Astronauts - Risin' High (feat Raashan Ahmad).mp3",
            "cover_art_url": "../album-art/we-are-to-answer.jpg"
        }]
})

console.log(Amplitude.getVersion());