var fs = require("fs");
let cover_art_url = "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg"; //for the cover later on

const outputFile = './mynewfile1.js';
const artist = "Articon";

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

    // stream.write(fs.readFileSync('./template_1'));
    // stream.write(fs.readFileSync('./template_2'));
    // stream.write(fs.readFileSync('./template_3'));


    /*  , function (err) {
         if (err) throw err;
         console.log('Saved!');
     })
  */
    /* fs.appendFile(outputFile, fs.readFileSync('./template_2'), function (err) {
        if (err) throw err;
        console.log("Saved 2!");
    });

    fs.appendFile(outputFile, fs.readFileSync('./template_3'), function (err) {
        if (err) throw err;
        console.log("Saved 3!");
    }); */

}

function generateSongJSON() {
    fs.readFile("./tracks3", function (error, data) {
        if (error) { throw error; }
        console.log("tests")
        data.toString().split("\n").forEach(function (line, index, arr) {
            if (index === arr.length - 1 && line === "") { return; }
            else if (index === arr.length - 1) {
                write(`{ 
                    "name":"${line.slice(0, -4)}",
                    "artist":"${artist}",
                    "url": "http://articon-music.com/${line}" ,
                    "cover_art_url": "${cover_art_url}" 
                    } 
                `)
            }
            else {
                write(`{ 
                    "name":"${line.slice(0, -4)}",
                    "artist":"${artist}",
                    "url": "http://articon-music.com/${line}" ,
                    "cover_art_url": "${cover_art_url}" 
                    }, 
                    `)
            }

        })
    })
}
function write(song) {
    fs.appendFile("./template_4.txt", song, function (err) {
        if (err) throw err;
    });

}


