<template>
    <div class="text-center p-4">This is the BANDS component!
        {{ welcome }}
    </div>
</template>

<script>
    export default {
        name: 'Bands',
        computed: {
            welcome() {
                return this.$store.getters.welcome
            }
        }
    }
</script>
