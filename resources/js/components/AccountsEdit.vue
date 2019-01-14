
<template>
    <div class="container">
        <h1>Edit your account : {{account.email}}</h1>
        <form method="post" :action="'/accounts/' + account.id">
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" :value="account.email" />
            </p>
            <p>
                <label for="password">New password:</label>
                <input type="password" name="password" :value="account.password" />
            </p>

            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" :value="csrf">

            <button v-on:click="send">Edit</button>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['account', 'csrf'],
        data () {
            return {
                accountId: account.id,
                accountEmail: account.email,
                accountPassword: account.password,
            }
        },
        methods: {
            send: function ( event ) {
                axios.patch( '/accounts/' + account.id )
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
