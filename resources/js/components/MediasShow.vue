<template>
    <div class="content">
        <h1>Home >
                <span v-if="media.is_serie">TV Show</span>
                <span v-if="media.is_serie == 0">Movie</span>
                > {{ media.title }}
            </h1>
        <div class="media-card">


            <div class="row1">
                <div class="row1-column1">
                    <h2>{{ media.title }} ( {{ media.year }} ) </h2>
                    <img :src="media.poster" :alt="media.title" />
                    <div class="summary">
                        <h3>Summary</h3>
                        <p>{{ media.summary }}</p>
                    </div>
                </div>


                <div class="row1-column2">
                    <h2>Trailer</h2>
                    <div class="trailer">
                        <iframe width="400" height="225" :src="'https://www.youtube.com/embed/' + media.trailer" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="left top">
                        <h3>Director :</h3>
                        <p>{{ media.director }}</p>
                    </div>
                    <div class="right top">
                        <h3>Producer :</h3>
                        <p>{{ media.producer }}</p>
                    </div>
                </div>
            </div>

            <div class="row2">
                    <h2 v-if="media.actors">Actors :</h2>
                        <ul class="actors-list">
                            <li v-for="actor in media.actors">
                                <a :href="'/actors/' + actor.id">
                                    <p>{{ actor.firstname }} {{ actor.lastname }}</p>
                                    <img :src="actor.picture" :alt="actor.lastname"/>
                                </a>
                            </li>
                        </ul>
                    <p class="choices-form-wrapper">
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
            </p>
            </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['media', 'choices', 'user', 'csrf'],
        methods: {
        isInChoices: function ( mediaId, type ) {
            // Check if the media of ID mediaId is in the users choices
            // AND if the media is of the given type in the users choices
            // Return id of user choice matching criterias or false
            let choiceId = false;
            this.choices.forEach( function ( choice ) {
                console.log( choice );
                if ( choice.media_id == mediaId && choice.type == type ) {
                    choiceId = choice.id;
                    console.log( 'match !' );
                }
            } );
            return choiceId;
        }
    }
    }
</script>
