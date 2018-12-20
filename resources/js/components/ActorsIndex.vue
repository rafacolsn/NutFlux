<template>
    <div class="container">
        <h1>Liste des acteurs</h1>
        <ol v-if="actors">
            <li v-for="actor in actors">
                <p>{{ actor.firstname }} {{ actor.lastname }}</p>
                <img :src="actor.picture" :alt="actor.firstname + ' ' +  actor.lastname" />
                <form method="post" :action="'/actors/' + actor.id">
                    <input name="id" :value="actor.id" />
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" :value="csrf">

                    <button v-on:click="delete">Edit</button>
                </form>
            </li>
        </ol>
    </div>
</template>

<script>
    export default {
        props: ['actors', 'csrf'],
        methods: {
            delete: function ( event ) {
                axios.delete( '/actors/' + actor.id )
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
