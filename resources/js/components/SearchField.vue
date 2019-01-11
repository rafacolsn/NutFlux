<template>
    <div class="container">
        <form class="searchfield" method="get" action="/search">
            <label for="keyword"></label>
            <input type="text" name="keyword" placeholder="Search"/>
            <button v-on:click="send"><i class="fas fa-search"></i></button>
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
