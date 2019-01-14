<template>
    <div class="content">
        <h1>Home > 
                <span v-if="media.is_serie">TV Show</span>
                <span v-if="media.is_serie == 0">Movie</span> 
                > {{ media.title }}
            </h1>
        <div class="media-card">
            <div class="media-trailer-wrap">
                <h2>{{ media.title }} ( {{ media.year }} ) </h2>
                <p v-if="media.is_serie">This media is part of a TV show</p>
                <img :src="media.poster" :alt="media.title" />
                
                <div class="trailer">
                    <h2>Trailer</h2>
                </div>
                <iframe width="500" height="281" :src="'https://www.youtube.com/embed/' + media.trailer" frameborder="0" allowfullscreen></iframe>
                <div>
                    <h3>Summary</h3>
                    {{ media.summary }}
                </div>
            </div>
            <div class="actors-choices-wrap">
                <ul>
                    <li>Year: {{ media.year }}</li>
                    <li>Director: {{ media.director }}</li>
                    <li>Producer: {{ media.producer }}</li>
                    <li v-if="media.actors">Actors:
                        <ul>
                            <li v-for="actor in media.actors">
                                <a :href="'/actors/' + actor.id">
                                    {{ actor.firstname }} {{ actor.lastname }}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['media'],
    }
</script>
