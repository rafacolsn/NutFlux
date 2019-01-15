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
            
            <div class="actors">
                    <h2 v-if="media.actors">Actors :</h2>
                        <ul class="actors-list">
                            <li v-for="actor in media.actors">
                                <a :href="'/actors/' + actor.id">
                                    {{ actor.firstname }} {{ actor.lastname }}
                                    <img :src="actor.picture" :alt="actor.lastname"/>
                                </a>
                            </li>
                        </ul>
            </div>      
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['media'],
    }
</script>
