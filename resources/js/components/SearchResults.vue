<template>
    <div class="content">
        <h1>Search results for "{{ keyword }}"</h1>
        <div class="media-card" v-if="results.length > 0">
            <ul>
                <li v-for="result in results">
                    <div class="media-list" v-if="result.title">
                        <a :href="'/medias/' + result.id">
                            <h2 class="search-title">{{ result.title }} ({{ result.year }})</h2>
                            <div class="search-wrapper">
                                <img class="left" :src="result.poster" :alt="result.title" />
                                <p class="summary text-left">{{ result.summary }}</p>
                            </div>
                        </a>
                            
                    </div>

                    <div class="actors-list flex" v-if="result.lastname">
                        <a :href="'/actors/' + result.id">
                            <h2 class="search-title">{{ result.firstname }} {{ result.lastname }}</h2>
                            <img :src="result.picture" :alt="result.firstname + ' ' + result.lastname" />
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <div v-else>
            <p>No result.</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: [ 'keyword', 'results' ]
    }
</script>
