<template>
    <div class="container">
        <h1>Medias index</h1>
        <ol v-if="medias">
            <li v-for="media in medias">
                <p>{{ media.title }}</p>
                <img :src="media.poster" :alt="media.title" />
                <form method="post" :action="'/medias/' + media.id">
                    <input type="hidden" name="id" :value="media.id" />
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" :value="csrf">

                    <button v-on:click="destroy">Delete</button>
                </form>
            </li>
        </ol>
    </div>
</template>

<script>
    export default {
        props: ['medias', 'csrf'],
        methods: {
            destroy: function ( event ) {
                axios.delete( '/medias/' + media.id )
                    .then( function ( response ) {
                        // handle success
                        console.log(response);
                    }   )
                    .catch( function ( error ) {
                        // handle error
                        console.log( error );
                    } );
            }
        }
    }
</script>
