<template>
    <h1>My Name is {{ name }}</h1>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                name: "abdo"
            }
        }
    }
</script>
