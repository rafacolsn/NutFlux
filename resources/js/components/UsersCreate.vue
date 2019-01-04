<template>
    <div class="container">
        <h1>Create a user</h1>

        <form method="post" action="/users">
            <p>
                <label for="firstname">Firstname :</label>
                <input type="text" name="firstname" v-model="firstname" />
            </p>
            <p>
                <label for="lastname">Lastname :</label>
                <input type="text" name="lastname" v-model="lastname" />
            </p>
            <p>
                <label for="avatar">avatar :</label>
                <input type="text" name="avatar" v-model="avatar" />
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
                avatar: ''
            }
        },
        methods: {
            create: function ( event ) {
                axios.post( '/users' )
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
