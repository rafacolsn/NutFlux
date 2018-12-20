<template>
    <div class="container">
        <h1>Edit this actor</h1>
        <form method="post" :action="'/actors/' + actor.id">
            <p>
                <label for="actorFirstname">Firstname</label>
                <input type="text" name="actorFirstname" :value="actor.firstname" v-bind="actorFirstname" />
            </p>
            <p>
                <label for="actorLastname">Lastname</label>
                <input type="text" name="actorLastname" :value="actor.lastname" v-bind="actorLastname" />
            </p>
            <p>
                <label for="actorPicture">Picture</label>
                <input type="text" name="actorPicture" :value="actor.picture" v-bind="actorPicture" />
            </p>
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" :value="csrf">

            <button v-on:click="send">Edit</button>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['actor', 'csrf'],
        data () {
            return {
                actorId: actor.id,
                actorFirstname: actor.firstname,
                actorLastname: actor.lastname,
                actorPicture: actor.picture
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            send: function ( event ) {
                axios.patch( '/actors/' + actor.id )
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
