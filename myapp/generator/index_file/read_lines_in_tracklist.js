var fs = require("fs");
let cover_art_url = "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"; //for the cover later on

const outputFile = './index.html';
const artist = "Articon";

//generateSongHTML();
copy();
//generateSongJSON();


async function copy() {
    fs.writeFile(outputFile, '', function (err) {
        if (err) throw err;

    });

    let stream = fs.createWriteStream(outputFile, { flags: 'a' });


    stream.write(fs.readFileSync('./template_1'));
    stream.write(fs.readFileSync('./template_2'));
    stream.write(fs.readFileSync('./template_3'));
    stream.end();
    stream.on('finish', function () {
      console.log("finished");
    })

}

function generateSongHTML() {
    fs.writeFile("./template_2", '', function (err) {
        if (err) throw err;
    });
    fs.readFile("./tracks3", function (error, data) {
        if (error) { throw error; }
        console.log("tests")
        data.toString().split("\n").forEach(function (line, index, arr) {
            if (index === arr.length - 1 && line === "") { return; }
            else  {
                write(` 
                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="${index}">
                <div class="song-now-playing-icon-container">
                  <div class="play-button-container">
    
                  </div>
                  <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
                </div>
                <div class="song-meta-data">
                  <span class="song-title">${line.slice(0, -4)}</span>
                  <span class="song-artist">${artist}</span>
                </div>
                <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
                  <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
                  <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
                </a>
                <span class="song-duration">3:30</span>
              </div>`)
            }

        })
    })
}
function write(song) {
    fs.appendFile("./template_2", song, function (err) {
        if (err) throw err;
    });

}


