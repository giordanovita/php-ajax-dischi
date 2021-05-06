<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- vue 2 -->
     <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script> 
    <!-- axios -->
     <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
     
    <title>Dischi</title>
    
</head>

<body>
    <div id="app" class="container">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <h1>Dischi</h1>
              
                <ul>
                    <li v-for='album in albumsArr'>
                        <img :src="album['poster'] ">
                        <div> {{album.author}}</div>
                        <div> {{album.genre}}</div>
                        <div> {{album.title}}</div>
                        <div> {{album.year}}</div>
                    </li>
               
               </ul>
               
            </div>
        </div>
    </div>



    <script>
    
    function init() {
            new Vue({
                el: "#app",
                data: {
                    'albumsArr':'',
                    
                },
                mounted() {
                    axios.get('data.php')
                        .then(r => {
                           // console.log(r);
                           this.albumsArr=r.data;
                           console.log(this.albumsArr);

                        })
                        .catch(e => {
                            console.log(e);
                        })
                },

               
            });
        }
        document.addEventListener("DOMContentLoaded",init);
    
    
    
    </script>
  </body>
</html>