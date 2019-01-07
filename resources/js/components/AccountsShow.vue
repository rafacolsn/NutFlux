
<template>
    <div class="container">
        <h1>Your account : {{account.email}}</h1>
        <form>
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" :value="account.email" disabled />
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" disabled/>
            </p>


        </form>
    </div>
</template>

<script>
    export default {
        props: ['account', 'csrf'],
        data () {
            return {
                accountId: account.id,
                accountEmail: account.email,
                accountPassword: account.password,
            }
        },        }
</script>
