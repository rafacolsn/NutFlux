<template>
    <div class="content">
        <div class="actor-card">
            
            <h1 class="breadcrump">
                <a href="/choices"> Home</a> >
                <a href="/actors"> Actors</a> >
                    {{ actor.firstname }} {{ actor.lastname }}
            </h1>
            <img :src="actor.picture" :alt="actor.firstname + ' ' + actor.lastname" />  
        </div>
        
        <div class="media-list" v-if="actor.medias">
            <h2 class="actors-shows-title">Actor's Shows</h2>
            <ul class="flex" >
                <li v-for="media in actor.medias" class="media-list-item">
                    <a :href="'/medias/' + media.id" >
                <div class="poster">
                    <img :src="media.poster" :alt="media.title"/>

                    <div class="choices-form-wrapper">

                        <!-- Favourites -->
                        <form class="choices-form" v-if="isInChoices( media.id, 'favourites' )"
                            :action="'/choices/' + isInChoices( media.id, 'favourites' )"
                            method="post" >
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices favourites-delete"><span class="fas fa-heart"></span></button>
                        </form>
                        <form class="choices-form" v-if="!isInChoices( media.id, 'favourites' )"
                            action="/choices"
                            method="post" >
                            <input type="hidden" name="mediaId" :value="media.id">
                            <input type="hidden" name="type" value="favourites">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices favourites"><span class="far fa-heart"></span></button>
                        </form>
                        <!-- To see later -->
                        <form class="choices-form" v-if="isInChoices( media.id, 'later' )"
                            :action="'/choices/' + isInChoices( media.id, 'later' )"
                            method="post" >
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices later-delete"><span class="fas fa-clock"></span></button>
                        </form>
                        <form class="choices-form" v-if="!isInChoices( media.id, 'later' )"
                            action="/choices"
                            method="post" >
                            <input type="hidden" name="mediaId" :value="media.id">
                            <input type="hidden" name="type" value="later">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices later"><span class="far fa-clock"></span></button>
                        </form>
                        <!-- Watched -->
                        <form class="choices-form" v-if="isInChoices( media.id, 'watched' )"
                            :action="'/choices/' + isInChoices( media.id, 'watched' )"
                            method="post" >
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices watched-delete"><span class="fas fa-check"></span></button>
                        </form>
                        <form class="choices-form" v-if="!isInChoices( media.id, 'watched' )"
                            action="/choices"
                            method="post" >
                            <input type="hidden" name="mediaId" :value="media.id">
                            <input type="hidden" name="type" value="watched">
                            <input type="hidden" name="_token" :value="csrf">
                            <button type="submit" class="choices watched"><span class="far fa-eye"></span></button>
                        </form>
                    </div>
                </div>
                <p>{{ media.title }} ({{ media.year }})</p>
            </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['actor', 'choices'],
        methods: {
        isInChoices: function ( mediaId, type ) {
            // Check if the media of ID mediaId is in the users choices
            // AND if the media is of the given type in the users choices
            // Return id of user choice matching criterias or false
            let choiceId = false;
            this.choices.forEach( function ( choice ) {
                //console.log( choice );
                if ( choice.media_id == mediaId && choice.type == type ) {
                    choiceId = choice.id;
                    //console.log( 'match !' );
                }
            } );
            return choiceId;
        }
    }
    }
</script>
