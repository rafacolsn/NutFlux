<template>
    <div class="content">
        <h1>Search results for "{{ keyword }}"</h1>
        <div class="media-card" v-if="results.length > 0">
            <ul>
                <li v-for="result in results">
                    <div class="media-list" v-if="result.title">
                        <a :href="'/medias/' + result.id">
                            <h2>{{ result.title }} ({{ result.year }})</h2>
                            <img class="left" :src="result.poster" :alt="result.title" />
                        </a>
                            <p class="summary">{{ result.summary }}</p>
                    </div>

                    <div class="actors-list" v-if="result.lastname">
                        <img :src="result.picture" :alt="result.firstname + ' ' + result.lastname" />
                        <h2><a :href="'/actors/' + result.id">{{ result.firstname }} {{ result.lastname }}</a></h2>
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
