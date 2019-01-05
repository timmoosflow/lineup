<template>
    <div id="main">
        <Header/>
        <Navibar/>
        <router-view></router-view>
        <Footer/>
    </div>
</template>

<script>
    import Header from './Header.vue';
    import Navibar from './Navibar.vue';
    import Footer from './Footer.vue';

    export default {
        name: 'main-app',
        components: {Header, Navibar, Footer}
    }
</script>
