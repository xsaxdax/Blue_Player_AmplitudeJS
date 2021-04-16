/*const { createProxyMiddleware }= require("http-proxy-middleware");

const proxy = require("http-proxy-middleware");

module.exports = function(app) {


app.use(
    proxy("/songs.json", {
      target: "https://articon-music.com",
      headers: {
        accept: "application/json",
        method: "GET",
        'Access-Control-Allow-Origin' : '*',
        'Access-Control-Allow-Methods':'GET,PUT,POST,DELETE,PATCH,OPTIONS',
      },
        crossdomain: true ,
      secure: false,
      changeOrigin: true
    })
  );
}
 module.exports=function(app){
    app.use(
        
        createProxyMiddleware( '/songs.json', {
            target: 'https://articon-music.com',
            headers: {
                accept: "application/json",
                method: "GET",
              },
              secure:false,
            changeOrigin:true,
        })
    );
};
 */