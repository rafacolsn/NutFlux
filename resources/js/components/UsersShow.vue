<template>
    <div class="container">
        <h1>{{ user.firstname }} {{ user.lastname }}</h1>
        <img :src="user.avatar" :alt="user.firstname + ' ' + user.lastname" />
    </div>
</template>

<script>
    export default {
        props: ['user'],
    }
</script>
