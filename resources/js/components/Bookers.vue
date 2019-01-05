<template>
    <div class="text-center p-4">This is the BOOKERS component!
        {{ welcome }}
    </div>
</template>

<script>
    export default {
        name: 'Bookers',
        computed: {
            welcome() {
                return this.$store.getters.welcome
            }
        }
    }
</script>
