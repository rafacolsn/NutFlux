<template>
    <div class="container">
        <h1>{{ actor.firstname }} {{ actor.lastname }}</h1>
        <img :src="actor.picture" :alt="actor.firstname + ' ' + actor.lastname" />
    </div>
</template>

<script>
    export default {
        props: ['actor'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
