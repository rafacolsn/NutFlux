<template>
    <div class="container">
        <h1>Add a media to one of your choice lists</h1>

        <form method="post" action="/choices">
            <div>
                <label for="mediaId">Media</label>
                <select name="mediaId">
                    <option v-for="media in medias" :value="media.id">{{ media.title }}</option>
                </select>
            </div>

            <div>
                <label for="type">List</label>
                <select name="type">
                    <option value=""> </option>
                    <option value="favourites">Favourites</option>
                    <option value="watched">Watched</option>
                    <option value="later">To watch later</option>
                </select>
            </div>

            <input type="hidden" name="userId" :value="user.id" />
            <input type="hidden" name="_token" :value="csrf">

            <button v-on:click="send">Add to list</button>
        </form>
    </div>
</template>

<script>
export default {
    props: [ "medias", "user", "csrf" ],
    methods: {
        send: function ( event ) {
            axios.post( '/choices' )
                .then( function ( response ) {
                    // handle success
                    console.log( response );
                }   )
                .catch( function ( error ) {
                    // handle error
                    console.log( error );
                } );
        }
    }
}
</script>
