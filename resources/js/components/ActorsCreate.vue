<template>
    <div class="container">
        <h1>Create an actor</h1>

        <form method="post" action="/actors">
            <p>
                <label for="firstname">Firstname :</label>
                <input type="text" name="firstname" v-model="firstname" />
            </p>
            <p>
                <label for="lastname">Lastname :</label>
                <input type="text" name="lastname" v-model="lastname" />
            </p>
            <p>
                <label for="picture">Picture :</label>
                <input type="text" name="picture" v-model="picture" />
            </p>

            <input type="hidden" name="_token" :value="csrf">

            <button v-on:click="create">Create</button>
        </form>
    </div>
</template>

<script>
    export default {
        props: [ 'csrf' ],
        data () {
            return {
                firstname: '',
                lastname: '',
                picture: ''
            }
        },
        methods: {
            create: function ( event ) {
                axios.post( '/actors' )
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
