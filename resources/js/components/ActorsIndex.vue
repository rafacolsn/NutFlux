<template>
    <div class="container">
        <ol v-if="actors">
            <li v-for="actor in actors">
                <p>{{ actor.firstname }} {{ actor.lastname }}</p>
                <img :src="actor.picture" :alt="actor.firstname + ' ' +  actor.lastname" />
            </li>
        </ol>
    </div>
</template>

<script>
    export default {
        props: ['actors'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
