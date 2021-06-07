
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CDN AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <!-- CDN VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>Document</title>
</head>

<body>
   
    <div id="app">
        <h1>My Vue Albums
           
            <span class="fntsize-light">
                <select v-model="genreToFilter"  @change="onSelectChange">
                    <option value="">Tutti i generi</option>
                    <option v-for="genre in genresList" :value="genre">{{genre}}   </option>
                </select>
            </span>

        </h1>

        <div class="my-container">

            <!-- il v-for qua serve a ripeter la struttura ma anche per estrapolare nuovi data dall'api grazie ad  "album" -->
            <div v-for="album in albumList" class="card" style="width: 18rem;">
                <!-- copertina -->
                <img class="card-img-top " :src="album.poster" alt="Card image cap">
                <div class="card-body">
                    <!-- Titolo album -->
                    <h4 class="card-title">{{album.title}} </h4>
                        <!-- Nome Artista -->
                        <p class="card-text"> {{album.author}} </p>
                        <!-- Genere album -->
                        <p class="card-text">{{album.genre}} </p>
                        <!-- Anno album -->
                        <p class="card-text">{{album.year}} </p>

                </div>
            </div>
        </div>
    </div>
    </main>
    <script src="vue.js"></script>
</body>

</html>