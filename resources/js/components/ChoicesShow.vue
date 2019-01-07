<template>
    <div class="container">
        <h1>
            <span v-if="type === 'favourites'">Favourites Choices</span>
            <span v-if="type === 'watched'">Watched Choices</span>
            <span v-if="type === 'later'">To-Watch Later Choices</span>
        </h1>
        <ul>
            <li v-for="media in choice">
                <a :href="'/medias/' + media.id">
                    {{ media.title }}<br />
                    <img :src="media.poster" :alt="media.title" />
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: [ "choice", "type" ],
    methods: {
        destroy: function( event ) {
            axios.delete( '/choices/' + item.id_choice )
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
