<template>
    <div class="container">
        <h1>{{ media.title }}</h1>
        <p :if="media.is_serie">This media is part of a TV show</p>
        <img :src="media.poster" :alt="media.title" />
        <ul>
            <li>Year: {{ media.year }}</li>
            <li>Director: {{ media.director }}</li>
            <li>Producer: {{ media.producer }}</li>
            <li>Actors:
                <ul :if="media.actors">
                    <li v-for="actor in media.actors">
                        <a :href="'/actors/'+ actor.id">
                            {{ actor.firstname }} {{ actor.lastname }}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <iframe width="500" height="500" :src="'https://www.youtube.com/embed/' + media.trailer" frameborder="0" allowfullscreen></iframe>
        <div>
            {{ media.summary }}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['media'],
    }
</script>
