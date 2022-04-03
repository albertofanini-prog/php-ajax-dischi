console.log('ciao album')

const app = new Vue({
    el: '#app',
    data: {
        albums: []
    },
    methods: {
        getAlbum(){

            axios.get('http://localhost/php-ajax-dischi/VUE/album.php')
            .then( res => {
                this.albums = res.data
            })

        },
    },
    created() {
        this.getAlbum();
    }
})