<template>
    <div class="container">
        <h1>Search results for "{{ keyword }}"</h1>
        <div v-if="results.length > 0">
            <ul>
                <li v-for="result in results">
                    <div v-if="result.title">
                        <img :src="result.poster" :alt="result.title" />
                        <h2><a :href="'/medias/' + result.id">{{ result.title }} ({{ result.year }})</a></h2>
                        <p>{{ result.summary }}</p>
                    </div>

                    <div v-if="result.lastname">
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
