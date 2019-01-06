<template>
    <div id="main" class="flip-container">
        <div class=front>
            <Header/>
            <Navibar/>
            <router-view @show-back="showBack"></router-view>
            <Footer/>
        </div>
        <div class="back">
            <GigDetail/>
        </div>
    </div>
</template>

<script>
    import Header from './Header.vue';
    import Navibar from './Navibar.vue';
    import Footer from './Footer.vue';
    import GigDetail from './GigDetail.vue';

    export default {
        name: 'main-app',
        components: {Header, Navibar, Footer, GigDetail},
        methods: {
            showBack: function () {

            }
        }
    }
</script>
