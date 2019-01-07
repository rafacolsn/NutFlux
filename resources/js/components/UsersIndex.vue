<template>
    <div class="container">
        <h1>Users index</h1>
        <ol v-if="users">
            <li v-for="user in users">
                <p>{{ user.firstname }} {{ user.lastname }}</p>
                    <form method="GET" :action="'/login/' + user.id">
                        <input type="hidden" name="id" :value="user.id" />
                        <a v-on:click="login"><img   :src="user.avatar" :alt="user.firstname + ' ' + user.lastname" /></a>

                </form>
                
                
                <form method="post" :action="'/users/' + user.id">
                    <input type="hidden" name="id" :value="user.id" />
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
        props: ['users', 'csrf'],
        methods: {
            destroy: function ( event ) {
                axios.delete( '/users/' + user.id )
                    .then( function ( response ) {
                        // handle success
                        console.log(response);
                    }   )
                    .catch( function ( error ) {
                        // handle error
                        console.log( error );
                    } );
            },
            login: function ( event ) {
                axios.get( '/login/' + user.id).then( function ( response ) {
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
