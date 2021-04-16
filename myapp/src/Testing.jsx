import React, { useEffect, useState } from 'react'
import axios from 'axios';
import Amplitude from 'amplitudejs/dist/amplitude';

const App = () => {
    const [posts, setPosts] = useState([]);

    const [dogs, setDogs] = useState([]);

  useEffect(() => {
    // axios.get(`/users`).then(res => {
    //   const users = res.data;
    //   setUsers(users);
    // });

    axios
      .all([axios.get(`/users`), axios.get(`/songs.json`)])
      .then(
        axios.spread((user, dog) => {

          const dogs = dog.data;
          setDogs(dogs);
        })
      );
  }, []);

    const getPosts = async () => {
        try {
            const userPosts = await axios.get("/songs.json")

            setPosts(userPosts.data);  // set State

        } catch (err) {
            console.error(err.message);
        }
    };




    useEffect(() => {

        getPosts()
    }, [])  // includes empty dependency array

    useEffect(() => {
        if (posts.length !== 0) {
            Amplitude.init({
                continue_next: true,
                "songs": posts,
                "default_album_art": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg",
                "callbacks": {
                    initialized: console.log("Buffered: ", Amplitude.getBuffered(), Amplitude.getConfig()),//+ setState(Amplitude),
                    readyState: console.log("Ready", Amplitude.getBuffered())
                }
            })
        }
    }, [posts])



    return (
        <div>
         {(posts.length) !== 0 ?
           <p>Loaded</p>: <p>Loading...</p>
         }
         {console.log(dogs)}
    </div>
    )
}
export default App;
