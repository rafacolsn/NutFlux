

<template>
    
    <ul>
        <li>
            <a href="/home">NutFlux</a> 
        </li>
        <li>
            <a href="/users">{{user.firstname}}</a> 
        </li>
        <li>
            <a href="/medias">Shows</a> 
        </li>
        <li>
            <a href="/logout">Logout</a> 
        </li>
        <li><search-field></search-field></li>
    </ul>
    
</template>

<script>
    export default {
        props: ['user'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>