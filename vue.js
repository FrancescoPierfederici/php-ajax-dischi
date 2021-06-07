window.addEventListener("load", () => {
    const app = new Vue({
        el: '#app',
        data: {
            albumList: [],
            filteredData: [],
            genresList: [],
            genreToFilter: "",

        },
        methods: {


            onSelectChange() {
                if (this.genreToFilter === "") {
                    this.filteredData = this.albumList
                    return
                }
                const newFilteredData = this.albumList.filter((album) => {
                    return album.genre === this.genreToFilter
                })
                this.filteredData = newFilteredData
            },

            createGenreOptions() {

                this.albumList.forEach((album) => {
                    if (!this.genresList.includes(album.genre)) {
                        this.genresList.push(album.genre);
                    }

                })


            }
        },
        mounted() {
            axios.get("server.php").then((resp) => {
                this.albumList = resp.data;
                console.log(this.albumList)
            }).catch((er) => {
                console.log(er);
            })
        }
    });
});