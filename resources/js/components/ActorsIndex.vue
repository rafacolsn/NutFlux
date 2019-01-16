<template>
    <div class="content">
        <h1>Actors' List</h1>
        <ol class="actor-card flex" v-if="actors">
            <li class="actors-list" v-for="actor in actors">
                <a :href="'/actors/' + actor.id">
                    <h3>{{ actor.firstname }} {{ actor.lastname }}</h3>
                    <img :src="actor.picture" :alt="actor.firstname + ' ' +  actor.lastname" />
                    <form method="post" :action="'/actors/' + actor.id">
                        <input type="hidden" name="id" :value="actor.id" />
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" :value="csrf">

                        <button v-on:click="destroy">Delete this actor</button>
                    </form>
                </a>
            </li>
        </ol>
    </div>
</template>

<script>
    export default {
        props: ['actors', 'csrf'],
        methods: {
            destroy: function ( event ) {
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
