import axios from 'axios';

export default function APIService(){

const song_data= (()=> axios.get('http://articon-music.com/songs.json')
  .then((response) => {
    console.log(response.data);
    console.log(response.status);
    console.log(response.statusText);
    console.log(response.headers);
    console.log(response.config);
  }))
}