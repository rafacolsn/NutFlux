<template>
    <div class="container">
        <form method="get" action="/search">
            <label for="keyword">Search :</label>
            <input type="text" name="keyword" />
            <button v-on:click="send"><span class="fas fa-search"></span></button>
        </form>
    </div>
</template>

<script>
    export default {
        methods: {
            send: function ( event ) {
                axios.get( '/search' )
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
